<?php
//variables needed for creating a connection
$host ="localhost";
$userName ="root";
$pass ="";
$dbName ="vulnerablesitedb";

//creates the database connection
$conn = new mysqli($host, $userName,$pass, $dbName);
?>