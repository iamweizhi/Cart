<?php

//对商品的上架和下架。
namespace Admin\Controller;

use Think\Controller;

class OrderHandleController extends Controller
{

    // private $goodTotal=array();
    private $arrAddresss = array();//有多少种地址
    private $arrOrder = array();//每种地址下对应的订单
    private $arrNum = array();//每种地址下的订单数目
    private static $arr = array();


    function index()
    {
        $this->todayNotHandle();

        $this->assign('address', $this->arrAddresss);
        $this->assign('res', $this->arrOrder);
        $this->assign('arrNum', $this->arrNum);
        $this->display();
    }

    /*订单总览页面*/
    function orderPandect(){
        $this->display();
    }

    function detail()
    {
        $id = $_GET['id'];
        $data['id'] = $id;
        $order = M('order');
        $res_or = $order->where($data)->select();
        //var_dump($res_or);
        //var_dump($res_or[0]['goodsinfo']);
        //把订单详情传过去
        $info = json_decode(stripcslashes($res_or[0]['goodsinfo']), true);
        $this->assign('info', $info);

        $this->display();

    }


    function todayNotHandle()
    {
        //获取今天的日期
//        $time=date("Y-m-d");
//        var_dump($time);
        $order = M('order');
        // $where['ordertime']=array('like','%'.$time.'%');
        $where['isdone'] = 0;
        $orderToday = $order->where($where)->group('university,dormitory,home')->field('university,dormitory,home')->select();
        //返回有多少种地址。
        for ($i = 0; $i < count($orderToday); $i++) {
            $adress = null;
            //根据地址信息寻找订单,拼地址
            foreach ($orderToday[$i] as $k => $val) {
                switch ($k) {
                    case "university":
                        $data['university'] = $val;
                        $adress .= $val . " ";
                        break;
                    case "dormitory":
                        $data['dormitory'] = $val;
                        $adress .= $val . " ";
                        break;
                    case "home":
                        $data['home'] = $val;
                        $adress .= $val . " ";
                        break;
                }
            }

            $res = $order->where($data)->select();
            //var_dump($res);

            //$this->shoppings($res);
            Array_push($this->arrNum, count($res));
            Array_push($this->arrAddresss, $adress);//二维的
            $adress = null;
            Array_push($this->arrOrder, $res);//三维的
        }

        //$this->display();
    }
    function delete1(){
        $order=M('Order');
       if($order->where(true)->delete()){
           echo "成功";
       }else{
           echo "失败";
       }
    }
    function add(){
        $data[0]=array('name'=>"雪碧",'price'=>2,'id'=>1,'num'=>3);
        $data[1]=array('name'=>"可乐",'price'=>2,'id'=>3,'num'=>5);
        $str=json_encode($data);
        $data=array(
            'university'=>"河南大学",
            'dormitory'=>"21#",
            'price'=>230,
            'goodsinfo'=>addslashes($str),
            'home'=>429
        );
        M('order')->add($data);

    }
    function myresult(){
       $list=M('Order')->select();
        echo "取出时".$list[1]['goodsinfo'];
        $str1=json_decode( stripcslashes($list[1]['goodsinfo']),true);

        var_dump($str1);
        exit();
    }

    function shoppings()
    {
        $foodId = array();
        $foodNum = array();
        $foodPrice = array();
        $foodName = array();
        $foodImg = array();
        $url = null;
        $food = M('goods');
        $order = M('order');

        $address = $_GET['address'];
        $add_arr = array();
        $add_arr =explode("+", $address);

        $data['university'] = $add_arr[0];

        $data['dormitory'] = $add_arr[1];
        $data['home'] = $add_arr[2];
        $res = $order->where($data)->select();


        for ($i = 0; $i < count($res); $i++) {


          $json1=json_decode( stripcslashes($res[$i]['goodsinfo']),true);

            foreach ($json1 as $k => $val) {
                foreach ($val as $key => $value) {

                    if ($key == "id") {
                        $data['id'] = $val;
                        $url = $food->where($data)->getField('picimg');
                       //获取图片地址
                        if (!in_array($value, $foodId)) {
                            Array_push($foodId, $value);
                            Array_push($foodPrice, $val['price']);
                            Array_push($foodName, $val['name']);
                            Array_push($foodImg, $url);

                        } else {
                            $offset = array_search($value, $foodId);
                            if(empty($foodNum)){
                                $foodNum[$offset]=0;
                            }else{
                            $foodNum[$offset] += $val['num'];
                            }

                        }


                    }

                }


            }

    }
        $this->assign('foodId', $foodId);
//        var_dump($foodId);

        $this->assign('foodNum', $foodNum);
//        var_dump($foodNum);
        $this->assign('foodPrice', $foodPrice);
        $this->assign('foodName', $foodName);
//        var_dump($foodName);
        $this->assign('foodImg', $foodImg);
        $this->display();

 }
}