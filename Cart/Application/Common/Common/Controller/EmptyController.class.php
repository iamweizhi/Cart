<?php
namespace Common\Common;
use Think\Controller;
class EmptyController extends Controller{
	public function index(){
        echo '你的名字是:'.CONTROLLER_NAME;
    }
}
?>