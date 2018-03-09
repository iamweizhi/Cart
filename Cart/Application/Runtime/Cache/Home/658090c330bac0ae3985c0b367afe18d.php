<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>地址添加</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/Cart/Public/css/bootstrap.min.css">
    <link href="/Cart/Public/css/index/index.css" rel="stylesheet">
    <script type="text/javascript" src="/Cart/Public/js/jquery.js"></script>
    <script type="text/javascript" src="/Cart/Public/js/bootstrap.js"></script>
    <script type="text/javascript" src="/Cart/Public/js/index/index.js"></script>
    <script type="text/javascript" src="/Cart/Public/js/upDown/jquery-ui.min.js"></script>
    <script type="text/javascript" src="/Cart/Public/js/upDown/select-widget-min.js"></script>
    <link rel="stylesheet" type="text/css" href="/Cart/Public/css/drop-down.css" />
    <style>
       input.form-control{border: 0;}
       label{height: 25px;line-height: 25px}
        *{border: 0}
        form div{background-color: white}
    </style>
    <script>
        $(document).ready(function(){
            $(".ui-select").selectWidget({
                change       : function (changes) {
                    return changes;
                },
                effect       : "slide",
                keyControl   : true,
                speed        : 200,
                scrollHeight : 250
            });

        });

    </script>
</head>
<body>
<div class="container">
    <form>
        <div class="form-group">
            <label class="control-label col-xs-3">收货人</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" placeholder="填写收货人姓名">
            </div>
        </div><br><br><br>
        <div class="form-group">
            <label class="control-label col-xs-3">联系电话</label>
            <div class="col-xs-9">
                <input type="number" class="form-control" placeholder="固定/手机号码">
            </div>
        </div><br><br>

        <div style="margin-bottom: 20px">
            <label class="col-xs-3">
                学校
            </label>
            <div class="col-xs-9">
                <select name="drop2" class="ui-select form-control">
                    <option value="">--请选择--</option>
                    <option value="0">河南大学金明校区</option>
                    <option value="1">河南大学民生学院</option>
                    <option value="2">河南大学</option>
                </select>
            </div>
        </div><br><br>
        <div style="margin-bottom: 20px">
            <label class="col-xs-3">
                楼号
            </label>
            <div class="col-xs-9">
                <select name="drop2" class="ui-select form-control">
                    <option value="">--请选择--</option>
                    <option value="0">1</option>
                    <option value="1">1</option>
                    <option value="2">3</option>
                </select>
            </div>
        </div><br><br>
        <div class="form-group">
            <label class="control-label col-xs-3">宿舍号</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" placeholder="填写宿舍号">
            </div>
        </div><br><br>
        <div class="col-xs-12" style="height: 6px;background-color: #DDDDDD;border-top:1px solid #CECECE ;border-bottom:1px solid #CECECE ;"></div>
        <div style="border-bottom: 1px solid #CECECE;height: 50px">
            <label for="radio2" style="padding-left: 7px;height: 50px;line-height: 50px" class="col-xs-9">设置为默认地址</label>
            <input type="checkbox" id="radio2" name="options" style="margin-top: 15px" class="col-xs-3 text-right">
        </div>
        <div class="col-xs-12 text-center" style="margin-top: 30px">
            <a href="javascript:;" type="button" class="btn btn-primary" style="border-radius: 0;display: inline-block;width: 150px"><span class="glyphicon glyphicon-plus" style="padding-right: 10px"></span>保存</a>
        </div>
    </form>


</div>
</body>
</html>