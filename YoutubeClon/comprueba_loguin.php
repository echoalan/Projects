<?php

    //este codigo es preventivo!!!!

    $us = $_POST['user'];

    $ps = $_POST['password'];

    $conn = new mysqli('localhost', 'root', '', 'youtube');

    $query = $conn->query("SELECT idUsuario, nombreUsuario FROM usuarios where nombre = '$us' AND password = '$ps'");

    $row = $query->fetch_assoc();

    $usuarioActual = $row['idUsuario'];

    if($query->num_rows > 0) {

        session_start();

        $_SESSION['usuario'] = $usuarioActual;

        header('location:loguin/index.php');

    }else {

        header("location:index.html");

    }


?>
