
<html>
<head><title><?php echo TITLE?></title>
</head>
<body>
<h3>Calculator</h3>

<?php
echo "<p>a=$a, b=$b</p>";
if(!$errors)
{			
    echo "<h2>Result</h2>";
    echo "<ul>";
    echo "<li>$a + $b = $add</li>";
    echo "<li>$a - $b = $substract</li>";
    echo "<li>$a * $b = $multiply</li>";
    echo "<li>$a / $b = $divide</li>";
    echo "<li>sqrt( $a ) = $squareRoot</li>";
    echo "<li>$a % $b = $mod</li>";
    echo "<li>1/$a = $frac</li>";
    echo "<li>-($a) = $neg</li>";
    echo "<li>setting mem ($mem): mem = $mem</li>";
    echo "<li>addimg to mem ($mem): $mem + $b = $memOper</li>";
    echo "<li>restoring mem ($mem) and substracting: $mem - $b = $memRestoring</li>";
    echo "<li>clearing mem: mem = $memCleared</li>";
    echo "</ul>";
}else
{

    echo "<h2>Some errors have happened:</h2>";
    foreach ($errors as $error) {
        echo "<p>$error</p>";
    }
}
?>

</body>
</html>

