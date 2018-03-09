<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>发布评论</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/Cart/Public/css/bootstrap.min.css">
    <link href="/Cart/Public/css/index/index.css" rel="stylesheet">
    <link href="/Cart/Public/css/star/star-rating.css" rel="stylesheet"/>
    <script type="text/javascript" src="/Cart/Public/js/jquery.js"></script>
    <script type="text/javascript" src="/Cart/Public/js/bootstrap.js"></script>
    <script type="text/javascript" src="/Cart/Public/js/index/index.js"></script>

    <script type="text/javascript" src="/Cart/Public/js/star/star-rating.js"></script>

    <script>
        $(function () {
            $(".rating-kv").rating();
            $('.getBack').click(function () {
                window.history.go(-1);
            });
            $('.glyphicon-minus-sign').hide();
            $('.caption').hide();
        });
    </script>

</head>
<body>
<div class="container">
    <div style="padding: 10px 0;background-color: white;border-bottom: dotted 1px #D3D3D3">
        <strong class="text-left text-muted" style="margin: 0;font-size: 18px">
            <span class="glyphicon glyphicon-chevron-left getBack" ></span>
            <span>商品详情</span>
        </strong>
    </div>
    <div style="position: relative;padding-right: 10px">
        <input style="display: inline" value="5" type="number" size="sm" class="rating col-xs-8" min=0 max=5 step=1 data-container-class='text-right' data-glyphicon=0>
        <span style="position: absolute;left: 10px;top: 25px;z-index: 100;font-size: 18px">评分</span>
    </div>

    <div>
        <textarea class="col-xs-12" cols="100%" rows="12" style="border: 0" placeholder="本次购物满意吗？说说你购买心情，分享给想买的他们吧"></textarea>
    </div>
    <p class="col-xs-12 text-right text-muted">
        <small>需要至少15字才能发表评论</small>
    </p>
    <div class="col-xs-12" style="padding-right: 20px;margin-top: 60px;">
        <a href="<?php echo U('Index/successComment');?>" class="btn btn-default btn-block" style="border-radius: 0;">
            发布评价
        </a>
    </div>
</div>
</body>
</html>