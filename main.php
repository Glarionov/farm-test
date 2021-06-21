<?php

require_once('Farm/FarmEVents.php');
require_once('Farm/Farm.php');
require_once('Farm/Animals/AbstractAnimal.php');
require_once('Farm/Animals/Cow.php');
require_once('Farm/Animals/Hen.php');

$FarmEvents = new \Farm\FarmEvents();
$FarmEvents->start();
