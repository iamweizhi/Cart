<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>管理员登录</title>
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <link rel="stylesheet" type="text/css" href="/Cart/Public/css/bootstrap.min.css" />
    <script type="text/javascript" src="/Cart/Public/js/jquery.min.js"></script>
    <script type="text/javascript" src="/Cart/Public/js/JQuery.md5.js"></script>
    <script type="text/javascript" src="/Cart/Public/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/Cart/Public/js/OrderHandle.js"></script>
    <link rel="stylesheet" type="text/css" href="/Cart/Public/css/OrderHandle.css" />
    <script>

        $(function () {
            $("#concelModal").on("click",function(){
                $("input[type='text']").val("");
                $("input[type='password']").val("");
            });

            $('#btn').click(function () {
//                alert($.md5("ogsihgo"));
                if ($('#loginName').val().length<2) {
                    $('#loginName').focus();
                    $('#tip1').show();
                } else if($('#password').val().length<2) {
                    $('#password').focus();
                    $('#tip2').show();
                } else {
                    $('#tip1').hide();
                    $('#tip2').hide();
                    //md5加密传输  
                    var pwd=$('#password').val();
                    var md5Pwd=$.md5(pwd);
                    $.ajax({
                        url:"<?php echo U('Index/index');?>",
                        type:'post',
                        data:{
                            loginName:$('#loginName').val(),
                            password:md5Pwd,
                        },
                    });
                }
            });
        });
    </script>
    <style>
        .tip{
            margin-left: 40px;
            color: red;
        }
    </style>
</head>
<body>
<div class="page-header text-center">
    <h4>管理员界面</h4>
</div>
<div style="height: 50px">
</div>
<div class="container">
    <div class="input-group" style="padding: 0 20px;height: 50px">
        <span class="input-group-addon">用户名：</span>
        <input type="text" id="loginName" class="form-control" value=" " style="height: 50px">

    </div>
    <span class="tip" id="tip1" style="display: none">用户名不能为空</span>
    <br><br/>
    <div class="input-group" style="padding: 0 20px;height: 50px">
        <label class="input-group-addon">密 码：</label>
        <input type="password" id="password" class="form-control" value="" style="height: 50px">
    </div>
    <span class="tip" style="display: none" id="tip2">密码不能为空</span>
    <br><br>
    <div style="width: 100%;height: 1px;background-color: #E5E5E5;margin-top: 30px;margin-bottom: 50px">

    </div>
    <div class="input-group text-center col-xs-12" style="padding: 0 20px">
        <button type="submit" id="btn" class="btn btn-primary btn-lg" style="border-radius: 0;margin-right: 100px">登录</button>
        <input type="button" class="btn btn-primary btn-lg" id="concelModal" style="border-radius: 0" value="重置"/>
    </div>
</div>
</body>

</html>