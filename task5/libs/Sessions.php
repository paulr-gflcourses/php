
<?php
include_once "iWorkData.php";
class Sessions implements iWorkData
{
    function __construct()
    {
        if (!session_start())
        {
            throw new Exception(ERR_SESSION_STARTING);
        }
    }
    public function saveData($key, $val)
    {
        $_SESSION["$key"]=$val;
    }

    public function getData($key)
    {
        if (isset($_SESSION[$key]))
        {
            return $_SESSION[$key];
        }else
        {
            return false;
        }
    }

    public function deleteData($key)
    {
        if (isset($_SESSION[$key]))
        {
            unset($_SESSION[$key]);
        } else
        {
            throw new Exception(ERR_SESSION_DELETING);
        }
    }

}
?>
