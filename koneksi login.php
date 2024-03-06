<?php
include 'login.html';
$servername = "localhost";
$username = "root";
$password = "";
$database ="web";

$conn = new mysqli ("$servername","$username","$password","$database");


 die('connection failed');
?>