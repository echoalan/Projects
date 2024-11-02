<?php

    $servername = "";
    $username = "";
    $password = "";
    $dbname = "";
   
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }   

    /*
   datos de conexion managerfile
    
    $servername = "98.142.101.90";
    $username = "managerf_turno";
    $password = "talonbrandzoea1";
    $dbname = "managerf_turnos";
   
    */
?>
