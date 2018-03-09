<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>商品分类(上传)</title>
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <script type="text/javascript" src="/Cart/Public/js/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/Cart/Public/css/bootstrap.min.css" />
    <script type="text/javascript" src="/Cart/Public/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/Cart/Public/css/OrderHandle.css" />
    <script type="text/javascript" src="/Cart/Public/js/postUpload.js"></script>
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
        商品上架
    </div>
    <form style="margin-bottom: 50px" action="<?php echo U('Classfiy/UpImgAndAdd');?>" method="post" class="navbar-form navbar-right" enctype="multipart/form-data ">
        <div class="input-group input-group-sm">
            <span class="input-group-addon">商品名称：</span>
            <input type="text" id="goods_name" class="form-control" placeholder="请输入商品名称" name="name">
        </div>
        <br>

        <div class="input-group input-group-sm">
            <span class="input-group-addon">商品价格：</span>
            <span class="input-group-addon">￥</span>
            <input type="number" class="form-control" name="price" id="goods_price">
            <span class="input-group-addon">元</span>
        </div>

        <br>
        <div class="input-group input-group-sm">
            <span class="input-group-addon">商品介绍：</span>
            <textarea style="height: 50px" class="form-control" id="textArea" name="describe" placeholder="暂无任何介绍"></textarea>
        </div>
        <br>
        <div class="input-group input-group-sm">
            <span class="input-group-addon">商品类型：</span>
            <select class="form-control" name="type">
                <option>--请选择--</option>
                <?php if(is_array($type)): $i = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option><?php echo ($vo['typename']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
            </select>
        </div>
        <br>
        <div class="input-group input-group-sm">
            <input type="file" id="file1" onchange="previewFile()" style="display: none">
            <span class="input-group-addon">上传图片：</span>
            <input type="text" class="form-control" id="txtInput" value="" placeholder="还未选择任何文件">
            <span class="input-group-addon"  id="brower" style="cursor: pointer;">浏览</span>
        </div>
            <div class="jumbotron ">
                <img src="" height="100" width="150" alt="Image preview..."/>
            </div>

        <div id="btn_union" class="input-group text-center input-group-sm col-xs-12">
            <input class="btn btn-primary" type="button" id="resetBtn" style="border-radius: 0;margin-right: 30px" value="重置">
            <input class="btn btn-primary" id="subBtn" type="submit" name="" value="提交" style="border-radius: 0">
        </div>
    </form>
    <footer>
        <nav class="navbar navbar-default navbar-fixed-bottom">
            <!--<div class="container" align="center">-->
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
                    <div class="col-md-3 col-sm-3 col-xs-3" align="center">
                        <li>
                            <a href="<?php echo U('Index/index');?>"style="color: white">首页</a>
                        </li>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-3" align="center"><li><a href="<?php echo U('OrderHandle/index');?>" style="color: white">订单中心</a></li></div>
                    <div class="col-md-3 col-sm-3 col-xs-3" align="center"><li style="background-color: #104E8B"><a href="<?php echo U('Classfiy/index');?>" style="color: white">商品上架</a></li></div>
                    <div class="col-md-3 col-sm-3 col-xs-3" align="center"><li><a href="<?php echo U('Center/index');?>" style="color: white">我的中心</a></li></div>
                </div>
            </ul>
            <!--</div>-->
        </nav>
    </footer>
</div>
<!--<!DOCTYPE html>
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
</html>-->

</body>
</html>