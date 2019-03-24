<?php 
define('devOrg', 'webmobilez');
define('devOrgLink', 'http://webmobilez/');
define('client', 'webmobilez');
define("source", "webmobilez.com");
define("sysConFolder", "system");
if($_SERVER['SERVER_NAME'] == 'localhost') {

    define("adminBaseUrl", 'http://'.$_SERVER['SERVER_NAME'].'/webmobiles/');
    define("b2cBaseUrl", 'http://'.$_SERVER['SERVER_NAME'].'/webmobiles/');
    define("adminUrl", 'http://'.$_SERVER['SERVER_NAME'].'/webmobiles/');
    define("db", "school");      
 
    define("dbUser", "root");
    define("dbPass", "");
    
} else {
  define("b2cBaseUrl", 'http://'.$_SERVER['SERVER_NAME'].'/admin/');
    define("adminUrl", 'http://'.$_SERVER['SERVER_NAME'].'/');
     define("db", "");
    define("dbUser", "");
    define("dbPass", '');
 
}
