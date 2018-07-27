<?php
include_once "iWorkData.php";
class Cookies implements iWorkData
{
    public function saveData($key, $val)
    {
        if (!setCookie("$key","$val"))
        {
            throw new Exception(ERR_COOKIE_SAVING);
        }
    }

    public function getData($key)
    {
        if (isset($_COOKIE[$key]))
        {
            return $_COOKIE[$key];
        }else
        {
            return false;
        }
    }

    public function deleteData($key)
    {
        if (isset($_COOKIE[$key]))
        {
            unset($_COOKIE[$key]);
        }else
        {
            throw new Exception(ERR_COOKIE_DELETING);
        }
    }

}
?>
