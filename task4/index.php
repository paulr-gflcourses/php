<?php
include_once "config.php";
include_once "libs/MySQL.php";
//include_once "libs/PostgreSQL.php";
include_once "libs/SQL.php";

$mysql = new MySQL();
$mysql->setUserId(USERID);

$selectResult = $mysql->select();

$mysql->setUserData("some new data...");
$mysql->insert();
$insertResult = $mysql->select();

$mysql->setUserData("data after update");
$mysql->update();
$updateResult = $mysql->select();

$mysql->delete();
$deleteResult = $mysql->select();

include_once TEMPLATE;
?>
