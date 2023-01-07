<?php
    include('config.php');
/*"DELETE FROM entradas WHERE `entradas`.`ID` = 103"?*/
    $eliminar = $_GET['idd'];

    $sql = "DELETE FROM entradas WHERE `entradas`.`ID` = '$eliminar'";
    $ejecutar = mysqli_query($conexion, $sql);
    if (!$ejecutar) {
        die("query falied");
    }else {
        header('location:index.php');
    }

    mysqli_close($conexion);
?>