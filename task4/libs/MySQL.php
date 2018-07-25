<?php
include_once "SQL.php";

class MySQL extends SQL
{

    function __construct()
    {
        parent::__construct(TABLE_MYSQL);
    }

    function connect()
    {
        $this->setDsn("mysql:host=".HOSTNAME.";dbname=".DBNAME);
        $this->setUsername(USERNAME);
        $this->setPassword(PASSWORD);
        parent::connect();
    }

    function select()
    {
        $userid = $this->getUserId();
        $table = $this->getTable();
        $this->setSql("SELECT userid, userdatas FROM $table WHERE userid='$userid'");
        return parent::select();
    }

    function insert()
    {
        $table = $this->getTable();
        $this->setSql("INSERT INTO $table (userid, userdata) VALUES (?, ?)"); 
        parent::insert();
    }

    function update()
    {
        $table = $this->getTable();
        $this->setSql("UPDATE $table SET userdata=? WHERE userid=?");
        parent::update();
    }

    function delete()
    {
        $table = $this->getTable();
        $this->setSql("DELETE FROM $table WHERE userid=? AND userdata=? LIMIT 1");
        parent::delete();
    }



}

?>
