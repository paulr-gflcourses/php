<?php
include_once 'config.php';
$errorUploading=false;
$errorRemoving=false;
$errorFileNotFound=false;
include_once 'functions.php';



if (isset($_GET['action'])){
	$action=$_GET['action'];
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

$files = listing();

include_once TEMPLATE_DIR.'/index.php';


?>

