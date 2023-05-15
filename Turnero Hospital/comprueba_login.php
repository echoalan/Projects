<?php
try {
        $base=new pdo ("mysql:host=; dbname=", "", "");
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql="SELECT * FROM registradores WHERE NOMBRES= :login AND CONTRASENA= :password";
        $resultado=$base->prepare($sql);
        $login=htmlentities(addslashes($_POST["login"]));      /*escapo los strings*/
        $password=htmlentities(addslashes($_POST["password"]));/*escapo los strings*/  
        $resultado->bindValue(":login", $login);
        $resultado->bindValue(":password", $password);
        $resultado->execute();
        $numero_registro=$resultado->rowCount();
        
        if ($numero_registro!=0){
            session_start();
            $_SESSION["usuario"]=$_POST["login"];
            header("location:login/index.php");
            }else {
            header("location:index.php");
        }
    }catch(excepcion $e){
        die("error: " . $e->getMessage());
    }
/*


?>

