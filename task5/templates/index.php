<?php
include_once "config.php";
?>

<html>
<head><title><?php echo TITLE ?></title>
    <style type="text/css">
        .errors{
        color: #FF0000; 
        font-size: 15px;
}
    </style>
</head>
<body>
<h1>Saving data</h1>

<?php 
if ($errors)
{
    foreach ($errors as $error) {
        echo "<div class='errors'>Error: $error</div>";
    }

}
echo "<h2>Cookies data</h2>";
if (isset($savedInCookie))
{
    echo "<p>Saving ($key, $val) </p>";
    echo "<p>Getting ($key): $savedInCookie</p>";
}
if (isset($deletedInCookie))
{
    echo "<p>Removing ($key, $val)";
    echo "<p>Getting ($key): $deletedInCookie</p>";
}

echo "<h2>Session data</h2>";
if (isset($savedInSession))
{
    echo "<p>Saving ($key, $val) </p>";
    echo "<p>Getting ($key): $savedInSession</p>";
}
if (isset($deletedInSession))
{
    echo "<p>Removing ($key, $val)";
    echo "<p>Getting ($key): $deletedInSession </p>";
}

echo "<h2>MySQL data</h2>";
if (isset($savedMysql))
{
    echo "<p>Saving ($key, $val) </p>";
    echo "<p>Getting ($key): $savedMysql </p>";
}
if (isset($deletedMysql))
{
    echo "<p>Removing ($key, $val)";
    echo "<p>Getting ($key): $deletedMysql </p>";
}
?>
</body>
</html>
