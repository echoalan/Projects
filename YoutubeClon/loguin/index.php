<?php

    session_start();

    if(!isset($_SESSION["usuario"])){
        header("Location:../index.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body id="body">

        <div class="content-create-video"  id="modal">
            <div class="content-form">
                    <div class="header-form">
                        <div class="content-icon-header-form">
                            <h2>Subir videos</h2>
                            <img src="images/cerrar-form.png" alt="" id="cerrar-form">
                        </div>
                    </div>
                    <div class="body-form">
                        <div class="content-img-form">
                            <img src="images/logo-subir-archivo.png" alt="">
                        </div>
                        <form action="controlador/Form_controlador.php" method="POST" enctype="multipart/form-data" class="form">
                            <input type="text" name="titulo_video" class="titulo-video" placeholder="Titulo del Video">
                            <label for="video" class="label-video">SELECCIONAR ARCHIVOS</label>
                            <input type="file" name="video" id="video">
                            <input type="submit" class="submit">
                        </form>
                    </div>
            </div>
        </div>    

        <main class="main">
            
            <header class="header">

                <div class="header-content-logo">
                    <img src="images/logo.png">
                </div>

                <div class="header-content-iconos">
                    <div class="content-icons">
                        <img src="images/crear.png" id="click-form">
                        <img src="images/notif.png">
                        <img src="images/lupita.png">
                        <img src="images/perfilpersona.png">
                    </div>
                </div>

            </header>

            <section class="section-videos">
                
                <div class="content-videos">
                    
                        <?php
            
                            require_once("controlador/Video_controlador.php");

                        ?>
            
                </div>
                
            </section>

        </main>

        <script src="vista/js.js">

        </script>


</body>
</html>