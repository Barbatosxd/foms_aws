<?php
session_start();
$servername = "arif-fs.mysql.database.azure.com";
$server_user = "arif";
$server_pass = "@Arif2003";
$dbname = "foms_db";
if(isset($_SESSION['name']))
$name = $_SESSION['name'];
if(isset($_SESSION['role']))
$role = $_SESSION['role'];
$con = new mysqli($servername, $server_user, $server_pass, $dbname);
?>
