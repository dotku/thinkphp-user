<?php
require dirname(dirname(dirname(dirname(__FILE__)))).'/config_local.php';
$config_common = array(
    // ThinkPHP
    'TMPL_ENGINE_TYPE'              => 'PHP',
    'TMPL_TEMPLATE_SUFFIX'      => '.php',
//    'MODULE_ALLOW_LIST'          => array('Home','User'),
//    'DEFAULT_MODULE'                => 'Home',
    'URL_CASE_INSENSITIVE'         => true, // 会被调试模式影响到
);
return array_merge($config_common, $config_local);