<?php
class SQL
{

    private $link;
    private $table;
    private $userid;
    private $userdata;
    private $sql;

    function __construct($table)
    {
        $this->connect();    
        $this->table = $table;
    }

    function connect()
    {
    }

    function select()
    {
        if ($this->userid)
        {
            $res = $this->link->query($this->sql);
            $res->setFetchMode(PDO::FETCH_ASSOC);
            return $res->fetchAll();
        }else
        {
            return null;
        }
    }

    function insert()
    {
        if ($this->userid && $this->userdata)
        {
            $this->prepStmt(array($this->userid, $this->userdata));
        }
    }

    function update()
    {
        if ($this->userid && $this->userdata)
        {
            $this->prepStmt(array($this->userdata, $this->userid));
        }
    }

    function delete()
    {
        if ($this->userid && $this->userdata)
        {
            $this->prepStmt(array($this->userid, $this->userdata));
        }
    }

    private function prepStmt($params)
    {
        if ($params && is_array($params))
        {
            $statement = $this->link->prepare($this->sql);
            $statement->execute($params);
        }    
    }

    function setUserId($userid)
    {
        if ($userid && is_string($userid))
        {
            $this->userid = $userid;
        }
    }

    function getUserId()
    {
        return $this->userid;
    }

    function setUserData($userdata)
    {
        if ($userdata && is_string($userdata))
        {
            $this->userdata = $userdata;
        }
    }

    function getUserData()
    {
        return $this->userdata;
    }


    function setSql($sql)
    {
        $this->sql = $sql;
    }

    function getSql()
    {
        return $this->sql;
    }

    function setLink($link)
    {
        $this->link = $link;
    }

    function getLink()
    {
        return $this->link;
    }

    function setTable($table)
    {
        if ($table && is_string($table))
        {
            $this->table = $table;
        }
    }

    function getTable()
    {
        return $this->table;
    }
}

?>
