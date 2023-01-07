<?php
    include('config.php');

    $titulo = $_POST['titulo'];
    $copete = $_POST['copete'];
    $descripcion = $_POST['descripcion'];
    $destacado = $_POST['chec'];
    $fecha = date("Y" . "-" .  "m" . "-" . "d");
    $nombre_archivo = $_FILES['archivo']['name'];
    $tipo_archivo = $_FILES['archivo']['type'];
    $tamaño_archivo = $_FILES['archivo']['size'];
    $carpeta_destino=$_SERVER["DOCUMENT_ROOT"] . "/salved/";
    move_uploaded_file($_FILES['archivo']['tmp_name'], $carpeta_destino . $nombre_archivo);
    $query = "INSERT INTO entradas (TITULO, DESTACADO, COPETE, DESCRIPCION, IMAGEN, FECHA) VALUES ('$titulo', '$destacado', '$copete', '$descripcion', '$nombre_archivo', '$fecha')";
    $result = mysqli_query($conexion, $query);
    if (!$result){
        die('query falied');
    }else {
        header("location:index.php");
    }
    
    mysqli_close($conexion);
  

/*  $nombre_archivo = $_FILES['archivo']['name'];
    $tipo_archivo = $_FILES['archivo']['type'];
    $tamaño_archivo = $_FILES['archivo']['size'];
    $carpeta_destino=$_SERVER["DOCUMENT_ROOT"] . "/archivos/";
    move_uploaded_file($_FILES['archivo']['tmp_name'], $carpeta_destino . $nombre_archivo);
    $query = "INSERT INTO archivos (id_usuario, nombrear, size) VALUES ('$nomus', '$nombre_archivo', '$tamaño_archivo')";
    $result = mysqli_query($conexion, $query);
    if(!$result){
        die("query failed");
    }else {
        header("location:../index.php");
    }*/
?>