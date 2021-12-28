<?php
include("init.php");

$users = new users();

// var_dump($users);
$names = array();
$surnames = array();
$IDs = array();

$names[] = "John";
$surnames[] = "Tomas";
$IDs[] = "57101274691";

$names[] = "Sara";
$surnames[] = "Chris";
$IDs[] = "88010202170";

$names[] = "James";
$surnames[] = "Brown";
$IDs[] = "75111232911";

foreach($names as $index =>$name)
{
	$surname = $surnames[$index];
	$ID = $IDs[$index];
	
	$users->name = $name;
	$users->surname = $surname;
	$users->ID = $ID;
	$users->insert();
}
// var_dump($users);

?>