<?php
$hostname="localhost";
$dbuser="root";
$dbPassword="";
$dbName="booking";
$conn=mysqli_connect($hostname, $dbuser, $dbPassword, $dbName);
if(!$conn){
    die("Something went wrong");
}
?>