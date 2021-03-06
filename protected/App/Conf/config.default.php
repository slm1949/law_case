<?php
return array(
	//'配置项'=>'配置值'
    //数据库配置信息
    'DB_TYPE'   => 'mysql', // 数据库类型
    'DB_HOST'   => 'localhost', // 服务器地址
    'DB_NAME'   => 'law_case', // 数据库名
    'DB_USER'   => 'root', // 用户名
    'DB_PWD'    => '', // 密码
    'DB_PORT'   => 3306, // 端口
    'DB_PREFIX' => 'think_', // 数据库表前缀

    //开启布局模版
    'LAYOUT_ON' => TRUE,
    'LAYOUT_NAME' => 'layout',

    'APP_GROUP_LIST' => 'Home,Admin', //项目分组设定
    'DEFAULT_GROUP'  => 'Home', //默认分组

    'URL_MODEL' => 2,
    'URL_CASE_INSENSITIVE' => true,

    'TMPL_ACTION_ERROR'     => ':message', // 默认错误跳转对应的模板文件
    'TMPL_ACTION_SUCCESS'   => ':message', // 默认错误跳转对应的模板文件
);
?>
