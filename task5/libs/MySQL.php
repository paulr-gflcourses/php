<?php
include_once "iWorkData.php";
class MySQL implements iWorkData
{
    private $link;

    function __construct(){
        $this->connect();
    }

    function connect()
    {
        try
        {
            $dsn = "mysql:host=".HOSTNAME.";dbname=".DBNAME;
            $this->link = new PDO($dsn, USERNAME, PASSWORD);
            $this->link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch (PDOException $e) 
        {
            throw new Exception('Connection error: ' . $e->getMessage());
        }

    }


    public function saveData($key, $val)
    {
        try
        {
            $sql = "INSERT IGNORE INTO ".TABLE." (keydb,valdb) VALUES(?, ?)"; 
            $statement = $this->link->prepare($sql);
            $statement->execute(array($key, $val));
        }catch (PDOException $e) 
        {
            throw new Exception(ERR_MYSQL_SAVING. $e->getMessage());
        }
    }

    public function getData($key)
    {
        try
        {
            $sql = "SELECT valdb FROM ".TABLE." WHERE keydb='$key' ";
            $res = $this->link->query($sql)->fetch();

        }catch (PDOException $e) 
        {
            throw new Exception(ERR_MYSQL_GETTING. $e->getMessage());
        }

        return ($res)? $res[0] : false;
    }

    public function deleteData($key)
    { 
        try
        {
            $sql = "DELETE FROM ".TABLE." WHERE keydb=?";
            $statement = $this->link->prepare($sql);
            $statement->execute(array($key));
        }catch (PDOException $e) 
        {
            throw new Exception(ERR_MYSQL_DELETING. $e->getMessage());
        }
    }

}
?>
