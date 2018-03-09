<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
   /* private $type=array();//下拉框的类别
    private $imgUrl=null;//上传图片的地址
    private $goodsinfo=array();//商品信息*/

    public function index(){
        /*if(is_null(session('username'))&&is_null(session('password')))
        {
            $this->redirect("Index/login");

        }*/
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
           // var_dump($goodsinfo);
            $this -> assign('new',M('goods')->limit(5)->select());
            $this->display();

    }
    public function login(){
        if(IS_POST){
            if($_POST['loginName']=="LSHZ"&&$_POST['password']==md5("123456")){
                session('username',$_POST['loginName']);
                session('password',$_POST['password']);
                $this->redirect("Index/index");
            }else{
                 $this->error("验证失败！");
            }
        }
          $this->display();
    }
    public function checked(){

    }


    public function img(){

        $this->index();

    }
    /*删除操作*/
    public function discard() {
        $goods = M('goods');
        $where['id']=$_POST['id'];
        //$goods->where($where)->delete();
        $this->ajaxReturn(array('message'=>'删除成功！'));
    }
    /*//首页同用户界面
    function addComBoxOption(){
        $type=M('type');

        $typename=$type->field('typename')->select();
        foreach($typename as $val){
            array_push($this->type,$val);
        }

    }
    function ShowShoppings(){
         $good=M('goods');
    }*/
}