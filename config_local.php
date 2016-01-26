<?php 
    /*
    * 用于本地环境的设置，服务器环境，开发环境，各有不同；
    * 本文件将会被 /Common/Conf/config.php 文件引用
    */
    $config = array(
        'lib_thinkphp' => 'c:/www/_fmk/thinkphp/3.2.3/ThinkPHP.php',
        
        // database
        'DB_TYPE'   => 'mysql', // 数据库类型
        'DB_HOST'   => 'localhost', // 服务器地址
        'DB_NAME'   => 'thinkphp_user', // 数据库名
        'DB_USER'   => 'root', // 用户名
        'DB_PWD'    => 'admin123', // 密码
        'DB_PORT'   => 3306, // 端口
        'DB_CHARSET'=> 'utf8', // 字符集
        
        // ThinkPHP
        'TMPL_ENGINE_TYPE'              => 'PHP',
        'TMPL_TEMPLATE_SUFFIX'      => '.php',
        'MODULE_ALLOW_LIST'          => array('Home','User'),
        'DEFAULT_MODULE'                => 'Home',
    );