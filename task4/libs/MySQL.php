
<?php
include_once "config.php";
include_once "SQL.php";

class MySQL extends SQL
{

    
    function __construct(){
        parent::__construct();
    }

    function connect()
    {
        parent::connect();
        try {
        $dsn = "mysql:host=".HOSTNAME.";dbname=".DBNAME;
        $link = new PDO($dsn, USERNAME, PASSWORD);
        $this->setDblink($link);

        } catch (PDOException $e) {
                print "Error!: " . $e->getMessage() . "<br/>";
                    die();
        }
    }

    function select()
    {
        $link = $this->getDblink();
        
        try {
        $res = $link->query("SELECT userid from MY_TEST");#.TABLE_MYSQL);
        foreach($res as $row) {
            print_r($row);
        }

        } catch (PDOException $e) {
                print "Error!: " . $e->getMessage() . "<br/>";
                    die();
        }

        return $res->fetch();
    }

    function insert()
    {
    }

    function update()
    {
    }
    
    function delete()
    {
    }

    function getTable()
    {
    }

    function setTable()
    {
    }

}

?>
