<?php


    class Conexion{

        public static function conexion() {
            
            $conn = mysqli_connect('localhost', 'root', '', 'youtube');

            return $conn;

        }

    }



?>