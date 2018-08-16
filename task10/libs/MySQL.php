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

    //function select()
    //{
        //$userid = $this->getUserId();
        //$table = $this->getTable();
        //$this->setSql("SELECT userid, userdata FROM $table WHERE userid='$userid'");
        //return parent::select();
    //}

    function select($fields)
    {
        $fieldsStr=implode(', ', $fields);
        $this->addSql("SELECT $fieldsStr ");
        return $this;
    }

    function from($table)
    {
        $this->addSql("FROM $table");
        return $this;
    }

    function where($condition, $param)
    {
        $this->addSql(" WHERE $condition ?");
        $this->addParams($param);
        return $this;
    }
    
    function insert($table, $columns)
    {
        $colNames = implode(', ', array_keys($columns));
        $this->addParams(array_values($columns));
        $masks = implode(', ', array_fill(0, count($columns), '?'));
        $this->setSql("INSERT INTO $table ($colNames) VALUES ($masks)"); 
        return $this;
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
