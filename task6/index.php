<?php
include_once "config.php";
include_once "libs/iInstrument.php";
include_once "libs/iMusician.php";
include_once "libs/iBand.php";
include_once "libs/Instrument.php";
include_once "libs/Musician.php";
include_once "libs/Band.php";


$violin = new Instrument("Violin","String");
$violoncello = new Instrument("Violoncello","String");
$contrabass = new Instrument("Contrabass","String");

$flute = new Instrument("Flute","Wind");
$oboe = new Instrument("Oboe","Wind");
$clarinet = new Instrument("Clarinet","Wind");
$saxophone = new Instrument("Saxophone","Wind");

$trumpet = new Instrument("Trumpet","Brass");
$trombone = new Instrument("Trombone","Brass");

$guitar = new Instrument("Guitar","String");

$bassDrum = new Instrument("Bass drum","Percussion");
$shareDrum = new Instrument("Share drum","Percussion");
$cymbals = new Instrument("Cymbals","Percussion");


$classicBand = new Band("Symphonetta","Classic");

$stringPlayer1 = new Musician("Andrew L.","String player");
$stringPlayer1->addInstrument($violin);
$stringPlayer1->assingToBand($classicBand);

$stringPlayer2 = new Musician("John T.","String player");
$stringPlayer2->addInstrument($violoncello);
$stringPlayer2->assingToBand($classicBand);

$stringPlayer3 = new Musician("Tom D.","String player");
$stringPlayer3->addInstrument($contrabass);
$stringPlayer3->assingToBand($classicBand);

$windPlayer1 = new Musician("Jack H.","Wind player");
$windPlayer1->addInstrument($flute);
$windPlayer1->assingToBand($classicBand);

$windPlayer2 = new Musician("Edward R.","Wind player");
$windPlayer2->addInstrument($oboe);
$windPlayer2->assingToBand($classicBand);

$windPlayer3 = new Musician("Jackob W.","Wind player");
$windPlayer3->addInstrument($clarinet);
$windPlayer3->addInstrument($saxophone);
$windPlayer3->assingToBand($classicBand);

$brassPlayer1 = new Musician("Peter R.","Brass player");
$brassPlayer1->addInstrument($trumpet);
$brassPlayer1->assingToBand($classicBand);

$brassPlayer2 = new Musician("James V.","Brass player");
$brassPlayer2->addInstrument($trombone);
$brassPlayer2->assingToBand($classicBand);

$jazzBand = new Band("Jazz quest","Jazz");
$guitarPlayer = new Musician("Kevin T.","Guitar player");
$guitarPlayer->addInstrument($guitar);
$guitarPlayer->assingToBand($jazzBand);

$jazzBand = new Band("Jazz quest","Jazz");

$windPlayer3->assingToBand($jazzBand);
$stringPlayer3->assingToBand($jazzBand);

$percussionPlayer = new Musician("Alex E.","Percussion player");
$percussionPlayer->addInstrument($bassDrum);
$percussionPlayer->addInstrument($shareDrum);
$percussionPlayer->addInstrument($cymbals);
$percussionPlayer->assingToBand($jazzBand);

$bands=[$classicBand, $jazzBand];

include_once TEMPLATE;

?>
