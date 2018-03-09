<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>订单页面</title>
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <link rel="stylesheet" type="text/css" href="/Cart/Public/css/bootstrap.min.css" />
    <script type="text/javascript" src="/Cart/Public/js/jquery.min.js"></script>
    <script type="text/javascript" src="/Cart/Public/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/Cart/Public/css/OrderHandle.css" />
</head>
<body>
<!--<div class="jumbotron">
    <h3>订单中心</h3>
</div>-->
<style>

</style>
<div class="container">
    <div id="head" class="col-xs-12 text-center text-muted">
        <h3>订单中心</h3>
    </div>
    <div style="height: 25px;">
        <p style="margin-left: 10px"><i class="glyphicon glyphicon-question-sign" style="margin-right: 10px"></i>未处理订单</p>
    </div>
    <div class="panel-group" id="accordion" style="margin-bottom: 50px;margin-top: 35px">
        <?php if(is_array($address)): $k = 0; $__LIST__ = $address;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$arr1): $mod = ($k % 2 );++$k;?><div class="panel panel-default one">
                <div class="panel-heading">
                    <div class="panel-title">
                        <a href="#collapse<?php echo ($k); ?>" data-toggle="collapse" data-parent="#accordion">
                            <p style="font-weight: 600"><?php echo ($arr1); ?><span class="text-danger" style="display: inline-block;margin-left: 20px">X<?php echo ($arrNum[$k-1]); ?></span></p>
                            <h6 class="text-right">
                                <a href="<?php echo U('OrderHandle/shoppings',array('address'=>$arr1));?>"><i>查看所有商品</i></a>
                            </h6>
                        </a>
                    </div>
                </div>
                <div class="panel-collapse collapse fade" id="collapse<?php echo ($k); ?>">
                    <ul class="list-group small_list_group panel-body">
                        <?php if(is_array($res[$k-1])): $i = 0; $__LIST__ = $res[$k-1];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$arr2): $mod = ($i % 2 );++$i; if(intval($arr2['price']) > 0): ?><li class="list-group-item">
                                    <?php echo ($arr1); ?><br/>
                                    <span>订单号</span><?php echo ($arr2["id"]); ?><br/>
                                    <span>下单时间</span><?php echo ($arr2["ordertime"]); ?><br>
                                    <?php echo ($arr2["customname"]); ?>--<?php echo ($arr2["phonenumber"]); ?>
                                    <br>
                                    <span class="col-xs-8 text-left">本单收入：<?php echo ($arr2["price"]); ?></span>

                                <span class="text-right">
                                    <!--/LSHZ/index.php/Admin/Classfiy/detail.html?id=<?php echo ($arr2["id"]); ?>-->
                                    <a href="<?php echo U('OrderHandle/detail',array('id'=>$arr2['id']));?>" class="text-warning">追踪详情</a>
                                </span>
                                </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>

            </div><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>

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