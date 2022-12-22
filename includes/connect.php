<?php
session_start();
$servername = getenv("DB_HOSTNAME");
$server_user = getenv("DB_USERNAME");
$server_pass = getenv("DB_PASSWORD");
$dbname = "foms_db";
if(isset($_SESSION['name']))
$name = $_SESSION['name'];
if(isset($_SESSION['role']))
$role = $_SESSION['role'];
$con = new mysqli($servername, $server_user, $server_pass, $dbname);
?>
