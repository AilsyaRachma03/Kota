<?php
/**
 * using mysqli_connect for database connection
 */

$databaseHost = 'localhost';
$databaseName = 'uts192410101007';
$databaseUsername = 'root';
$databasePassword = ''; 

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 



?>