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
            $dsn = "mysql:host=".HOSTNAME.";dbname=".DBNAME;
            $link = new PDO($dsn, USERNAME, PASSWORD);
            $this->link=$link;
        
    }

 
    public function saveData($key, $val)
    {
        
        $sql = "INSERT INTO ".TABLE." (keydb,valdb) VALUES(?, ?)"; 
        $statement = $this->link->prepare($sql);
        $statement->execute(array($key, $val));
    }
  
    public function getData($key)
    {
        $link = $this->link;
        $res = $link->query("SELECT valdb FROM ".TABLE." WHERE keydb=\'$key\'");
        return $res;

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
