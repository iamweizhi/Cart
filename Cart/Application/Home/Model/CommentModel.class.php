<?php
namespace Home\Model;
use Think\Model;
/**
* 
*/
class CommentModel extends Model
{
	
 	protected $_validate=array(
       array('comment','220',' 评论的长度不能超过220','length'),
	);

}

?>