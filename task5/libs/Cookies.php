<?php
include_once "iWorkData.php";
class Cookies implements iWorkData
{
    public function saveData($key, $val)
    {
        setCookie("$key","$val");
    }
  
    public function getData($key)
    {
        return $_COOKIE["$key"];
    }
 
    public function deleteData($key)
    {
        unset($_COOKIE["$key"]);
    }
                        
}
?>
