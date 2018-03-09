$(function(){
    /*-------------初始化值-----------------*/
    $.ajax({
        type:'post',
        url:"/Cart/index.php/Home/Index/addcart.html",
        success:function(response){
            $('.money_sum').html(response.price);
        },
    });
    /*--------增加商品-------------------*/
    $('#mygoods .glyphicon-plus').each(function(index,value){
        $(value).click(function(event){
            $('#mygoods .bg-gray').eq(index).removeClass('hide');
            $('#mygoods .numshow').eq(index).removeClass('hide').text(parseInt($('#mygoods .numshow').eq(index).text())+1);
            $.ajax({
                type:'post',
                url:"/Cart/index.php/Home/Index/addcart.html",
                data:{
                    id:$(".goodsid").eq(index).html(),
                    price:parseFloat($('.price_content').eq(index).text()),
                    num:parseInt($('#mygoods .numshow').eq(index).text()),
                    name:$('.media-heading h6').eq(index).text(),
                },
                success:function(response){
                    $('.money_sum').html(response.price);
                    $('#showmy').trigger('click');
                    $("#showmycart").addClass('hide');
                },
            });
            event.preventDefault();
        });
    });
    /*---------减少商品-------------------------*/
    $('#mygoods .bg-gray').each(function(index,value){
        $(value).click(function(event){
            $.ajax({
                type:'post',
                url:"/Cart/index.php/Home/Index/delnum.html",
                data:{
                    id:$(".goodsid").eq(index).html(),
                    price:parseFloat($('.price_content').eq(index).text()),
                },
                success:function(response){
                    $('.money_sum').html(response.price);
                    $('#showmy').trigger('click');
                    $("#showmycart").addClass('hide');
                },
            });
            $('#mygoods .numshow').eq(index).text(parseInt($('#mygoods .numshow').eq(index).text())-1);
            if(parseInt($('#mygoods .numshow').eq(index).text())==0){
                $('#mygoods .bg-gray').eq(index).addClass('hide');
                $('#mygoods .numshow').eq(index).addClass('hide');
            }
            event.preventDefault();
        });
    });
    /*--------------清空列表-----------------*/
    $('a.glyphicon-trash').click(function(){
        $.ajax({
            type:"POST",
            url:"/Cart/index.php/Home/Index/releasecart.html",
            success:function(response){
                $(".money_sum").html('');
                $('#goodslist').html('');
            }
        })
    });
    /*--------------显示购物车详情------------------*/
    $('#showmy').click(function(){
        if($("#showmycart").hasClass('hide')){
            $("#showmycart").removeClass('hide');
        }else{
            $("#showmycart").addClass('hide');
        }
        $.ajax({
            type:"POST",
            url:"/Cart/index.php/Home/Index/showcart.html",
            success:function(response){
                var jsonobj=eval("("+response+")");
                var str='';
                for(var i=0;i<jsonobj.length;i++){
                    str+='<li>'+jsonobj[i].name+'<span class="goodsid hide">'+jsonobj[i].id+'</span>'+
                        '<span class="singleprice hide">'+jsonobj[i].myprice+'</span>'+
                        '<div class="goods_num_icon">'+
                        '<span>￥'+
                        '<span class="price">'+jsonobj[i].price+'</span></span>'+
                        '<label  class="bg-gray " ><i class="glyphicon glyphicon-minus"></i></label>'+
                        '<span  class="numshow ">'+jsonobj[i].num+'</span>'+
                        '<label  class="bg-red" ><i class="glyphicon glyphicon-plus plus-sm"></i></label>'+
                        '</div></li>';
                }
                $("#goodslist").html(str);
                $('#goodslist .glyphicon-plus').each(function(index,value){
                    $(value).click(function(){
                        $('#goodslist .bg-gray').eq(index).show();
                        $('#goodslist .numshow').eq(index).show();
                        $('#goodslist .numshow').eq(index).text(parseInt($('#goodslist .numshow').eq(index).text())+1);
                        $.ajax({
                            type:'post',
                            url:"/Cart/index.php/Home/Index/addcart.html",
                            data:{
                                id:$("#goodslist .goodsid").eq(index).html(),
                            },
                            success:function(response){
                                $('#goodslist .price').eq(index).html(
                                    parseInt($('#goodslist .price').eq(index).html())+parseInt($('#goodslist .singleprice').eq(index).html())
                                );
                                $('#setprice .money_sum').html(
                                    parseInt($('#setprice .money_sum').html())+parseInt($('#goodslist .singleprice').eq(index).html())
                                );
                                /*-----------在这里添加数量----------*/
                            },
                        });
                    });
                });
                $('#goodslist .bg-gray').each(function(index,value){
                    $(value).click(function(){
                        $.ajax({
                            type:'post',
                            url:"/Cart/index.php/Home/Index/delnum.html",
                            data:{
                                id:$("#goodslist .goodsid").eq(index).html(),
                            },
                            success:function(response){
                                $('#goodslist .price').eq(index).html(
                                    parseInt($('#goodslist .price').eq(index).html())-parseInt($('#goodslist .singleprice').eq(index).html())
                                );
                                $('#setprice .money_sum').html(
                                    parseInt($('#setprice .money_sum').html())-parseInt($('#goodslist .singleprice').eq(index).html())
                                );
                                /*-----------在这里添加数量----------*/

                            },
                        });
                        $('#goodslist .numshow').eq(index).text(parseInt($('#goodslist .numshow').eq(index).text())-1);
                        if(parseInt($('#goodslist .numshow').eq(index).text())==0){
                            $('#goodslist .bg-gray').eq(index).hide();
                            $('#goodslist .numshow').eq(index).hide();
                            $("#goodslist li").eq(index).hide();
                        }
                    })
                });
            },
        });



    });
    /*---------滚动事件-------------*/
    $(window).scroll(function () {

        // $('#footer').css({
        //     'position':'fixed',
        //     'bottom':0
        // })
    });





});


