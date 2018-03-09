<?php
namespace Home\Model;
use Think\Model;
/**
* 
*/
class UseModel extends Model
{
	/*md5加密*/
	protected $_auto=array(
       array('openid','md5',3,'function'),
	);

}

?>