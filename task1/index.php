<?php
include_once 'config.php';
include_once 'functions.php';

session_start();

$files=[['Doc.txt','15 kB']];
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
            remove();
            break;
    }

}

include_once TEMPLATE_DIR.'/index.php';


?>

