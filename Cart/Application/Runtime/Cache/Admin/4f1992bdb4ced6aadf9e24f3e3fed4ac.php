<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>管理信息</title>
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <link rel="stylesheet" type="text/css" href="/Cart/Public/css/bootstrap.min.css" />
    <script type="text/javascript" src="/Cart/Public/js/jquery.min.js"></script>
    <script type="text/javascript" src="/Cart/Public/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/Cart/Public/css/OrderHandle.css" />
    <link rel="stylesheet" type="text/css" href="/Cart/Public/css/index/index.css" />
</head>
<body>
<div class="container">
    <style>
        .list-gruop{
            font-size: 16px;
        }
        .list-gruop li i{
            margin: 10px;
        }
        .list-gruop li a{
            color: #000;
        }
    </style>
    <div class="page-header">
       <h3><i class="glyphicon glyphicon-user" style="font-size: 40px;margin:10px 10px -10px 10px;text-shadow: #64A2FC 5px 3px 3px;color: #3385FF;"></i>设置</h3>
    </div>
    <ul class="list-gruop">
        <li class="list-group-item">
            <i class="glyphicon glyphicon-plus"></i><a href="<?php echo U('Center/addAddress');?>">新增配送地址</a>
        </li>
        <li class="list-group-item">
            <i class="glyphicon glyphicon-pencil"></i><a href="<?php echo U('Center/updateAddress');?>">修改已有配送地址</a>
        </li>
        <li class="list-group-item">
            <i class="glyphicon glyphicon-road"></i><a href="<?php echo U('Center/updatePersonal');?>">修改客服中心个人信息</a>
        </li>
    </ul>
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
</div>
</body>
</html>