<?php
namespace Classes;

include_once('autoload.php');
/*print strtoupper( \Classes\GameHandler::printWelcomeWord()) . " \n";
$gameHandler = new \Classes\GameHandler('joske', 'jefke') ;
$gameHandler->startGame();*/

$gameHandler = new Game("Satans tower", 200, 100, "Jake and Fins treehouse", 200, 100);
echo ($gameHandler->getTowerLeftName());