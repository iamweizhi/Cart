<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>这是同一地址下的所有商品</title>
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <link rel="stylesheet" type="text/css" href="/Cart/Public/css/bootstrap.min.css" />
    <script type="text/javascript" src="/Cart/Public/js/jquery.min.js"></script>
    <script type="text/javascript" src="/Cart/Public/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/Cart/Public/js/OrderHandle.js"></script>
    <link rel="stylesheet" type="text/css" href="/Cart/Public/css/OrderHandle.css" />
    <style>
        img{
            width: 85px;
            height: 85px;
        }
    </style>
</head>
<body>
<!--这是同一地址下的所有商品这是同一地址下的所有商品这是同一地址下的所有商品这是同一地址下的所有商品
hello word-->
<div id="head" class="page-header text-center col-xs-12" style="margin-top: 15px;margin-bottom: 10px">
    <h3>订单详情</h3>
</div>
<ul class="list-group" style="margin-top: 68px">
    <?php if(is_array($foodName)): $k = 0; $__LIST__ = $foodName;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><li class="list-group-item col-xs-12">
            <div class="col-xs-1"></div>
            <div class="col-xs-3 well text-center" style="margin-top: 15px">
                <img src="http://e.hiphotos.baidu.com/baike/whfpf%3D270%2C150%2C50/sign=70bf7c08aacc7cd9fa7867995f3c1308/3c6d55fbb2fb4316b1321d9f29a4462309f7d322.jpg"
                class="img-thumbnail"/>
            </div>
            <div class="col-xs-1"></div>
            <div class="col-xs-7 " style="margin-top: 25px">
                <label class="col-xs-12">
                    商品名称：<?php echo ($vo); ?>
                </label>
                <span class="col-xs-12">
                    商品件数：<?php echo ($foodNum[$k-1]); ?>
                </span>
                <span class="col-xs-12">
                    总金额：<?php echo ($foodNum[$k-1]); ?>*<?php echo ($foodPrice[$k-1]); ?>
                </span>
            </div>
        </li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
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
               <div class="col-md-3 col-sm-3 col-xs-3" align="center"><li style="background-color: #104E8B"><a href="<?php echo U('OrderHandle/index');?>" style="color: white">订单中心</a></li></div>
               <div class="col-md-3 col-sm-3 col-xs-3" align="center"><li><a href="<?php echo U('Classfiy/index');?>" style="color: white">商品上架</a></li></div>
               <div class="col-md-3 col-sm-3 col-xs-3" align="center"><li><a href="<?php echo U('Center/index');?>" style="color: white">我的中心</a></li></div>
           </div>
       </ul>
       </div>

   </nav>
</footer>


</body>
</html>