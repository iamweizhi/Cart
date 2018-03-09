<?php

//对商品的上架和下架。
namespace Admin\Controller;

use Think\Controller;
use Think\Upload;

class ClassfiyController extends Controller
{

    private $type = array();//下拉框的类别
    private $imgUrl = null;//上传图片的地址


    function index()
    {
        $this->addComBoxOption();
//        var_dump($this->type);
        $this->assign('type',$this->type);
        $this->display();
    }


    //类别动态添加到下拉框和前台分类页面
    function addComBoxOption()
    {
        $type = M('type');
        $typename = $type->field('typename')->select();
        foreach ($typename as $val) {
            array_push($this->type, $val);
        }
    }

    //管理员添加商品
    function addShopings()
    {
        if (IS_POST) {
            $data = I('post.');//获取所有post的数据
            $data['picimg'] = $this->imgUrl;
            var_dump($data);
            $goods = M('goods');
            if ($goods->create()) {
                $goods->data($data)->add();

            } else {
                $this->error('错误');
            }
            //var_dump($goods->select());
        } else {
            $this->error('非法请求');
        }
    }


    function UpImgAndAdd()
    {
        $upload = new Upload();
        $upload->maxSize = 20000000;//我没有限制文件大小
        $upload->allowExts = array('jpg', 'png', 'gif');
        $upload->savePath = './';
        $upload->autoSub = false;
        $upload->hash = false;
        $info = $upload->upload();
        if (!$info) {
            $this->error($upload->getError());
        }
        else{
           foreach ($info as $file) {
               $this->imgUrl = $file['savapath'];
           }
            $this->addShopings();

        }


        var_dump($this->imgUrl);
        $this->success('添加成功完成', 'index', 3);
    }
    //详情页面。
}