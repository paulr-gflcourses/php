<?php
include_once "config.php";
include_once "SQL.php";

class MySQL extends SQL
{
    private $table;

    function __construct()
    {
        parent::__construct();
        $this->table=TABLE_MYSQL;
    }

    function connect()
    {
        parent::connect();
            $dsn = "mysql:host=".HOSTNAME.";dbname=".DBNAME;
            $link = new PDO($dsn, USERNAME, PASSWORD);
            $this->link=$link;
        
    }

    function select($userid)
    {
        $link = $this->link;
        $sql = "SELECT userid, userdata FROM $this->table WHERE userid='$userid'";
        $res = $link->query($sql);
        $res->setFetchMode(PDO::FETCH_ASSOC);
        return $res->fetchAll();
    }

    function insert($userid, $userdata)
    {
        $sql = "INSERT INTO $this->table (userid, userdata) VALUES (?, ?)"; 
        $link = $this->link;
        $statement = $link->prepare($sql);
        $statement->execute(array($userid, $userdata));
    }

    function update($userid, $userdata)
    {
        $sql = "UPDATE $this->table SET userdata=? WHERE userid=?";
        $link = $this->link;
        $statement = $link->prepare($sql);
        $statement->execute(array($userdata, $userid));
    }

    function delete($userid, $userdata)
    {

        $sql = "DELETE FROM $this->table WHERE userid=? AND userdata=? LIMIT 1";
        $link = $this->link;
        $statement = $link->prepare($sql);
        $statement->execute(array($userid, $userdata));
    
    }


    function getTable()
    {
    }

    function setTable()
    {
    }



}

?>
