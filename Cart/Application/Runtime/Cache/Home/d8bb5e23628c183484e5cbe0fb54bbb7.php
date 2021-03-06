<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>收货地址</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/Cart/Public/css/bootstrap.min.css">
    <link href="/Cart/Public/css/index/index.css" rel="stylesheet">
    <script type="text/javascript" src="/Cart/Public/js/jquery.js"></script>
    <script type="text/javascript" src="/Cart/Public/js/bootstrap.js"></script>
    <script type="text/javascript" src="/Cart/Public/js/index/index.js"></script>
    <style>
        body{
            background-color: #DDDDDD;
        }
        .container div{
            background-color: white;
        }
        .panel-body{padding-top: 5px;padding-left: 15px;padding-right: 0;padding-bottom: 5px}
        .col-xs-6,.col-xs-12{padding-left: 0;padding-right: 0}
        .col-xs-3{padding-right: 0}
        .panel{margin-bottom: 8px}
        .panel-body .col-xs-3 span{height: 25px;line-height: 25px}
    </style>
    <script>
        $(function () {
            $('.getBack').click(function () {
                window.history.go(-1);
            });
            $('.deleteAddress').each(function (index,value) {
                $(value).click(function () {
                    $.ajax({
                       type:'post',
                        url:"<?php echo U('Index/deleteAddress');?>",

                    });
                    $.post("<?php echo U('Index/deleteAddress');?>", {user_id:1,address_id:1}, function(msg){
                        alert(msg.state);
                        /*if(msg.state == 'ok') {
                            window.location.href = msg.callback;
                        } else {
                            alert(msg.state);
                        }*/
                    }, 'json').error(function(){
                        alert("网络连接错误，请稍后再试");
                    });
                });
            });
        })

    </script>
</head>
<body>
<div class="container">
    <div style="padding: 6px 0">
        <strong class="text-left text-muted" style="margin: 0;font-size: 18px">
            <span class="glyphicon glyphicon-chevron-left getBack" ></span>
            <span>管理收货地址</span>
        </strong>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <p class="col-xs-12">
                <span class="col-xs-6 text-left">the name</span>
                <span class="col-xs-6 text-right">143546789922</span>
            </p>
            <p>
                <span>河南大学金明校区12号宿舍楼123宿舍</span>
            </p>
        </div>
        <div class="panel-body">
            <p class="col-xs-6">
                <input type="radio" name="options" id="radio1"><label for="radio1" style="padding-left: 7px">默认地址</label>
            </p>
            <p class="col-xs-3">
                <a href="/Cart/index.php/Home/Index/editAddress/id/0" class="edit_address"><span class="glyphicon glyphicon-edit"></span><span>编辑 </span></a>
            </p>
            <p class="col-xs-3">
                <a href="#" class="deleteAddress"><span class="glyphicon glyphicon-trash"></span><span>删除</span></a>
            </p>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <p class="col-xs-12">
                <span class="col-xs-6 text-left">the name</span>
                <span class="col-xs-6 text-right">143546789922</span>
            </p>
            <p>
                <span>河南大学金明校区12号宿舍楼123宿舍</span>
            </p>
        </div>
        <div class="panel-body">
            <p class="col-xs-6">
                <input type="radio" id="radio2" name="options"><label for="radio2" style="padding-left: 7px;">默认地址</label>
            </p>
            <p class="col-xs-3">
                <a href="#" class="edit_address"><span class="glyphicon glyphicon-edit edit_address"></span><span>编辑 </span></a>
            </p>
            <p class="col-xs-3">
                <span class="glyphicon glyphicon-trash"></span><span>删除</span>
            </p>
        </div>
    </div>
    <div style="position: fixed;bottom: 0" class="col-xs-12">
        <a href="<?php echo U('Index/addAddress2');?>" class="btn btn-primary btn-lg btn-block" style="border-radius: 0"><span class="glyphicon glyphicon-plus" style="padding-right: 10px"></span>添加收货地址</a>
    </div>
</div>
</body>
</html>