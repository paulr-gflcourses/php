<?php
session_start();
include_once "config.php";
include_once "libs/Cookies.php";
include_once "libs/Sessions.php";
include_once "libs/MySQL.php";

$cookie = new Cookies();
$session = new Sessions();
$mysql = new MySQL();

$key="key1";
$val="val1";

//$cookie->saveData($key,$val);
//$getCookie = $cookie->getData($key);
//$cookie->deleteData($key);

//$session->saveData($key,$val);
//$getSession = $session->getData($key);
//$session->deleteData($key);

$mysql->saveData($key,$val);
$getMySQL = $mysql->getData($key);
$mysql->deleteData($key);

include_once TEMPLATE;

?>
