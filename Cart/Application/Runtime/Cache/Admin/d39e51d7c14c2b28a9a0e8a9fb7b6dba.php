<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>客服中心</title>
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <script type="text/javascript" src="/Cart/Public/js/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="/Cart/Public/css/bootstrap.min.css" />
    <script type="text/javascript" src="/Cart/Public/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/Cart/Public/css/OrderHandle.css" />
    <link rel="stylesheet" type="text/css" href="/Cart/Public/css/admin/adminInfo.css" />
    <style>
        .page-header{
            position: relative;
        }
        #setPosition{
            position: absolute;
            right: 0;
            top: 0;
        }
    </style>
</head>
<body>
<div class="container"><!--<div id="head" class="col-xs-12 text-center text-muted">
        <h3>订单中心</h3>
    </div>-->
    <div class="page-header">
        <h3>客服中心</h3>
        <div id="setPosition">
            <a href="<?php echo U('Center/setMessage');?>">设置</a>
        </div>
    </div>
    <div>
        <img src="http://e.hiphotos.baidu.com/baike/whfpf%3D270%2C150%2C50/sign=70bf7c08aacc7cd9fa7867995f3c1308/3c6d55fbb2fb4316b1321d9f29a4462309f7d322.jpg"
             class="img-thumbnail" alt="我的二维码" style="height: 60px;width: 60px;"/>
    </div>

    <div id="con">
        <div class="content">
            <div class="line"></div>
            <label>联系方式：</label>
            <div class="words">12131415168</div>
        </div>
        <div class="content">
            <div class="line"></div>
            <label>邮箱：</label>
            <div class="words">3241561427@qq.com</div>
        </div>
        <div class="content3">
            <div class="line"></div>
            <label>店铺简介：</label>
            <div class="words" style="margin-left: 30px">
                袋鼠零食盒子，专程为您服务，袋鼠零食盒子，专程为您服务袋鼠零食盒子，专程为您服务袋鼠零食盒子，专程为您服务袋鼠零食盒子，专程为您服务袋鼠零食盒子，专程为您服务
            </div>
        </div>
    </div>
</div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script type="text/javascript" src="/Cart/Public/js/jquery.min.js"></script>
    <script type="text/javascript" src="/Cart/Public/js/OrderHandle.js"></script>
</head>
<body>
<footer>
    <nav class="navbar navbar-default navbar-fixed-bottom">

        <style>
            .nav-tabs
            {
                text-align: center;
                height: 60px;

            }
            .nav-tabs li a{
                line-height: 60px;
                display: block;
                text-decoration: none;
            }
        </style>
        <ul class="nav nav-tabs nav-tabs-justified" style="background-color:#1E90FF;">
            <div class="row" align="center" id="bottom_list">
                <div class="col-md-3 col-sm-3 col-xs-3" align="center">
                    <li>
                        <a href="<?php echo U('Index/index');?>"style="color: white">首页</a>
                    </li>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3" align="center"><li><a href="<?php echo U('OrderHandle/index');?>" style="color: white">订单中心</a></li></div>
                <div class="col-md-3 col-sm-3 col-xs-3" align="center"><li><a href="<?php echo U('Classfiy/index');?>" style="color: white">商品上架</a></li></div>
                <div class="col-md-3 col-sm-3 col-xs-3" align="center"><li style="background-color: #104E8B"><a href="<?php echo U('Center/index');?>" style="color: white">我的中心</a></li></div>
            </div>
        </ul>

    </nav>
</footer>
</body>
</html>
</body>
</html>