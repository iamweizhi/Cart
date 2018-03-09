<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>商品详情</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/Cart/Public/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="/Cart/Public/css/detial.css" />
    <style>
        *{
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
<span class="hide getid"><?php echo ($id); ?></span>
    <div id="myCarousel" class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active">
                <img src="/Cart/Public/img/just.jpg" alt="1">
            </div>
            <div class="item">
                <img src="/Cart/Public/img/just.jpg" alt="2">
            </div>
            <div class="item">
                <img src="/Cart/Public/img/just.jpg" alt="3">
            </div>
        </div>
        <a href="#myCarousel" data-slide="prev" class="carousel-control left"></a>
        <a href="#myCarousel" data-slide="next" class="carousel-control right"></a>
    </div>
    <div id="content">
        <h4 style="font-family: 微软雅黑"><?php echo ($good[0]['name']); ?></h4>
        <span style="display: inline-block;margin-right: 30px"><?php echo ($good[0]['describe']); ?></span>
        <div class="price">
            <span id="saleprice">￥<?php echo ($good[0]['price']); ?></span>
            <span class="num">销量：<?php echo ($good[0]['salenum']); ?></span>
            <button class="btn" id="che">加入购物车</button>
        </div>
        <div class="lun">
            <div class="line"></div>
            <div class="word">商品评价</div>
        </div>
        <div class="discuss">
            <ul class="list-group">
                <?php if(is_array($comment)): $i = 0; $__LIST__ = $comment;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$co): $mod = ($i % 2 );++$i;?><li class="list-group-item" style="padding: 0;border-style: dashed">
                        <p>
                            <span class=" text-info">评论人：匿名</span>
                            <span class="text-muted" style="display: inline-block;margin-left: 30px">
                                评论时间：<?php echo ($co['datetime']); ?>
                            </span>
                        </p>
                        <p class="text-center"><?php echo ($co['comment']); ?></p>
                        <p class="text-right" style="padding-right: 15px">星级:<?php echo ($co['stars']); ?></p>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
    </div>
    <div style="position: fixed;bottom: 0;width: 100%;border: 1px solid #086bb9;opacity: 0.6;background-color: white">
        <form class="col-xm-12" method="post" enctype="multipart/form-data" onsubmit="formControl()" id="form_control">
            <input type="text" placeholder="发表评论" id="commentText" class="inputLeft col-xm-8" style="border: 0;outline: none" >
            <input type="submit" id="inputChange" class="btn btn-primary  col-xm-4" value="发表" style="display: inline-block;position: absolute;right: 0;border-radius: 0">
        </form>
    </div>

        <script type="text/javascript" src="/Cart/Public/js/jquery.js"></script>
        <script type="text/javascript" src="/Cart/Public/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/Cart/Public/js/myJs.js"></script>
</body>
</html>