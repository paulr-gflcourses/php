<?php
function printSelect($selectResult)
{

    if ($selectResult)
    {
        echo "<table border=1>";
        echo "<tr><th>userid</th><th>userdata</th></tr>";
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
<head><title><?php echo TITLE ?></title>

    <style type="text/css">
            .errors{
            color: #FF0000; 
            font-size: 18px;

    }
    </style>
</head>

<body>
<h2>SQL queries to database <?php echo DBNAME; ?></h2>

<?php 
if ($errors)
{
    foreach ($errors as $error)
    {
        echo "<div class='errors'>$error</div>";
    }
}
?>
<?php if (!$errors): ?>
<h3>MySQL queries:</h3>
    <ol>
    <li>SELECT:</li>
    <pre><?php echo $selectSQL[0];?>;</pre>
    <p>Result of the select query:</p>
    <p><?php printSelect($selectResult[0]);?></p>

    <li>INSERT:</li>
    <pre><?php echo $insertSQL[0];?>;</pre> 
    <p>Result of the INSERT query:</p>
    <p><?php printSelect($insertResult[0]); ?></p>

    <li>UPDATE:</li>
    <pre><?php echo $updateSQL[0]; ?>;</pre>
    <p>Result of the UPDATE query:</p>
    <p><?php printSelect($updateResult[0]);?></p>

    <li>DELETE:</li>
    <pre><?php echo $deleteSQL[0]; ?>;</pre>
    <p>Result of the DELETE query:</p>
    <p><?php printSelect($deleteResult[0]);?></p>
    </ol>

    <h3>PostgreSQL queries:</h3>

    <ol>
    <li>SELECT:</li>
    <pre><?php echo $selectSQL[1];?>;</pre>
    <p>Result of the select query:</p>
    <p><?php printSelect($selectResult[1]);?></p>

    <li>INSERT:</li>
    <pre><?php echo $insertSQL[1];?>;</pre> 
    <p>Result of the INSERT query:</p>
    <p><?php printSelect($insertResult[1]); ?></p>

    <li>UPDATE:</li>
    <pre><?php echo $updateSQL[1]; ?>;</pre>
    <p>Result of the UPDATE query:</p>
    <p><?php printSelect($updateResult[1]);?></p>

    <li>DELETE:</li>
    <pre><?php echo $deleteSQL[1]; ?>;</pre>
    <p>Result of the DELETE query:</p>
    <p><?php printSelect($deleteResult[1]);?></p>
    </ol>
<?php endif; ?>

    </body>


    </html>
