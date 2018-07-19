<?php
include_once 'config.php';
$errors=[];
include_once 'functions.php';

if (isset($_GET['action']))
{
    $action=$_GET['action'];
    $error="";
    switch ($action){
    case 'upload':
        $error = upload();
        break;
    case 'remove':
        $file = $_GET['file'];
        $error = remove($file);
        break;
    }
    if ($error)
    {
        $errors[] = $error;
    }
}

$files = listing();

include_once TEMPLATE;

?>
