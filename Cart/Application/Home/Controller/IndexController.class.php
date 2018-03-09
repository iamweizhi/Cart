<?php
namespace Home\Controller;
use Think\Controller;
/*
* ISdone
*
*
*/
class IndexController extends Controller {
	/*
	*
	*商品首页
	*/
    
    public function index(){
        $type=M('type');
        $typeinfo = $type -> select();
		$typeinfo_len = $type-> count();
		for ($i = 0; $i < $typeinfo_len; $i++) {
			$typeinfo[$i]['step'] = $i;
		}
		$this -> assign('typeinfo', $typeinfo);
		for ($c = 0; $c < $typeinfo_len; $c++) {
			$where['type'] = $typeinfo[$c]['typenum'];
            $goodsinfo[$c]['name'] =$typeinfo[$c]['typename'];
            $goodsinfo[$c]['num'] =$typeinfo[$c]['typenum']+1;
			$goodsinfo[$c]['child']= M('goods') -> where($where) -> select();
		}
        $this -> assign('goodsinfo', $goodsinfo);

        $this -> assign('new',M('goods')->limit(5)->select());
		$this -> display();
    }
/*--------------------购物车---------------------------------------*/
    /*
    *购物车  思路要购买的商品放到cookie保存 保存 name id 数量 价格
    *用ajax 提交 并返回价格 点击  '+'
    *session 结合
    */
     /*问题会不会影响 性能 ajax反应 为1秒 而 人手的速度远远超过一秒*/
   public function addcart(){
       if(is_null(session('cart'))){
        session('cart',array());
       }
      $id=I('post.id');
      if($id){
          if(array_key_exists($id,$_SESSION['cart'])){
              $_SESSION['cart'][$id]['num']++;
              $_SESSION['cart'][$id]['price']+=I('post.price');
          }else{
              $_SESSION['cart'][$id]=array('id'=>$id,'num'=>I('post.num'),'price'=>I('post.price'));
          }
       }
      foreach ($_SESSION['cart'] as $key => $value) {
         $num+=$value['num'];
         $totalprice+=$value['price'];
    }
      $this->ajaxReturn(array('price'=>$totalprice,'num'=>$num));
    }
    /*-------------减少购物车------------*/
    public function delnum(){
         $id=I('post.id');
         $_SESSION['cart'][$id]['num']--;
        if($_SESSION['cart'][$id]['num']==0) unset($_SESSION['cart'][$id]);
        $_SESSION['cart'][$id]['price']-=I('post.price');
         foreach ($_SESSION['cart'] as $key => $value) {
         $num+=$value['num'];
         $totalprice+=$value['price'];
      }
        $this->ajaxReturn(array('price'=>$totalprice,'num'=>$num));
    }

    /*
    *显示购物车
    */
    public function showcart(){
      $goods=M('goods');
      $index=0;
      foreach ($_SESSION['cart'] as $key => $value) {
          if(!is_null($value)){
              $goodsInfo[$index]=$value;
              $array=$goods->where(array('id'=>$key))->field('name,price')->select();
              $goodsInfo[$index]['name']=$array[0]['name'];
              $goodsInfo[$index]['myprice']=$array[0]['price'];
              $index++;
          }
      }
     $this->ajaxReturn(json_encode($goodsInfo));

    }
    // 点击清空按钮 销毁购物车
    public function releasecart(){
      session('cart',null);
    }
    /*显示收货地址*/
    public function  addAddress(){
        $this->display();
    }
    /*添加收货地址*/
    public function  addAddress2(){
        $this->display();
    }
    /*编辑地址信息*/
    public function  editAddress(){
        $this->display();
    }
    /*删除地址方法*/
    public function deleteAddress(){
        $this->ajaxReturn(array('state'=>'ok'));
            /*$this->ajaxReturn(array('state'=>$error));*/
    }
    /*订单四种状态的页面
    前台界面url way数值来确定页面类型0,1,2,3      5为查看全部订单*/

    public function goodsInfo(){
        $this->assign('title',"我的订单");
        $this->display();
    }
    /*订单详情页面*/
    public function detailInfo(){
        $this->assign('state','配货中');
        $this->display();
    }
    /*申请退货页面*/
    public function refund(){
        $this->display();
    }

