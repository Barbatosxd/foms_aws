<?php
session_start();
$servername = "my-db.cdlocju08nwb.us-east-1.rds.amazonaws.com";
$server_user = "admin";
$server_pass = "password";
$dbname = "foms_db";
if(isset($_SESSION['name']))
$name = $_SESSION['name'];
if(isset($_SESSION['role']))
$role = $_SESSION['role'];
$con = new mysqli($servername, $server_user, $server_pass, $dbname);
?>
