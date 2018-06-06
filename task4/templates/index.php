<?php
include_once "config.php";
?>

<html>
<head><title>task4</title></head>

<body>
    <h2>Connecting to database user1/user1.</h2>
    <h3>MySQL queries(Table MY_TEST):</h3>
<p>
    SELECT: 
   <?php echo $selectQuery; ?>
</p>
<p>
    Result of the select query:
   <?php  print_r($selectResult); ?>
<p>

<p>
    INSERT: <?php echo $selectQuery; ?> 
</p>
<p>
    SELECT: 
   <?php echo $selectQuery; ?>
</p>
</body>

</html>
