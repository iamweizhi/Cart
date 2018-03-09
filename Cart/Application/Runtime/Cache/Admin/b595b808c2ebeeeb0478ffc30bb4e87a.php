<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
    <meta charset="UTF-8">
    <title>管理员主页</title>
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <link rel="stylesheet" type="text/css" href="/Cart/Public/css/bootstrap.min.css" />
    <script type="text/javascript" src="/Cart/Public/js/jquery.min.js"></script>
    <script type="text/javascript" src="/Cart/Public/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/Cart/Public/css/OrderHandle.css" />
    <link rel="stylesheet" type="text/css" href="/Cart/Public/css/index/index.css" />
    <style>
        .deleted_goods img,.deleted_goods .media-foot>span,.deleted_goods p,.deleted_goods h6,.deleted_goods .price_content{
            opacity: 0.5;
        }
        .deleted_goods span.onGoods,.deleted_goods span.deleteGoods{
            opacity: 1;
        }
        .panel-body{padding-top: 0}
        .panel-heading{padding: 0}
        .no_block{display: inline-block;float: left}
        .no_block a{display: inline-block;}
        .col-xs-3{padding: 0}
        .jumbotron{background-color: white}
    </style>
</head>
<script>
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
    $(function () {
        $('.deleteGoods').each(function (index,value){
            $(value).click(function (event) {
                event.preventDefault();
                var goodsid=$('.goodsid').eq(index).text();
                $.ajax({
                     type:'post',
                     url:"<?php echo U('Index/discard');?>",
                     data:{
                         'id':goodsid
                     },
                     success:function(data){
                           $('.the_list').eq(index).addClass('deleted_goods');
                           $('.deleteGoods').eq(index).text('上架');
                     },
                });
            });
        });
        $('.onGoods').each(function (index,value) {
            $(value).click(function (event) {
                //onGoods
            })
        });
        $('.navbar-nav li').each(function (index,value) {
            $(value).click(function (event) {
               $('.navbar-nav').slideUp();
               $(this).addClass('active').siblings('.navbar-nav li').removeClass('active');
               /*setTimeout(function () {
                   $('.navbar-nav').hide();$('.navbar-nav').slideDown();
               },200);*/
            });
        });

        $('.navbar-toggle').click(function () {
            /*$('.navbar-nav').show();*/
            $('.navbar-nav').slideDown();
        });

        /*显示模态框*/
        $('.change_price').each(function (index,value) {
            $(value).click(function (event) {
                event.preventDefault();
                $('#goods_price').val(parseInt($(this).siblings('.sale_price').children('.price_content').text()));
                $('#myModalLabel').text($(this).parents('.media-body').children('.media-heading').children('h6').text());
            });
        });

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
</script>
<body>
<body>

<div class="container" style="margin-bottom: 50px">
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        &times;
                    </button>
                    <h4 class="modal-title" id="myModalLabel">

                    </h4>
                </div>
                <div class="modal-body">
                    <form action="<?php echo U('Classfiy/UpdateGoods');?>" method="post" class="navbar-form navbar-right" enctype="multipart/form-data ">
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
                                <?php if(is_array($goodsinfo)): $i = 0; $__LIST__ = $goodsinfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
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
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭
                    </button>
                    <button type="button" class="btn btn-primary">
                        提交更改
                    </button>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a href="#" class="navbar-brand" style="font-size: 22px">
                    商品管理
                </a>
                <button class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse" id="navbar-collapse">

                <ul class="nav navbar-nav navbar-right list-inline">
                    <li class="no_block active col-xs-3"><a href="#"> <span class="glyphicon glyphicon-home"></span> 全部</a></li>
                    <?php if(is_array($goodsinfo)): $i = 0; $__LIST__ = $goodsinfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="no_block col-xs-3 text-center"><a href="#setion-<?php echo ($vo["num"]); ?>" style="padding-left: 0;padding-right: 0"><?php echo ($vo["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </div>
    </nav>
    <div style="height: 50px"></div>
    <!--<div class="panel panel-default">
        <div class="panel-heading">
            <p class="title">最新上架</p>
        </div>
        <div id="collapseOne" class="panel-collapse collapse in">
            <ul class="list-group panel-body">
                <?php if(is_array($new)): $i = 0; $__LIST__ = $new;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goods): $mod = ($i % 2 );++$i;?><li class="list-group-item the_list">
                        <span class="goodsid hide"><?php echo ($goods["id"]); ?></span>
                        <a class="media" style="display: block" href="<?php echo U('Home/Index/detial',array('id'=>$goods['id']));?>">
                            <div class="pull-left">
                                <img src="" class="img"/>
                            </div>
                            <div class="media-body">
                                <div class="media-heading">
                                    <h6><?php echo ($goods["name"]); ?></h6>
                                </div>
                                <p class="text-muted sale_mess">
                                    销量:<?php echo ($goods["salenum"]); ?>单 &nbsp;
                                    评分:<?php echo ($goods["score"]); ?>分
                                </p>

                                <div class="media-foot">
                        <span class="text-danger sale_price col-xs-6" >
                             ￥<span class="price_content"><?php echo ($goods["price"]); ?></span>
                         </span>
                                    <span class="col-xs-4 change_price" style="display: none">修改价格</span>
                                    <span class="col-xs-2 deleteGoods" style="display: none;">下架</span>
                                </div>
                            </div>
                        </a>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
    </div>-->
    <?php if(is_array($goodsinfo)): $i = 0; $__LIST__ = $goodsinfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="panel panel-default">
            <div class="panel-heading">
                <p class="title" id="setion-<?php echo ($vo["num"]); ?>"><?php echo ($vo["name"]); ?></p>
            </div>
            <ul class="list-group panel-body">
                <!--<?php echo ($vo['child'][0]["name"]); ?>-->
                <?php if($vo['child']==null): ?><li class="list-group-item" style="padding: 4px">该分类下暂无商品</li>
                    <?php else: ?>
                    <?php if(is_array($vo['child'])): $i = 0; $__LIST__ = $vo['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goods): $mod = ($i % 2 );++$i;?><li class="list-group-item the_list">
                            <span class="goodsid hide"><?php echo ($goods["id"]); ?></span>
                            <a class="media" style="display: block" href="<?php echo U('Home/Index/detial',array('id'=>$goods['id']));?>">
                                <div class="pull-left">
                                    <img src="" class="img"/>
                                </div>
                                <div class="media-body">
                                    <div class="media-heading">
                                        <h6><?php echo ($goods["name"]); ?></h6>
                                    </div>
                                    <p class="text-muted sale_mess">
                                        销量:<?php echo ($goods["salenum"]); ?>单 &nbsp;
                                        评分:<?php echo ($goods["score"]); ?>分
                                    </p>
                                    <div class="media-foot">
                                        <span class="text-danger sale_price col-xs-6" >
                                             ￥<span class="price_content"><?php echo ($goods["price"]); ?></span>
                                        </span>
                                        <span class="col-xs-4 change_price" data-toggle="modal" data-target="#myModal">修改价格</span>
                                        <span class="col-xs-2 deleteGoods">下架</span>
                                    </div>
                                </div>
                            </a>
                        </li><?php endforeach; endif; else: echo "" ;endif; endif; ?>

            </ul>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
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
                    <li style="background-color: #104E8B">
                        <a href="<?php echo U('Index/index');?>"style="color: white">首页</a>
                    </li>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3" align="center"><li><a href="<?php echo U('OrderHandle/index');?>" style="color: white">订单中心</a></li></div>
                <div class="col-md-3 col-sm-3 col-xs-3" align="center"><li><a href="<?php echo U('Classfiy/index');?>" style="color: white">商品上架</a></li></div>
                <div class="col-md-3 col-sm-3 col-xs-3" align="center"><li><a href="<?php echo U('Center/index');?>" style="color: white">我的中心</a></li></div>
            </div>
        </ul>
        <!--</div>-->
    </nav>
</footer>
</body>
</body>
</html>