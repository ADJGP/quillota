<?php 
include("backend/auth.php");
include("backend/config.php");
session_start(); 


$id=$_SESSION['id'];
$username=$_SESSION['username'];



$archivo_temp = $_FILES['archivo']['tmp_name'];

$archivo = $_FILES['archivo']['name'];

$ext= pathinfo($archivo, PATHINFO_EXTENSION);

move_uploaded_file($_FILES['archivo']['tmp_name'],
"subidas/".$_FILES['archivo']['name']);

{
    echo "<script> alert ('archivo subido'); window.history.go(-1); </script>";



}

?>