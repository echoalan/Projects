<?php
    include("../model/config.php");
    session_start();
    if(!isset($_SESSION["usuario"])){
    header("Location:../index.php");
}

    $usuarioActual = $_SESSION["usuario"];
    //recupero el id del usuario actual
    $sqlUsuario = "SELECT ID FROM registradores where NOMBRES = '$usuarioActual'";
    $executeQuery = mysqli_query($conn, $sqlUsuario);
    $result = mysqli_fetch_row($executeQuery);
    
    //recupero el id del paciente
    $pacienteActual = $_POST['paciente'];
    $sqlPaciente = "SELECT ID FROM pacientes where NOMBRE = '$pacienteActual'";
    $sqlExe = mysqli_query($conn, $sqlPaciente);
    $res = mysqli_fetch_row($sqlExe);

    //inserto los datos del nuevo turno

    $registrador = $result['0'];
    $paciente = $res[0];
    $dia = $_POST['dia'];
    $hora = $_POST['hora'];
    $especialidad = $_POST['especialidad'];

    $sql = "INSERT INTO `turnos`(`REGISTRADOR`, `PACIENTE`, `DIA`, `HORA`, `ESPECIALIDAD`) VALUES ('$registrador','$paciente','$dia','$hora','$especialidad')";
    $exeQuery = mysqli_query($conn, $sql);

    if(!$exeQuery){
        die("query failed");
    }else {
        header("location:../index.php");
    }



    /*
    echo "especialidad: " . $especialidad . "<br>"; 
    echo "dado por: " . $registrador . "<br>";
    echo "paciente: " . $paciente . "<br>";
    echo "dia: " . $dia . "<br>";
    echo "hora: " . $hora . "<br>";


    
*/
?>