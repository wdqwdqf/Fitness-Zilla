<?php
$hostname="localhost";
$dbuser="root";
$dbPassword="";
$dbName="membership";
$conn=mysqli_connect($hostname, $dbuser, $dbPassword, $dbName);
if(!$conn){
    die("Something went wrong");
}
?>