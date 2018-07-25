<?php
class SQL
{

    private $link;
    private $table;
    private $userid;
    private $userdata;
    private $sql;

    private $dsn;
    private $username;
    private $password;

    function __construct($table)
    {
        $this->table = $table;
        $this->connect();    
    }

    function connect()
    {
        try 
        {
            $link = new PDO($this->getDsn(), $this->getUsername(), $this->getPassword());
            $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->setLink($link);

        }catch (PDOException $e) 
        {
            throw new Exception('Connection error: ' . $e->getMessage());
        }

    }

    function select()
    {

        if ($this->userid)
        {
            try
            {

                $res = $this->link->query($this->sql);
                //$res->setFetchMode(PDO::FETCH_ASSOC);
            }catch(Exception $e)
            {
                throw new Exception("Error in query \n\"".$this->sql."\"\n: ".$e->getMessage());
            }
            //return $res->fetchAll();
            return $res;
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

    function setUsername($username)
    {
        if ($username && is_string($username))
        {
            $this->username = $username;
        }
    }

    function getUsername()
    {
        return $this->username;
    }

    function setPassword($password)
    {
        if ($password && is_string($password))
        {
            $this->password = $password;
        }
    }

    function getPassword()
    {
        return $this->password;
    }
    function setDsn($dsn)
    {
        if ($dsn && is_string($dsn))
        {
            $this->dsn = $dsn;
        }
    }

    function getDsn()
    {
        return $this->dsn;
    }
}

?>
