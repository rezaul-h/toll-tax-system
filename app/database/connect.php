<?php
$host = 'localhost';
$user = 'root';
$pass  = '';
$db_name = 'tax';

$conn = new MySQLi($host,$user,$pass,$db_name);

if ($conn -> connect_error){
    die("connection error".$conn -> connect_error);
}

