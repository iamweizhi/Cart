<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>订单页面</title>
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <script type="text/javascript" src="/Cart/Public/js/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="/Cart/Public/css/bootstrap.min.css" />
    <script type="text/javascript" src="/Cart/Public/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/Cart/Public/css/OrderHandle.css" />
    <link rel="stylesheet" type="text/css" href="/Cart/Public/css/admin/adminInfo.css" />
</head>
<body>
<div class="container">
    <ul class="list-gruop">
        <li class="list-group-item">
            <a href="<?php echo U('Center/addAddress');?>">查看未处理订单</a>
        </li>
        <li class="list-group-item">
            <a href="<?php echo U('Center/updateAddress');?>">查看已经完成订单</a>
        </li>
        <li class="list-group-item">
            <a href="<?php echo U('Center/updateAddress');?>">修改客服中心个人信息</a>
        </li>
    </ul>
</div>
<footer>
    <nav class="navbar navbar-default navbar-fixed-bottom">
        <div class="container" align="center" style="padding: 0">
            <style>
                .nav-tabs
                {
                    text-align: center;
                    height: 60px;

                }
                .nav-tabs li a{
                    line-height: 60px;
                }
            </style>
            <ul class="nav nav-tabs nav-tabs-justified" style="background-color:#1E90FF;">
                <div class="row" align="center" id="bottom_list">
                    <div class="col-md-3 col-sm-3 col-xs-3" align="center"><li>
                        <a href="<?php echo U('Index/index');?>"style="color: white">首页</a>
                    </li></div>
                    <div class="col-md-3 col-sm-3 col-xs-3" align="center"><li style="background-color: #104E8B"><a href="<?php echo U('OrderHandle/orderPandect');?>" style="color: white">订单中心</a></li></div>
                    <div class="col-md-3 col-sm-3 col-xs-3" align="center"><li><a href="<?php echo U('Classfiy/index');?>" style="color: white">商品上架</a></li></div>
                    <div class="col-md-3 col-sm-3 col-xs-3" align="center"><li><a href="<?php echo U('Center/index');?>" style="color: white">我的中心</a></li></div>
                </div>
            </ul>
        </div>

    </nav>
</footer>
</body>
</html>