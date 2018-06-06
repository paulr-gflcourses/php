<?php
include_once "config.php";
include_once "functions.php";


$file = file(FNAME);

$filePrintedLines = ''; 
for ($i=0;$i<count($file);$i++){
    $filePrintedLines .= getStringFromFile($i); 
}

$filePrintedChars = '';
for ($i=0;$i<count($file);$i++){
    for ($j=0;$j<count($file[$i]);$j++){
        $filePrintedChars .= getCharFromFile($file[$i],$j); 
    }
}

include TEMPLATE_DIR."index.php";

?>
