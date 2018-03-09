<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>申请退货</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/Cart/Public/css/bootstrap.min.css">
    <link href="/Cart/Public/css/index/index.css" rel="stylesheet">
    <script type="text/javascript" src="/Cart/Public/js/jquery.js"></script>
    <script type="text/javascript" src="/Cart/Public/js/bootstrap.js"></script>
    <script type="text/javascript" src="/Cart/Public/js/index/index.js"></script>
    <style>
        .checkbox{padding:0 20px;border-bottom: 1px dotted #7CAF60;}
        .media{padding-left: 10px}
        .col-xs-12{padding: 0}
    </style>
    <script>
        $(function () {
            $('.getBack').click(function () {
                window.history.go(-1);
            });
            $('.bg-red').each(function (index,value) {
                $(value).click(function () {
                    event.preventDefault();
                    $('.numshow').eq(index).removeClass('hide').text(parseInt($('.numshow').eq(index).text())+1);
                    $('.bg-gray').eq(index).removeClass('hide');
                    if(parseInt($('.buyNum').eq(index).text())<=parseInt($('.numshow').eq(index).text()))
                    {
                        $('.numshow').eq(index).text($('.buyNum').eq(index).text());
                    }
                });
            });
            $('.bg-gray').each(function (index,value) {
                $(value).click(function () {
                    event.preventDefault();
                    $('.numshow').eq(index).text(parseInt($('.numshow').eq(index).text())-1);
                    if(parseInt($('.numshow').eq(index).text())<=0){
                        $(this).addClass('hide');
                        $('.numshow').eq(index).addClass('hide');
                        $('.check_item').eq(index).attr('disabled','disabled');
                    }
                });
            });
        })
    </script>
</head>
<body>
<div class="container" style="margin-bottom: 50px">
    <div style="padding: 10px 0;background-color: white;border-bottom: dotted 1px #D3D3D3">
        <strong class="text-left text-muted" style="margin: 0;font-size: 18px">
            <span class="glyphicon glyphicon-chevron-left getBack" ></span>
            <span>商品详情</span>
        </strong>
    </div>
    <div class="checkbox">
        <label>
            <input type="checkbox" value="" class="check_item disable" style="margin-top: 22px">
            <a class="media" href="/Cart/index.php/Home/Index/detial/id/<?php echo ($goods["id"]); ?>">
                <div class="media-left" style="vertical-align: middle;">
                    <img src="/Cart/Public/img/timg.jpg" class="media-object" align="middle"/>
                </div>
                <div class="media-body">
                    <div class="media-heading">
                        <h6>可乐</h6>
                        <!--购买数量-->
                        <span style="display: none" class="buyNum">5</span>
                    </div>
                    <p class="text-muted sale_mess">
                        销量:15单 &nbsp;
                        评分:15分
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
            </a>
        </label>
    </div>
    <div class="checkbox">
        <label>
            <input type="checkbox" value="" class="check_item disable" style="margin-top: 22px">
            <a class="media" href="/Cart/index.php/Home/Index/detial/id/<?php echo ($goods["id"]); ?>">
                <div class="media-left" style="vertical-align: middle;">
                    <img src="/Cart/Public/img/timg.jpg" class="media-object" align="middle"/>
                </div>
                <div class="media-body">
                    <div class="media-heading">
                        <h6>可乐</h6>
                        <!--购买数量-->
                        <span style="display: none" class="buyNum">5</span>
                    </div>
                    <p class="text-muted sale_mess">
                        销量:15单 &nbsp;
                        评分:15分
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
            </a>
        </label>
    </div>

</div>
<div style="position: fixed;bottom: 0" class="col-xs-12">
    <a href="<?php echo U('Index/successRefund');?>" class="btn btn-lg btn-block" style="border-radius: 0;background-color: #E33640;color: white"><span class="glyphicon glyphicon-arrow-up" style="padding-right: 10px"></span>提交</a>
</div>
</body>
</html>