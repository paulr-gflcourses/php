<?php
include_once "config.php";
include_once "libs/*";


$violin = new Violin();
$flute = new Flute();

$bowStrPlayer = new BowStringsPlayer();
$bowStrPlayer->addInstrument($violin);

$classicBand = new ClassicBand();
$classicBand->addMusician($bowStrPlayer);


include_once TEMPLATE_DIR."index.php";

?>
