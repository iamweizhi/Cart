<?php
return array(
	//'配置项'=>'配置值'
	'MODULE_ALLOW_LIST'=>array('Admin','Home'),
	/*默认模板*/
	'DEFAULT_MODULE'=>'Home',
	// 链接数据库
	'DB_TYPE'=>'mysql',
    'DB_HOST'=>'172.20.151.16',

	'DB_NAME'=>'kals',
	'DB_USER'=>'root',
	'DB_PWD'=>'123456',
	'DB_PORT'=>3306,
	'DB_PREFIX'=>'ka_',
    // 'URL_MODEL'=>1,
	//开启语言包功能 
	'LANG_SWITCH_ON' => true,
	//自动侦测语言 开启多语言功能后有效
	'LANG_AUTO_DETECT' => true, 
	//允许切换的语言列表 用逗号分隔 
	'LANG_LIST' => 'zh-cn,en-us', 
	//默认语言切换变量 
	'VAR_LANGUAGE' => 'lang',
	// 配置page分页
	'VAR_PAGE'=>'page',
	/*定义系统变量*/
	    'TMPL_PARSE_STRING'  =>array(
         '__JS__'     => '/Public/js/', // 增加新的JS类库路径替换规则
         '__UPLOAD__' => '/Uploads', // 增加新的上传路径替换规则
         '__IMG__'    =>'/Public/img/',
         '__CSS__'    =>'/Public/css/',
    ),
//    'HTML_CACHE_ON'     =>    true, // 开启静态缓存
//    'HTML_CACHE_TIME'   =>    60,   // 全局静态缓存有效期（秒）
//    'HTML_FILE_SUFFIX'  =>    '.html', // 设置静态缓存文件后缀
//    'HTML_CACHE_RULES'  =>     array(  // 定义静态缓存规则
//        // 定义格式1 数组方式
//        '静态地址'    =>     array('静态规则', '有效期', '附加规则'),
//        // 定义格式2 字符串方式
//        '静态地址'    =>     '静态规则',
//    )

	
);