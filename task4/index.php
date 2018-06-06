<?php
include_once "config.php";
include_once "libs/MySQL.php";
include_once "libs/PostgreSQL.php";
include_once "libs/SQL.php";

$mysql = new MySQL();
$selectResult = $mysql->select();

include_once TEMPLATE_DIR."index.php";
?>
