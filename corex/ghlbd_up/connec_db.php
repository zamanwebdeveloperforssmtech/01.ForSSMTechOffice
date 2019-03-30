<?php 
$hostname='localhost';
$username='root';
$password='';

$con=mysql_connect($hostname,$username,$password) or die("Mysql connection failure.");
$dbcon=mysql_select_db('shifaintl', $con) or die("Database connection failure");
?>