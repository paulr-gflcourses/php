<?php
include_once "config.php";
include_once "libs/MySQL.php";
include_once "libs/PostgreSQL.php";
include_once "libs/SQL.php";

$errors=[];

try
{
    $mysql = new MySQL();
    $postgres = new PostgreSQL();
    foreach ([$mysql, $postgres] as $db) {


        $db->setUserId(USERID);

        $selectResult[] = $db->select();
        $selectSQL[] = $db->getSQL();

        $db->setUserData("some new data...");
        $db->insert();
        $insertSQL[] = $db->getSQL();
        $insertResult[] = $db->select();

        $db->setUserData("data after update");
        $db->update();
        $updateSQL[] = $db->getSQL();
        $updateResult[] = $db->select();

        $db->delete();
        $deleteSQL[] = $db->getSQL();
        $deleteResult[] = $db->select();

    }

}catch (Exception $e)
    {
        $errors[]=$e->getMessage();
    }
include_once TEMPLATE;
?>
