<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>我的中心页面</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/Cart/Public/css/bootstrap.min.css">
    <link href="/Cart/Public/css/index/index.css" rel="stylesheet">
    <script type="text/javascript" src="/Cart/Public/js/jquery.js"></script>
    <script type="text/javascript" src="/Cart/Public/js/bootstrap.js"></script>
    <script type="text/javascript" src="/Cart/Public/js/index/index.js"></script>
    <style>
        .jumbotron{
            background-color: #A0BF7C;padding: 11px;position: relative
        }
        .jumbotron img{width: 65px;height: 65px}
        .jumbotron>div{position: absolute;right: 10px;top:8px;}
        .jumbotron>div>span{display: inline-block;font-size: 25px;color: white;}
        .col-xs-12,.col-xs-10,.col-xs-2{padding: 0}
        .col-xs-4{border-right: 1px solid #E8E8E8}
        .grey_color_div{background-color: #E5E5E5;
            height:10px;}
        .panel-heading{padding-bottom: 5px}
        .panel-body{padding: 0}


    </style>
    <script>
        $(function () {
            $('.goods_info').each(function (index,value) {
                $(value).click(function () {

                });
            });
            $('.badge').each(function (index,value) {
                if(parseFloat($(value).text())<=0){
                    $(value).addClass('hide');
                }
            });
        });
    </script>
</head>
<body>
<div class="container">
    <div class="jumbotron text-center">
        <img src="/Cart/Public/img/19816.jpg" class="img-circle" alt="我的头像"/>
        <br><br>
        <p style="color: white">此处为用户名</p>
        <!--<div>
            <span class="glyphicon glyphicon-edit"></span>
        </div>-->
    </div>
    <div class="col-xs-12" style="margin-top: 5px">
        <p class="col-xs-4 text-center">
            50<br>
            <span class="text-muted">信誉额度</span>
        </p>
        <p class="col-xs-4 text-center">
            0<br>
            <span class="text-muted">积分</span>
        </p>
        <p class="col-xs-4 text-center">
            0.00<br>
            <span class="text-muted">消费总额</span>
        </p>
    </div>
    <div class="grey_color_div col-xs-12">
    </div>
    <div class="panel panel-default">
        <div class="panel-heading col-xs-12" style="margin-bottom: 15px">
            <p class="col-xs-10">
                <span class="glyphicon glyphicon-briefcase" style="color: #EA2000;margin-right: 10px;height: 33px;line-height: 33px">
                </span>
                <span>商城订单</span>
            </p>
            <a href="/Cart/index.php/Home/Index/goodsInfo/id/5" class="col-xs-2 text-right" style="margin-top: 10px;padding-right: 10px">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
        <div class="panel-body" style="padding-top: 15px">
            <a href="/Cart/index.php/Home/Index/goodsInfo/way/0" class="goods_info">
                <p class="col-xs-3 text-center" style="position: relative">
                    <span class="glyphicon glyphicon-envelope text-muted">
                    </span>
                    <span class="badge pull-right" style="background-color: #DE5925;position: absolute;top:-9px">15</span>
                    <br>
                    <span style="color: black">配送中</span><!--配送中-->
                </p>
            </a>
            <a href="/Cart/index.php/Home/Index/goodsInfo/way/1" class="goods_info">
                <p class="col-xs-3 text-center goods_info"  style="position: relative">
                    <span class="glyphicon glyphicon-film text-muted"></span>
                    <span class="badge pull-right" style="background-color: #DE5925;position: absolute;top:-9px">0</span>
                    <br>
                    <span style="color: black">退货中</span><!--已经申请退货-->
                </p>
            </a>
            <a href="/Cart/index.php/Home/Index/goodsInfo/way/2" class="goods_info">
                <p class="col-xs-3 text-center goods_info" style="position: relative">
                    <span class="glyphicon glyphicon-inbox text-muted"></span>
                    <span class="badge pull-right" style="background-color: #DE5925;position: absolute;top:-9px">15</span>
                    <br>
                    <span style="color: black">待付款</span><!--待付款项可以退货-->
                </p>
            </a>
            <a href="/Cart/index.php/Home/Index/goodsInfo/id/0" class="goods_info">
                <p class="col-xs-3 text-center goods_info" style="position: relative">
                    <span class="glyphicon glyphicon-list-alt text-muted"></span>
                    <span class="badge pull-right" style="background-color: #DE5925;position: absolute;top:-9px">15</span>
                    <br>
                    <span style="color: black">待评价</span>
                </p>
            </a>
        </div>
    </div>
    <div class="grey_color_div col-xs-12" style="margin-top: -19px">
    </div>
    <a href="<?php echo U('Index/addAddress');?>">
        <div class="col-xs-4 text-center">
            <span class="glyphicon glyphicon-map-marker" style="color: #8381C9;margin-right: 10px;height: 33px;line-height: 33px;font-size: 25px"></span>
            <br><span style="color: gray">收货地址</span>
        </div>
    </a>
</div>
</body>
</html>