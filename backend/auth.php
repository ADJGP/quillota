<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: 404.php");
exit(); }
?>