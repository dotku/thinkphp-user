<?php 
    /*
    * config_local.php                �������ô������ڵĻ���
    * define()                             һ�㶼�ǹ̶������ã������� ThinkPHP ����ǰ���ú�
    * $config['lib_thinkphp']       ThinkPHP �ĺ����ļ�
    */
    require_once 'config_local.php';
    require_once 'define_common.php';
    
    define('BIND_MODULE','Test');
    
    require_once $config_local['lib_thinkphp'];