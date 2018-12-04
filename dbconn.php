<?php

$host = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "medical";
mysql_connect($host,$dbuser,$dbpass,$db) or die("Cannot Connect to Database Server");
mysql_select_db($db) or die("database does not exist");

?>
