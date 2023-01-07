<?php
try {
        $base=new pdo ("mysql:host=98.142.101.90; dbname=managerf_marcos", "managerf_alanrojas", "plastilina1234");
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql="SELECT * FROM usuario WHERE NOMBRE= :login AND CONTRASENA= :password";
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
            header("location:loguin/index.php");
            }else {
            header("location:loguin.php");
        }
    }catch(excepcion $e){
        die("error: " . $e->getMessage());
    }

/*        $base=new pdo ("mysql:host=98.142.101.90; dbname=managerf_marcos", "managerf_alanrojas", "plastilina1234");
*/

?>

