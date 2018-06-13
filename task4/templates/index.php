<?php
include_once "config.php";
function printSelect($selectResult)
{
    
if ($selectResult)
{
    echo "<table border=1>";
    echo "<tr><td>userid</td><td>userdata</td></tr>";
    foreach ($selectResult as $entry) 
    {
        echo "<tr><td>".$entry['userid']."</td> <td>".$entry['userdata']."</td></tr>";
    }
    echo "</table>";
}else
    {
        echo '<p>No entries</p>';
    }
}
?>

<html>
<head><title><?php echo TITLE ?></title></head>


<body>
    <h2>Connecting to database user1/user1.</h2>
    <h3>MySQL queries(Table MY_TEST):</h3>
<p>
    SELECT: 
   <?php echo "select sql = $selectQuery"; ?>
</p>
<p>
    Result of the select query:
<?php  
    printSelect($selectResult);
?>
</p>

<p>
    INSERT: <?php echo $insertQuery; ?> 
    Result of the INSERT query:
    <?php printSelect($insertResult);?>
</p>
<p>
    UPDATE: <?php echo $updateQuery; ?> 
    Result of the UPDATE query:
    <?php printSelect($updateResult);?>

<p>
    DELETE: <?php echo $deleteQuery; ?> 
    Result of the DELETE query:
    <?php printSelect($deleteResult);?>
</p>

</body>


</html>
