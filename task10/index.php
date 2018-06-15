<?php 
include_once "config.php";
include_once "libs/MySQL.php";
//include_once "libs/PostgreSQL.php";
include_once "libs/SQL.php";

$mysql = new MySQL();
$postgres = new MySQL();
foreach ([$mysql, $postgres] as $db) {

    $db->setUserId(USERID);

    $selectSQL[] = $db->select('userid, userdata')->from(':table')->where('userid=:userid')->getSQL();

    //$selectResult[] = $db->select();
    //$selectSQL[] = $db->getSQL();

    //$db->setUserData("some new data...");
    //$db->insert();
    //$insertSQL[] = $db->getSQL();
    //$insertResult[] = $db->select();

    //$db->setUserData("data after update");
    //$db->update();
    //$updateSQL[] = $db->getSQL();
    //$updateResult[] = $db->select();

    //$db->delete();
    //$deleteSQL[] = $db->getSQL();
    //$deleteResult[] = $db->select();
}

include_once TEMPLATE;
?>
