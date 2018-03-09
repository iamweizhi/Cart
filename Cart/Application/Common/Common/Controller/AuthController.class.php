<?php
namespace Common\Controller;
use Think\Controller;
use Think\Auth;
class AuthController extends Controller{
	protected function _initialize(){
		$auth=newAuth();
		if(!$auth->check()){
			$this->error("没有权限",{:U{'Home/Index/index'}});
		}
		if ($sess_auth['uid'] == 1){ 
			return true;
		}
	      if(!$auth->check(MODULE_NAME.'/'.CONTROLLER_NAME.'/' .ACTION_NAME, $sess_auth['uid']))
	      	{ $this->error('没有权限', U('Login/logout'));}

	}
}
?>