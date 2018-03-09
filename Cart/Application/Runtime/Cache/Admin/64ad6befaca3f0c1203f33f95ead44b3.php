<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>修改个人中心</title>
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <link rel="stylesheet" type="text/css" href="/Cart/Public/css/bootstrap.min.css" />
    <script type="text/javascript" src="/Cart/Public/js/jquery.min.js"></script>
    <script type="text/javascript" src="/Cart/Public/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/Cart/Public/css/OrderHandle.css" />
    <link rel="stylesheet" type="text/css" href="/Cart/Public/css/index/index.css" />
    <style>
        .input-group-addon{
            background-color: #6AAAEA;
            color: white;
        }
        .input-group{
            padding: 10px 30px;
        }
        .input-group input{
            border:1px solid  #6AAAEA;
        }

        img{
            border:1px solid  #6AAAEA;
        }
        .wrap_div{
            width: 100px;
            height: 100px;
            margin: 10px 30px 0;
        }
    </style>
</head>
<script>

    $(function(){
        var b=document.getElementById('brower');
        var f=document.getElementById('file1');
        b.onclick=function(){
            f.click();
        };

        $('#file1').change(function(){
            $('#txtInput').val($('#file1').val());
            previewFile();

        });
        //$('#file1').val()

        $('form').submit(check);
        $("#resetBtn").click(reset);

    });
    function previewFile() {
        var preview = document.querySelector('img');
        var file  = document.querySelector('input[type=file]').files[0];
        var reader = new FileReader();
        reader.onloadend = function () {
            preview.src = reader.result;
        }
        if (file) {
            reader.readAsDataURL(file);
        } else {
            preview.src = "";
        }
    }
    function reset() {
        $("input[type='text']").val("");
        $("#file1").val("");
        $("textarea").text("");
        $("select").get(0).selectedIndex=0;
    }
    function check(){
        var inputs=$('input');

        for(var i=0;i<inputs.length;i++){
            if(!inputs[i].value){
                alert("请把信息填写完整！");
                $(inputs[i]).focus();
                return false;
            }
        }
    }
</script>
<body>

<div class="container">
    <div class="page-header text-center">
        <h3>编辑商家信息</h3>
    </div>
    <form class="form-group" style="margin-bottom: 50px">

        <div class="input-group">
            <input type="file" id="file1" onchange="previewFile()" style="display: none">
            <span class="input-group-addon">修改头像：</span>
            <input type="text" class="form-control" id="txtInput" value="" placeholder="还未选择任何文件">
            <span class="input-group-addon"  id="brower" style="cursor: pointer;">浏览</span>
        </div>
        <div class="wrap_div">
            <img src="" alt="image" style="width: 100px ;height: 100px"/>
        </div>
        <div class="input-group">
            <span class="input-group-addon">联系方式：</span>
            <input type="text" class="form-control" value="1234567844" placeholder="该内容不能为空">
        </div>
        <div class="input-group">
            <span class="input-group-addon">邮箱：</span>
            <input type="text" class="form-control" value="1234567844" placeholder="该内容不能为空">
        </div>
        <div class="input-group input-group-sm">
            <span class="input-group-addon">商品介绍：</span>
            <textarea style="height: 50px;border:1px solid  #6AAAEA;" class="form-control" id="textArea" name="describe" placeholder="暂无任何介绍"></textarea>
        </div>
        <div class="input-group input-group-sm col-xs-12">
            <input class="btn btn-primary" type="button" id="resetBtn" style="border-radius: 0;margin-right: 30px;margin-left: 30px" value="重置">
            <input class="btn btn-primary" id="subBtn" type="submit" name="" value="提交" style="border-radius: 0">
        </div>
    </form>
    <!DOCTYPE html>
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
</html>
</div>
</body>
</html>