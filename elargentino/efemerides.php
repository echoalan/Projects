<?php

    include('loguin/config.php');

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
        <link rel="stylesheet" href="css.css">
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
                <li><a href="actualidad_escolar.php">ACTUALIDAD ESCOLAR</a></li>
                <li><a href="pequenos_cientificos.php">PEQUEÑOS CIENTÍFICOS</a></li>
                <li><a href="sociales.php">SOCIALES</a></li>
                <li><a href="feria_de_ciencias.php">FERIA DE CIENCIAS</a></li>
                <li><a href="entrevistas.php">ENTREVISTAS</a></li>
                <li><a href="efemerides.php">EFEMÉRIDES</a></li>     
                <li><a href="loguin.php">INGRESAR</a></li>      
            </ul>
        </nav>
        <main class="main">
           

            <section class="section_noticias">
            <article class="article_noticias">

<?php

    $sql = "SELECT * FROM `entradas` WHERE `DESTACADO` = 'EFEMERIDES' ORDER BY `entradas`.`ID` DESC ";
    $ejecutar = mysqli_query($conexion, $sql);
    while($fila = mysqli_fetch_array($ejecutar, MYSQLI_ASSOC)){
        $img = $fila['IMAGEN'];
?>
        <div class="content_noticias">
            <div class="imagen_noticia" style="background-image: url('../salved/<?php echo $img;?>')">
            
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
                    echo "<a href='leer_mas.php?idd=".$fila['ID'] ."' class='leer_mas_data'>Leer mas</a>";
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