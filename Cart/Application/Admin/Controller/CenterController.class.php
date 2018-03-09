<?php
/**
 * Created by PhpStorm.
 * User: TANGQIHAO
 * Date: 2017/3/21
 * Time: 21:16
 */
namespace Admin\Controller;
use Think\Controller;
class CenterController extends Controller
{
    /**客服电话**/
    function index(){
        $this->display();
    }

    /*添加收货地址*/
    function addAddress(){
        $this->display();
    }
    /*设置信息主页面*/
    function setMessage(){
        $this->display();
    }
    /*修改已有地址*/
    function updateAddress(){
        $this->display();
    }
    /*修改g个人中心*/
    function updatePersonal(){
        $this->display();
    }
}