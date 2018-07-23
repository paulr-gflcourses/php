<?php
include_once "config.php";
include_once "libs/FileManipulator.php";

try
{
    $fileMan = new FileManipulator(FNAME);
    $fileByString1 = $fileMan->printFileByString();
    $fileByChar1 = $fileMan->printFileByChar();

    $replacedStringNum = 6;
    $replacedString = "---->CHANGED LINE";
    $stringToReplace = $fileMan->getStringFromFile($replacedStringNum);
    $fileMan->changeStringFromFile($replacedStringNum, $replacedString);

    $replacedStringNum2=10;
    $replacedCharNum = 11;
    $replacedChar = "?";
    $charToReplace = $fileMan->getCharFromFile($replacedStringNum2,$replacedCharNum);
    $stringToReplace2 = $fileMan->getStringFromFile($replacedStringNum2);
    $fileMan->changeCharFromFile($replacedStringNum2, $replacedCharNum, $replacedChar);

    $fileMan->saveFile();
    $fileMan = new FileManipulator(FNAME_CHANGED);
    $fileByString2 = $fileMan->printFileByString();
    $fileByChar2 = $fileMan->printFileByChar();

}catch (Exception $e)
{
    $message = $e->getMessage();
}
include TEMPLATE;

?>
