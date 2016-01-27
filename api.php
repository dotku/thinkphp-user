<?php 
    /*
    * config_local.php                用于设置代码所在的环境
    * define()                             一般都是固定的设置，必须在 ThinkPHP 运行前设置好
    * $config['lib_thinkphp']       ThinkPHP 的核心文件
    */
    require_once 'config_local.php';
    
    define('APP_PATH', 'app/');
    define('RUNTIME_PATH', 'runtime/');
    define('TMPL_PATH','view/');
    define('APP_DEBUG',True);
    define('BIND_MODULE','Api');
    
    require_once $config_local['lib_thinkphp'];