<?php
use Think\Verify;
function updated($str,$prefix){
 	return $prefix.$str;
}
function check_verify($code,$id=''){
   $Verify=new Verify();
   return $Verify->check($code,$id);
}
/*定义分页类*/
function my_page($page){
	 $page->setConfig('first','<strong>首页</strong>');
     $page->setConfig('prev','<strong>prev</strong>');
     $page->setConfig('next','<strong>next</strong>');
     $page->setConfig('last','<strong>末页</strong>');
     $page->setConfig('theme','
        <style type="text/css">
          #page1 a.num,#page1 span.current{
              width:30px;
              height:30px;
              border:1px solid #369;
              line-height:30px;
              text-align:center;
              border-radius:2px;
              display: inline-block;
              margin:0 2px;
            }
         #page1 a.next,#page1 a.prev,#page1 span.my_total_page{
              width:56px;
              height:30px;
              border:1px solid #369;
              line-height:30px;
              text-align:center;
              border-radius:2px;
              display:inline-block;
            }
            #page1 span.my_total_page,#page1 span.current{
              color:#777;
            }
            $page1 input.page_input{

            }
        </style>
     	<div id="page1"><span class="my_total_page">共%TOTAL_PAGE%页</span>   %FIRST%   %UP_PAGE%  <span> %LINK_PAGE% </span>  %DOWN_PAGE%  %END% </div>'
     );
     return $page;
     // 问题末尾页加载不出来
}
/*定义验证码*/
function my_verify(){
     $config=array(
        'expire'=>30,
        'useImgbg'=>false,
        'fontSize'=>16,
        'useCurve'=>true,
        'useNoise'=>false,
        'length'=>2,
        'useZh'=>true,
        'zhSet'=>'知道',
        );
       $verify=new Verify($config);
       $verify->imageH='33';
       $verify->imageW='70';
       $verify->entry();
       return $verify;
}
function string2secret($str)
{
 $key = "123";
 $td = mcrypt_module_open(MCRYPT_DES,'','ecb','');
 $iv = mcrypt_create_iv(mcrypt_enc_get_iv_size($td), MCRYPT_RAND);
 $ks = mcrypt_enc_get_key_size($td);
 $key = substr(md5($key), 0, $ks);
 mcrypt_generic_init($td, $key, $iv);
 $secret = mcrypt_generic($td, $str);
 mcrypt_generic_deinit($td);
 mcrypt_module_close($td);
 return $secret;
}
//解密
function secret2string($sec)
{
 $key = "123";
 $td = mcrypt_module_open(MCRYPT_DES,'','ecb','');
 $iv = mcrypt_create_iv(mcrypt_enc_get_iv_size($td), MCRYPT_RAND);
 $ks = mcrypt_enc_get_key_size($td);
 $key = substr(md5($key), 0, $ks);
 mcrypt_generic_init($td, $key, $iv);
 $string = mdecrypt_generic($td, $sec);
 mcrypt_generic_deinit($td);
 mcrypt_module_close($td);
 return trim($string);
}

?>