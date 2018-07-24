<html>
<head><title><?php echo TITLE ?></title></head>
<body>

<h1>Musical Bands</h2>

<ul>

<?php 
foreach ($bands as $band)
{
    echo "<li><h2>".$band->getName()."</h2> <p><i>Genre: ".$band->getGenre()."</i></p></li>";
    echo "<ul>";
    foreach ($band->getMusician() as $musician)
    {
        echo "<li><b>".$musician->getName()."</b> (".$musician->getMusicianType().")</li>";
        echo "<ul>";
        foreach ($musician->getInstrument() as $instrument)
        {
            echo "<li><b><i>".$instrument->getName()."</i></b> (".$instrument->getCategory()." instrument)</li>";
        }

        echo "</ul>";
    }
    echo "</ul>";
}

?>

</ul>

</body>
</html>
