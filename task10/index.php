<?php 
include_once "config.php";
include_once "libs/MySQL.php";
//include_once "libs/PostgreSQL.php";
include_once "libs/SQL.php";

$mysql = new MySQL();
$postgres = new MySQL();
$table = TABLE_MYSQL; 
$userid = USERID;
foreach ([$mysql, $postgres] as $db) {

    $db->setUserId(USERID);
    $selectSQL[] = $db->select(['userid', 'userdata'])->from($table)->where('userid=',$userid)->getSQL();
    $selectResult[] = $db->result();
    //$selectSQL[] = $db->getSQL();

    $newData = "some new data..."; 
    $db->setUserData($newData);
    $db->insert($table, ['userid'=>USERID, 'userdata'=>$newData]);
    $insertSQL[] = $db->getSQL();
    $db->execute();
    //$insertResult[] = $db->select();
    $insertResult[] = $db->select(['userid', 'userdata'])->from($table)->where('userid=',$userid)->result();

    $db->setUserData("data after update");
    $db->update();
    $updateSQL[] = $db->getSQL();
    //$updateResult[] = $db->select();
    $updateResult[] = $db->select(['userid', 'userdata'])->from($table)->where('userid=',$userid)->result();

    $db->delete();
    $deleteSQL[] = $db->getSQL();
    //$deleteResult[] = $db->select();
    $deleteResult[] = $db->select(['userid', 'userdata'])->from($table)->where('userid=',$userid)->result();
}

include_once TEMPLATE;
?>
