<?php
include("init.php");

$users = new users();

// var_dump($users);
$name = "Festus";
$surname = "David";
$ID = "90080701238";
$users->name = $name;
$users->surname = $surname;
$users->ID = $ID;
$users->insert();
// var_dump($users);
//just testing
//testing
//56
?>
