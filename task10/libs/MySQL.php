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
        $dsn = "mysql:host=".HOSTNAME.";dbname=".DBNAME;
        $link = new PDO($dsn, USERNAME, PASSWORD);
        $this->setLink($link);
    }

    function select($fields)
    {
        $fieldsStr=implode(', ', $fields);
        $this->addSql("SELECT $fieldsStr");
        return $this;
    }

    function from($table)
    {
        $this->addSql(" FROM $table");
        return $this;
    }
    
    function where($condition, $param)
    {

        $this->param = $param;
        $this->addSql(" WHERE $condition ?");
        return $this;
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
