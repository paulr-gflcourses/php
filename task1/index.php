<?php
include_once 'config.php';

$errorUpload='';
$errorRemove='';

include_once 'functions.php';

if (isset($_GET['action'])){
	$action=$_GET['action'];
    switch ($action){
    case 'upload':
        $errorUpload = upload();
        break;
    case 'remove':
        $file = $_GET['file'];
        $errorRemove = remove($file);
        break;
    }
}

$files = listing();

include_once TEMPLATE;


?>

