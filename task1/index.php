<?php
include_once 'config.php';
include_once 'functions.php';

session_start();

//$files=['Doc.txt'=>'15 kB'];
$files=[];
if($_SESSION['files']){
    $files=$_SESSION['files'];
}else{
    $_SESSION['files']=$files;
}

if ($action=$_GET['action']){
    print "action=$action";
    switch ($action){
    case 'upload':
        upload();
        break;
    case 'remove':
        $file = $_GET['file'];
        remove($file);
        break;
    }

}

include_once TEMPLATE_DIR.'/index.php';


?>

