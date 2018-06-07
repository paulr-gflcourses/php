
<?php
include_once "config.php";
include_once "SQL.php";

class MySQL extends SQL
{
    private $table;
    private $idField;
    private $dataField;


    function __construct(){
        parent::__construct();
        $this->table=TABLE_MYSQL;
        $this->idField = "user12";
        $this->dataField = "some data...";
    }

    function connect()
    {
        parent::connect();
            $dsn = "mysql:host=".HOSTNAME.";dbname=".DBNAME;
            $link = new PDO($dsn, USERNAME, PASSWORD);
            $this->link=$link;
        
    }

    function select()
    {
        $link = $this->link;

        $res = $link->query("SELECT userid,userdata from $this->table");
        /*
            foreach($res as $row) {
                print_r($row);
            }
         */
        return $res->fetch();
    }

    function insert()
    {
        $sql = "INSERT INTO $this->table(userid,userdata) VALUES(?, ?)"; 
        $link = $this->getDblink();
        $statement = $link->prepare($sql);
        $statement->execute(array("user12", "some data..."));
    }

    function update()
    {
        $sql = "UPDATE $this->table SET userdata=? WHERE userid=?";
        $link = $this->getDblink();
        $statement = $link->prepare($sql);
        $statement->execute(array("some new data", "user12" ));
    }

    function delete()
    {

        $sql = "DELETE FROM $this->table userid=? AND userdata=?";
        $link = $this->getDblink();
        $statement = $link->prepare($sql);
        $statement->execute(array("user12", "some data..."));
    
    }


    function getTable()
    {
    }

    function setTable()
    {
    }



}

?>
