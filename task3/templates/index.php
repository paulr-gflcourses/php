<html>
    <head>
<title><?php echo TITLE ?></title>
    <style type="text/css">
        .errors{
        color: #FF0000; 
        font-size: 18px;
        }
    </style>
</head>
<body>

<?php
if (isset($message))
{
    echo "<div class='errors'>Error. $message</div>";
}

if (isset($fileByString1)||isset($fileByChar1))
{

    echo "<h2>The file before change</h2>";
    if (isset($fileByString1))
    {
        echo "<h3>File printing by line</h3>";
        echo "<p><pre> $fileByString1 </pre></p> ";
    }

    if (isset($fileByChar1))
    {
        echo "<h3>File printing by char</h3>";
        echo "<p><pre>$fileByChar1 </pre></p>";
    }
}


if (isset($replacedStringNum) && isset($stringToReplace))
{
    echo "<h2>The file after change</h2>";
    echo "<p>Replacing line $replacedStringNum:  <br>
        <i>$stringToReplace</i><br> 
        to <br> $replacedString</p>";
}

if (isset($replacedCharNum) && isset($stringToReplace2) && isset($charToReplace))
{
    echo "<p>Replacing char $replacedCharNum(<i>$charToReplace</i>) in line $replacedStringNum2: <br>
        <i>$stringToReplace2</i><br> 
        to <br> $replacedChar</p>";
}


if (isset($fileByString2))
{
    echo "<h3>File printing by line</h3>";
    echo "<p><pre> $fileByString2 </pre></p>";
}


if (isset($fileByChar2))
{
    echo "<h3>File printing by char</h3>";
    echo "<p><pre> $fileByChar2 </pre></p>";
}
?>

</body>
    </html>


