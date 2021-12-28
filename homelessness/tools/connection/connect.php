<?php
//QuickBooks = "user=myuseraccount;password=mypassword;URL=http://localhost:2080;";
//error_reporting(E_ALL ^ E_NOTICE);
//if (gethostname() == "ATSoft-PC")
{
    $address = "localhost";
    $port = "3306";
    $db_username = "root";
    $db_pass = "";//"chiyesu002";
    $databaseName = "mortgagecare";
//                echo "db_pass=".$db_pass;
}
mysql_connect($address, $db_username, $db_pass) or die("Sorry, connection to the database failed!");
mysql_select_db($databaseName) or die("Invalid database name!");

/*
$link = mysql_connect('namadvertisercomna.ipagemysql.com', 'namadvertiser123', 'NAMADVERTISER!123');
if (!$link) {
    die('Could not connect: ' . mysql_error());
} */
?>