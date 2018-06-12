<?php
include_once "config.php";
include_once "libs/FileManipulator.php";


$file = file(FNAME);
$fileMan = new FileManipulator($file);

$filePrintedLines = ''; 
for ($snum=0; $snum<count($file); $snum++)
{
    $filePrintedLines .= $fileMan->getStringFromFile($snum); 
}

$filePrintedChars = '';
for ($snum=0; $snum<count($file); $snum++)
{
    for ($cnum=0;$cnum<strlen($file[$snum]);$cnum++)
	{
        $filePrintedChars .= $fileMan->getCharFromFile($snum, $cnum); 
    }
}

$fileMan->changeStringFromFile(6,"aaaaaaaaaaaaaaaaaaa");
$fileMan->changeCharFromFile(10,11,"?");
$fileMan->saveFile();

$fileChangedLines='';
$fileChangedChars='';
for ($snum=0; $snum<count($file); $snum++)
{
    $fileChangedLines .= $fileMan->getStringFromFile($snum); 
}
for ($snum=0; $snum<count($file); $snum++)
{
    for ($cnum=0;$cnum<strlen($file[$snum]);$cnum++)
	{
        $fileChangedChars .= $fileMan->getCharFromFile($snum, $cnum); 
    }
}

include TEMPLATE;

?>
