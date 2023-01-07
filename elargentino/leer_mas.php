<?php

    include('loguin/config.php');

                        $idd = $_GET['idd'];
                        $sql = "SELECT * FROM `entradas` WHERE ID = '$idd'";
                        $ejecutar = mysqli_query($conexion, $sql);
                        $fila = mysqli_fetch_array($ejecutar, MYSQLI_ASSOC);
                        $img = $fila['IMAGEN'];
                   
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=7">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
        <link rel="stylesheet" href="leer_mas.css">
        <title>El Argentino</title>
    </head>
    <body>
        <nav>
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
            <section class="section1">
                <article class="article_section1">
                    <div class="content_title_noticias">
                        <h3><?php echo $fila['DESTACADO']; ?></h3>
                    </div>
                </article>
            </section>

            <section class="section_leer_mas">
                <article class="article_leer_mas">
                    
                    <div class="content_leer_mas">
                        <div class="content_titile_noticia_leer_mas">
                            <h4><?php echo $fila['FECHA']; ?></h4>
                            <h2><?php echo $fila['TITULO']; ?></h2>
                        </div>
                        <div class="footer_leer_mas">
                            <div class="content_copete_noticia_leer_mas">
                                <?php echo $fila['COPETE']; ?>
                            </div>
                            <div class="img_noticia_leer_mas" style="background-image: url('../salved/<?php echo $img; ?>')">

                            </div>
                            <div class="content_descripcion_noticia_leer_mas">
                                
                                <?php echo $fila['DESCRIPCION'];
                                mysqli_close($conexion);
                                ?>
                            </div>
                        </div>
                    </div>
                </article>
            </section>
        </main>
        
    </body>
</html>