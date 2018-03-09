<?php
namespace Home\Controller;
use Think\Controller;
class EmptyController extends Controller{
	public function index(){
        echo '对不起还没有:'.CONTROLLER_NAME.'控制器';
    }  
   

}
?>