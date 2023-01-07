<?php

    

    class Videos{
      
        private $videos;

        public function getVideos(){

            require_once("modelo/Conexion.php");
            
            $con = Conexion::conexion();
            $this->videos=array();

            $consulta = "SELECT videos.idVideo, videos.nombreArchivo, videos.tituloVideo, usuarios.nombreUsuario FROM videos, usuarios WHERE videos.usuario = usuarios.idUsuario ORDER BY videos.idVideo DESC;";
            $exe = mysqli_query($con, $consulta);

            while($filas = mysqli_fetch_assoc($exe)){

                $this->videos[]=$filas;
            
            }
            return $this->videos;

        }

        public function setVideos($titulo, $nombre_archivo, $idUs){
            
            require_once("../modelo/Conexion.php");
            
            $con = Conexion::conexion();

            $sql = "INSERT INTO videos (`tituloVideo`, `nombreArchivo`, `usuario`) VALUES ('$titulo', '$nombre_archivo', '$idUs')";

            if(mysqli_query($con, $sql)){
                header("location:../index.php");
            }else {
                echo "error al insertar el registro";
            }
        }

        public function deleteVideos($id){

            require_once("../modelo/Conexion.php");
            
            $con = Conexion::conexion();

            $sql = "DELETE FROM tempvideo WHERE `tempvideo`.`idVideo` = '$id'";

            if (mysqli_query($con, $sql)){
                header("location:../index.php");
            }else {
                echo "Error deleting record: " . mysqli_error($conn); 
            }

        }

        public function seeVideo($id){

            require_once("modelo/Conexion.php");
            
            $con = Conexion::conexion();


            $sql = "SELECT tituloVideo, nombreArchivo FROM videos WHERE idVideo = '$id'";

            $exe = mysqli_query($con, $sql);

            $fila = mysqli_fetch_assoc($exe);

            return $fila;

        }
        

    }


?>