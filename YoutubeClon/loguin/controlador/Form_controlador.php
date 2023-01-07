<?php
        session_start();
        if(!isset($_SESSION["usuario"])){
            header("Location:../index.php");
        }

        require_once("../modelo/Videos_modelo.php");

        $titulo = $_POST['titulo_video'];
        $idUs = $_SESSION["usuario"]; 
        $nombre_archivo = $_FILES['video']['name'];
        $carpeta_destino=$_SERVER["DOCUMENT_ROOT"] . "/archivos/";

        move_uploaded_file($_FILES['video']['tmp_name'], $carpeta_destino . $nombre_archivo);

        $video = new Videos();
        $insertar = $video->setVideos($titulo, $nombre_archivo, $idUs);

       
?>
   