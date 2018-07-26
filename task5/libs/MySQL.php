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
        try{
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

        $sql = "INSERT IGNORE INTO ".TABLE." (keydb,valdb) VALUES(?, ?)"; 
        $statement = $this->link->prepare($sql);
        $statement->execute(array($key, $val));
    }

    public function getData($key)
    {
        $sql = "SELECT valdb FROM ".TABLE." WHERE keydb='$key' ";
        $res = $this->link->query($sql)->fetch();
        return $res[0];

    }

    public function deleteData($key)
    { 
        /*
        $sql = "DELETE FROM ".TABLE." keydb=? AND valdb=?";
        $statement = $this->$link->prepare($sql);
        $statement->execute(array($key, $val));
         */
    }

}
?>