    /*申请退货页面成功提交*/
    public function successRefund(){
        $this->display();
    }
    /*添加评论*/
    public function addCommentInfo(){
        $this->display();
    }/**/
    /*评论成功*/
    public function successComment(){
        $this->display();
    }
    /*
    *
    *商品详情页 此处用url传参数
    */
    public function detial($id=1){
      $goods=M('goods');
      $list=$goods->where(array('id'=>$id))->select();
      $this->assign("good",$list);
      /*加载评论*/
      $comment=M('comment');
      $this->assign('comment',$comment->getByGoid($id));
      $this->display();
    }

/* <!------------------------------订单-----------------------------------------------------!>*/
   /*
    *
    *处理提交订单  
    */
    public function postorder(){
        $un=M('university');
        $dormitory=M('Dormitory');
        $university=$un->select();
        $this->assign('university',$university);
        $this->assign('dormitory',$dormitory->where(array('uid'=>1,))->select());
        $this->display();
    }
    public function addorder(){
        $order=D('Order');
        $str=json_encode($_SESSION['cart']);
        /*用户第一次使用默认注册*/
        $openid=I('post.phonenumber');
        $result=$order->table('__USER__')->getByOpenid($openid);
        if(!$result)  M('user')->add(array('openid'=>md5($openid)));
        $discount=M('admin')->field('discount')->select();
        $price=session('price')-I('post.price')/$discount;
        $_POST=array(
            'price'=>$price,
            'goodsinfo'=>$str,
            'phonenumber'=>I('post.phonenumber'),
        );
        if($order->create()){
            $order->add();
            session('cart',null);
            $this->ajaxReturn(array('state'=>'success'));
            if(I('post.score')) M('User')->where(array('openid'=>$_SESSION['identify']))->save(array('score'=>0));
        }else{
            $error=$order->getError();
            $this->ajaxReturn(array('state'=>$error));
        }
        $this->display();
    }
    public function getScore(){
        $score=M('User')->where(array('openid'=>I('post.phonenumber')))->field('score')->select();
        if($score){
            echo $score[0]['score'];
            exit();
        }
        echo false;


    }

   /*显示我的历史订单*/
   public function showorder(){
      $order=M('Order');
      $info=$order->field('goodsinfo,ordertime')->where(array('phonenumber'=>session('identify'),))->order('ordertime ASC')->select();
      var_dump($info);
      for($i=0;$i<count($info);$i++){
        $goods[$i]=json_decode(htmlspecialchars_decode($info[$i]['goodsinfo']),true);
        $goods[$i]['ordertime']=$info[$i]['ordertime'];
      }
      $this->assign('goods',$goods);
      var_dump($goods); 
   }
/*---------------个人中心-----------------------------*/
   /*个人中心主页*/
    public function info(){
      $admin=M('admin');
      $this->assign('admin',$admin->select());
      if(IS_POST){
         $login=M('user')->where(array('user'=>I('post.id'),'password'=>I('post.password')))->select();
         if($login){
           session('identify',I('post.id'));
           $score=M('user')->where(array('openid'=>$_SESSION['identify']))->select();
           $this->assign('state',"已登录");
         }
      }else{
          $this->assign('state',"请先登录");
      }
      $this->display();
    }
/*--------------位置提示信息----------------------------------------------------------*/

  /*宿舍楼*/
  public function dormitory(){
    $do=M('dormitory');
    $dormitory=$do->where(array('uid'=>I('post.uid')))->select();
    $this->ajaxReturn($dormitory);
  }
    
/*----------------------发表评论-------------------------------------------------*/
    public function addComment(){
     $comment=D('Comment');
     if($comment->create()){
       $comment->add();
       $this->ajaxReturn(array('state'=>'success'));
     }
     $error=$comment->getError();
     $this->ajaxReturn(array('state'=>$error));
    }

   

/*---------------积分商城 不做----------------------------*/
   /* 积分商城 显示界面
   *param isScore若是1 就是积分可以换的商品
   */
    public function scorestore(){
     $gooods=M("goods");
     $list=$goods->where('isScore>0')->select();
     $this->assign('list',$list);
     $this->display();
    }

    /*
    *积分商城兑换
    */
    public function exchange(){
        $user=M('user');
        $score=$user->where($list)->find('score');
        $need_score=I('post.id');
        if($need_score<=$score){
            $score-=$need_score;
            $user->where($list)->save(array('score'=>$score));
            $this->ajaxReturn(array('state'=>"兑换成功",'score'=>$score));
        }else{
            $this->ajaxReturn(array('state'=>"对不起您的积分不足"));
        }
    }

}