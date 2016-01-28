<?php 
    /*
    * 由于服务器环境，开发环境，各有不同，本文件用于本地环境的配置搭建；
    * 本文件将会被 /index.php 和 /Common/Conf/config.php 文件同时引用
    */
    $config_local = array(
        // library
        'lib_thinkphp' => './thinkphp_3.2.3/ThinkPHP.php',
        
         // database
        'DB_TYPE'   => 'mysql', // 数据库类型
        'DB_HOST'   => 'localhost', // 服务器地址
        'DB_NAME'   => 'thinkphp_user', // 数据库名
        'DB_USER'   => 'root', // 用户名
        'DB_PWD'    => 'admin123', // 密码
        'DB_PORT'   => 3306, // 端口
        'DB_CHARSET'=> 'utf8', // 字符集
    );