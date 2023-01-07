<?php
session_start();
if(!isset($_SESSION["usuario"])){
    header("Location:../loguin.php");
}
    include('config.php');

?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=7">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
        <link rel="stylesheet" href="../css.css">
        <title>El Argentino</title>
    </head>
    <body>
        <nav class="margin_nav">
            <div class="content_title">
                <h1>El Argentino</h1>
            </div>
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>
            <ul>
                <li><a href="index.php">INICIO</a></li>
                <li><a href="form.php">INSERTAR NOTICIA</a></li>     
                <li><a href="cerrar_sesion.php">CERRAR SESIÓN</a></li>          
            </ul>
        </nav>
        <main class="main">
            <section class="section_noticias">
                <article class="article_noticias">

                    <?php

                        $sql = "SELECT * FROM `entradas` ORDER BY `entradas`.`ID` DESC";
                        $ejecutar = mysqli_query($conexion, $sql);
                        while($fila = mysqli_fetch_array($ejecutar, MYSQLI_ASSOC)){
                            $img = $fila['IMAGEN'];
                    ?>
                            <div class="content_noticias">
                                <div class="imagen_noticia" style="background-image: url('../../salved/<?php echo $img;?>')">
                                
                                </div>
                                <div class="footer_noticias">

                                    <div class="casper_footer_data">
                                        <h2><?php echo $fila['TITULO'];?></h2>
                                    </div>
                                    
                                    <div class="casper_footer_data">
                                        <?php echo $fila['COPETE'];?>
                                    </div>
                                        
                                    <div class="casper_footer_data_a">
                                        <?php
                                        
                                        echo "<a href='delete.php?idd=".$fila['ID'] ."' class='delete_data'>Eliminar</a>";
                                        
                                        ?>
                                    </div>
                                    
                                </div>
                        </div>
                      <?php      
                        }
                        mysqli_close($conexion);
                    ?>
                </article>
            </section>
        </main>
        
    </body>
</html>
