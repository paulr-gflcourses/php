<?php
include_once "config.php";
include_once "libs/Cookies.php";
include_once "libs/Sessions.php";
include_once "libs/MySQL.php";

$errors=[];


$key="MY_KEY";
$val="Some value";

try
{
    $cookie = new Cookies();
    $cookie->saveData($key,$val);
    $savedInCookie = $cookie->getData($key);
    $cookie->deleteData($key);
    $deletedInCookie = $cookie->getData($key);
}catch(Exception $e)
{
    $errors[] = $e->getMessage();
}

try
{
    $session = new Sessions();
    $session->saveData($key,$val);
    $savedInSession = $session->getData($key);
    $session->deleteData($key);
    $deletedInSession = $session->getData($key);
}catch(Exception $e)
{
    $errors[] = $e->getMessage();
}
try
{
    $mysql = new MySQL();
    $mysql->saveData($key,$val);
    $savedMysql = $mysql->getData($key);
    $mysql->deleteData($key);
    $deletedMysql = $mysql->getData($key);

}catch(Exception $e)
{
    $errors[] = $e->getMessage();
}


include_once TEMPLATE;

?>
