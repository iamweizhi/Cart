<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>新增配送地址</title>
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <script type="text/javascript" src="/Cart/Public/js/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="/Cart/Public/css/bootstrap.min.css" />
    <script type="text/javascript" src="/Cart/Public/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/Cart/Public/css/OrderHandle.css" />
    <link rel="stylesheet" type="text/css" href="/Cart/Public/css/admin/adminInfo.css" />
   <!-- <link rel="stylesheet" type="text/css" href="/Cart/Public/css/admin/addAddress.css" />-->
    <style>
        .line_bottom{
            margin-top: 10px;
            margin-left: auto;
            margin-right: auto;
            width:20px;
            height:2px;
            background-color: grey;
        }
        .input_label{
            height: 30px;
            line-height: 30px;
        }
        .submit_button{
            border-radius: 0;
            margin-top: 30px;
        }
        form{
            margin-top: 80px;
        }

    </style>
</head>
<body>
<div class="container">
    <div class="page-header">
        <h3>新增配送地址</h3>
    </div>
    <form>
        <div class="form-group">
            <label class="control-label col-xs-3">学校名称：</label>
            <div class="col-xs-8">
                <input type="text" class="form-control" placeholder="请输入您的要添加的学校名称">
            </div>
        </div>
        <br>
        <br><br>

        <div class="form-group">
            <label class="col-xs-3 input_label">楼号范围：</label>
            <input type="number" class="col-xs-3 input_label">
            <div class="col-xs-2">
                <div class="line_bottom"></div>
            </div>
            <input type="number" class="col-xs-3 input_label">
        </div>
        <br>
        <input type="submit" class="btn btn-info submit_button">
        <button type="reset" class="btn btn-info submit_button" style="margin-left: 25px">重置</button>
    </form>
</div>
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
</body>
</html>