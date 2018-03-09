/**
 * Created by TANGQIHAO on 2017/3/22.
 */
$(function () {
    
   $('#bottom_list li').each(function(index,value)
   {
       $(value).click(function(){
           $('#bottom_list li').css('background-color','#1E90FF');
           $(this).css('background-color','#104E8B');
       });
   });
});