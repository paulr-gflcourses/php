<?php
include_once "config.php";

$error='';

try
{
}catch(Exception $e)
{
	$error = $e->getMessage();
}

include_once TEMPLATE;

?>
