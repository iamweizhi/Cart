<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>商品列表</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/Cart/Public/css/bootstrap.min.css">
    <link href="/Cart/Public/css/index/index.css" rel="stylesheet">
    <script type="text/javascript" src="/Cart/Public/js/jquery.js"></script>
    <script type="text/javascript" src="/Cart/Public/js/bootstrap.js"></script>
    <script type="text/javascript" src="/Cart/Public/js/index/index.js"></script>
</head>
<body data-spy="scroll" data-target="#myScrollspy">
<div class="container">
    <div class="jumbotron">
        <p class="text-danger center-block" style="width: 100px">零食盒子</p>
    </div>
    <div class="col-xs-3" id="myScrollspy">
        <ul class="nav nav-pills nav-stacked" data-spy="affix" style="position: fixed"  data-offset-top="125">
            <li class="active text-center"><a href="#setion-1">最新</a> </li>
            <?php if(is_array($typeinfo)): $i = 0; $__LIST__ = $typeinfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><li class="text-center"><a href="#setion-<?php echo ($i+1); ?>"><?php echo ($list["typename"]); ?></a> </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
    <div class="col-xs-9 no_padding" id="mygoods">
        <p class="title" id="setion-1" >最新上架</p>
        <?php if(isset($new)): if(is_array($new)): $i = 0; $__LIST__ = $new;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goods): $mod = ($i % 2 );++$i;?><span class="goodsid hide"><?php echo ($goods["id"]); ?></span>
                <a class="media" style="display: block" href="/Cart/index.php/Home/Index/detial/id/<?php echo ($goods["id"]); ?>">
                    <div class="pull-left">
                        <img src="/Cart/Public/img/timg.jpg" class="img"/>
                    </div>
                    <div class="media-body">
                        <div class="media-heading">
                            <h6><?php echo ($goods["name"]); ?></h6>
                        </div>
                        <p class="text-muted sale_mess">
                            销量:<?php echo ($goods["salenum"]); ?>单 &nbsp;
                            评分:<?php echo ($goods["score"]); ?>分
                        </p>
                        <div class="media-foot">
                              <span class="text-danger sale_price" >
                                 ￥<span class="price_content"><?php echo ($goods["price"]); ?></span>
                             </span>
                            <div class="goods_num_icon">
                                <label  class="bg-gray hide" ><i class="glyphicon glyphicon-minus"></i></label>
                                <span  class="numshow hide">0</span>
                                <label  class="bg-red" ><i class="glyphicon glyphicon-plus plus-sm"></i></label>
                            </div>
                        </div>
                    </div>
                </a><?php endforeach; endif; else: echo "" ;endif; ?>
        <?php else: ?>
            <div style="height: 30px" class="text-danger">
                尚未添加该功能
            </div><?php endif; ?>

        <?php if(is_array($goodsinfo)): $i = 0; $__LIST__ = $goodsinfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><p class="title" id="setion-<?php echo ($vo["num"]); ?>"><?php echo ($vo["name"]); ?></p>
            <?php if(is_array($vo['child'])): $i = 0; $__LIST__ = $vo['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goods): $mod = ($i % 2 );++$i;?><span class="goodsid hide"><?php echo ($goods["id"]); ?></span>
                    <a class="media" style="display: block" href="/Cart/index.php/Home/Index/detial/id/<?php echo ($goods["id"]); ?>">
                        <div class="pull-left">
                            <img src="/Cart/Public/img/timg.jpg" class="img"/>
                        </div>
                        <div class="media-body">
                            <div class="media-heading">
                                <h6><?php echo ($goods["name"]); ?></h6>
                            </div>
                            <p class="text-muted sale_mess">
                                销量:<?php echo ($goods["salenum"]); ?>单 &nbsp;
                                评分:<?php echo ($goods["score"]); ?>分
                            </p>
                            <div class="media-foot">
                              <span class="text-danger sale_price" >
                                 ￥<span class="price_content"><?php echo ($goods["price"]); ?></span>
                             </span>
                                <div class="goods_num_icon">
                                    <label  class="bg-gray hide" ><i class="glyphicon glyphicon-minus"></i></label>
                                    <span  class="numshow hide">0</span>
                                    <label  class="bg-red" ><i class="glyphicon glyphicon-plus plus-sm"></i></label>
                                </div>
                            </div>
                        </div>
                    </a><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
    </div>
     <div class="clear-fix"></div>
    <div id="showmycart" class="hide">
       <p class="title">1号口袋  <a class="glyphicon glyphicon-trash">清空购物车</a></p>
        <ul id="goodslist">

        </ul>
    </div>
    <footer id="footer" >
            <div class="col-xs-8 " id="showmy" >
                 <div class="cart" >
                     <span class="glyphicon glyphicon-shopping-cart" style="font-size: 28px;color:black;"></span>
                 </div>
                <div  id="setprice">￥<span class="money_sum">3元送</span></div>
            </div>
            <a class="col-xs-4 btn btn-warning btn-lg ensure" href="<?php echo U('Index/postorder');?>"  >确认订单</a>
    </footer>
</div>
</body>
</html>