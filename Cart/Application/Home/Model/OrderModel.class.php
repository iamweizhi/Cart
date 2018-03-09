<?php
namespace Home\Model;
use Think\Model;
/**
* 
*/
class OrderModel extends Model
{
    protected $_validate=array(
	array('university','require',"学校名称不能为空"),
	array('dormitory','require',"宿舍楼号不能为空"),
	array('home','require',"宿舍号不能为空"),
	array('customnname','require',"用户名不能为空"),
    array('phonenumber','/1\d{10}/',"手机号必须是11位",'length'),
   );
    protected $validateMatch=true;
    /*自动填充*/
    protected $_auto=array(
      array('ordertime','getDate','callback'),
    );
    protected function getDate(){
        return date('Y-m-d H:i:s');
    }
    /*在这里换换名*/
    protected $_mao=array(




        );
}

?>