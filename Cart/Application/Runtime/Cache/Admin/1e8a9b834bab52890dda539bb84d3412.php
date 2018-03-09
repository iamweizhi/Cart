<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>订单详情页面</title>
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <link rel="stylesheet" type="text/css" href="/Cart/Public/css/bootstrap.min.css" />
    <script type="text/javascript" src="/Cart/Public/js/jquery.min.js"></script>
    <script type="text/javascript" src="/Cart/Public/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/Cart/Public/js/OrderHandle.js"></script>
    <link rel="stylesheet" type="text/css" href="/Cart/Public/css/OrderHandle.css" />
</head>
<body>
<div class="container">
    <div id="head" class="col-xs-12 text-center text-muted">
        <h3>订单详情</h3>
    </div>
    <ul class="list-group" style="margin-top: 58px;margin-bottom:100px">
        <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="list-group-item">
                <label class="col-xs-12">
                    商品名称：<?php echo ($vo['name']); ?>
                </label>
                <span class="col-xs-7 text-center">
                    商品件数：<?php echo ($vo['num']); ?>
                </span>
                <span>
                    金额：<?php echo ($vo['num']); ?>*<?php echo ($vo['price']); ?>
                </span>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
    <!--<!DOCTYPE html>
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
</html>-->
    <footer>
        <nav class="navbar navbar-default navbar-fixed-bottom">
            <!--<div class="container" align="center">-->
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
                    <div class="col-md-3 col-sm-3 col-xs-3" align="center">
                        <li>
                            <a href="<?php echo U('Index/index');?>"style="color: white">首页</a>
                        </li>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-3" align="center"><li style="background-color: #104E8B"><a href="<?php echo U('OrderHandle/index');?>" style="color: white">订单中心</a></li></div>
                    <div class="col-md-3 col-sm-3 col-xs-3" align="center"><li><a href="<?php echo U('Classfiy/index');?>" style="color: white">商品上架</a></li></div>
                    <div class="col-md-3 col-sm-3 col-xs-3" align="center"><li><a href="<?php echo U('Center/index');?>" style="color: white">我的中心</a></li></div>
                </div>
            </ul>
            <!--</div>-->
        </nav>
    </footer>
</div>
</body>
</html>