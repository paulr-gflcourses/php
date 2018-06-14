<?php
include_once "SQL.php";

class PostgreSQL extends SQL
{

    function __construct()
    {
        parent::__construct(TABLE_POSTGRESQL);
    }

    function connect()
    {
        $dsn = "pgsql:host=".HOSTNAME.";dbname=".DBNAME;
        $link = new PDO($dsn, USERNAME, PASSWORD);
        $this->setLink($link);
    }

    function select()
    {
        $userid = $this->getUserId();
        $table = $this->getTable();
        $this->setSql("SELECT userid, userdata FROM $table WHERE userid='$userid'");
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
        $this->setSql("DELETE FROM $table WHERE ctid=(SELECT ctid FROM $table WHERE userid=? AND userdata=? LIMIT 1)");
        parent::delete();
    }



}

?>
