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

    private $params;

    function __construct($table)
    {
        $this->table = $table;
        $this->connect();    
        $this->params=[];
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


    function select($fields)
    {
    }

    public function from($table)
    {
    }

    public function where($conditions, $param)
    {
    }

    public function addSQL($sql)
    {
        $this->sql .= $sql;
    }

    public function result()
    {
       return $this->prepStmt($this->params)->fetchAll();
    }

    public function execute()
    {
       $this->prepStmt($this->params);
    }
    
    

    function insert($table, $columns)
    {

        //if ($this->userid && $this->userdata)
        //{
            //$this->prepStmt(array($this->userid, $this->userdata));
        //}
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
            try
            {
                $statement = $this->link->prepare($this->sql);
                $statement->execute($params);
                $this->sql = "";
                $this->params = [];
                return $statement;
            }catch(Exception $e)
            {
                throw new Exception("Error in query \n\"".$this->sql."\"\n: ".$e->getMessage());
            }
        }    
    }

    private function validString($str)
    {
        if ($str && is_string($str))
        {
            return true;
        }else
        {
            return false;
        }
    }

    function setUserId($userid)
    {
        if ($this->validString($userid))
        {
            $this->userid = $userid;
        }
        else
        {
            throw new Exception('userid is not valid!');
        }
    }

    function getUserId()
    {
        return $this->userid;
    }

    function setUserData($userdata)
    {
        if ($this->validString($userdata))
        {
            $this->userdata = $userdata;
        }
        else
        {
            throw new Exception('userdata is not valid!');
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
        if ($this->validString($username))
        {
            $this->username = $username;
        }
        else
        {
            throw new Exception('username is not valid!');
        }
    }

    function getUsername()
    {
        return $this->username;
    }

    function setPassword($password)
    {
        if ($this->validString($password))
        {
            $this->password = $password;
        }
        else
        {
            throw new Exception('password is not valid!');
        }
    }

    function getPassword()
    {
        return $this->password;
    }

    function setDsn($dsn)
    {
        $this->dsn = $dsn;
    }

    function getDsn()
    {
        return $this->dsn;
    }

    protected function addParams($param)
    {
        if (is_array($param))
        {
            $this->params = array_merge($this->params, $param);
        }else
        {
            $this->params[] = $param;
        }
    }

}
?>
