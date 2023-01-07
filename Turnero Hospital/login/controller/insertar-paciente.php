<?php
include("../model/config.php");
session_start();
if(!isset($_SESSION["usuario"])){
header("Location:../index.php");
}

    $nombre = $_POST['nombre'];
    $dni = $_POST['dni'];
    $fRegistro = date('Y' . 'm' . 'd');

    $sql = "INSERT INTO `pacientes`(`NOMBRE`, `DNI`, `FREGISTRO`) VALUES ('$nombre','$dni','$fRegistro')";
    $ejecutar = mysqli_query($conn, $sql);

    if (!$ejecutar){
        die("query failed");
    }else {
        header("location:../index.php");
    }
?>