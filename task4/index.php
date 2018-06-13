<?php
include_once "config.php";
include_once "libs/MySQL.php";
//include_once "libs/PostgreSQL.php";
include_once "libs/SQL.php";

$mysql = new MySQL();
$selectResult = $mysql->select(USERID);
$mysql->insert(USERID, "some new data...");
$insertResult = $mysql->select(USERID);
$mysql->update(USERID, "data after update");
$updateResult = $mysql->select(USERID);
$mysql->delete(USERID, "data after update");
$deleteResult = $mysql->select(USERID);

include_once TEMPLATE;
?>
