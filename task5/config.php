<?php

    define("TEMPLATE_DIR",__DIR__."/templates/");
    define("TEMPLATE",TEMPLATE_DIR."index.php");
    define("FILE_DIR",__DIR__."/files/");
    define("TITLE","task5");

    define("HOSTNAME","127.0.0.1");
    define("USERNAME","user12");
    define("PASSWORD","user12");
    define("DBNAME","user12");
    define("TABLE","php_task5");

    define("ERR_COOKIE_SAVING",'Saving cookies failed!');
    define("ERR_COOKIE_DELETING",'Deleting cookies failed!');
    define("ERR_MYSQL_SAVING",'MySQL saving data error: ');
    define("ERR_MYSQL_GETTING",'MySQL getting data error:');
    define("ERR_MYSQL_DELETING",'MySQL deleting data error: ');
    define("ERR_SESSION_STARTING",'Starting session failed!');
    define("ERR_SESSION_DELETING",'Error deleting session data: No such key!');
?>
