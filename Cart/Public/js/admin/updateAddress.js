/**
 * Created by Administrator on 2017/4/14.
 */
//a_btn_1
$(function () {
    $('.a_btn_1').each(function(index,value)
    {
        $(value).click(function(){
            $('.a_btn_2').eq(index).removeClass('a_active').addClass('a_noactive');
            $(this).removeClass('a_noactive').addClass('a_active');
            //提交后台进行状态修改
            $.ajax({
                type:'post',
                url:"",
                data:{

                },
            });
        });
    });
    $('.a_btn_2').each(function(index,value)
    {
        $(value).click(function(){
            $('.a_btn_1').eq(index).removeClass('a_active').addClass('a_noactive');
            $(this).removeClass('a_noactive').addClass('a_active');
            //提交后台进行状态修改
            $.ajax({
                type:'post',
                url:"",
                data:{

                },
            });
        });
    });
});