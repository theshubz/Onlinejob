<?php
defined('server') ? null : define("server", "opportunityjunction.mysql.database.azure.com");
defined('user') ? null : define ("user", "shubhamj") ;
defined('pass') ? null : define("pass","omkar@29");
defined('database_name') ? null : define("database_name", "erisdb") ;

$this_file = str_replace('\\', '/', __File__) ;
$doc_root = $_SERVER['DOCUMENT_ROOT'];

$web_root =  str_replace (array($doc_root, "include/config.php") , '' , $this_file);
$server_root = str_replace ('config/config.php' ,'', $this_file);


define ('web_root' , $web_root);
define('server_root' , $server_root);
?>