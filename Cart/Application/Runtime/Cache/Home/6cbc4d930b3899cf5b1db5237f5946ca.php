<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>评论成功</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/Cart/Public/css/bootstrap.min.css">
    <link href="/Cart/Public/css/index/index.css" rel="stylesheet">
    <script type="text/javascript" src="/Cart/Public/js/jquery.js"></script>
    <script type="text/javascript" src="/Cart/Public/js/bootstrap.js"></script>
    <script type="text/javascript" src="/Cart/Public/js/index/index.js"></script>
    <style>
        .container{
            margin: 0 auto;
        }
        img{
            width: 70%;
            height: auto;
            margin-top: 60px;
        }

    </style>
    <script>
        $(function () {
            $('#complete').click(function () {
                window.history.go(-4);
            });
        });
    </script>
</head>
<body>
<div style="padding: 6px 0;background-color: white;border-bottom: dotted 1px #D3D3D3" class="text-center">
    <strong class="text-left text-muted" style="margin: 0;font-size: 18px">
        <span>评论成功</span>
    </strong>
    <a href="#" id="complete">
        <span style="position: absolute;right: 10px;top: 8px;">
        完成
    </span>
    </a>
</div>
<div class="container text-center">
     <img src="/Cart/Public/img/addcomment.jpg"/>
     <br>
    <p class="text-muted" style="font-size: 22px"><strong>评论成功</strong></p>
    <small>评价内容可以在商品详情页面查看</small>
</div>
</body>
</html>