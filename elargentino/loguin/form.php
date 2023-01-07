<?php
session_start();
if(!isset($_SESSION["usuario"])){
    header("Location:../loguin.php");
}
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
        <script src="https://cdn.tiny.cloud/1/2zpm2ttuc8xolji0q6un9sjz4mk5qts13fwem3q8uis251og/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
        <link rel="stylesheet" href="../css.css">
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
                <li><a href="form.php">INSERTAR NOTICIA</a></li>     
                <li><a href="cerrar_sesion.php">CERRAR SESIÓN</a></li>          
            </ul>
        </nav>
        <main class="main">
            <section class="section1">
                <article class="article_section1">
                    <div class="content_title_noticias">
                        <h2>Insertar Noticia :)</h2>
                    </div>
                </article>
            </section>
            <section class="section_insertar_noticia">
                <form action="insertar_noticia.php" class="form_insertar_noticia" method="POST" enctype="multipart/form-data">
                    
                    <div class="casper">
                        <p>SELECCIONAR CATEGORIA</p>
                        <select name="chec" class="select_form">
                            <option value="Actualidad Escolar">Actualidad Escolar</option>
                            <option value="Pequeños Cientificos">Pequeños Cientificos</option>
                            <option value="Sociales">Sociales</option>
                            <option value="Feria de Ciencias">Feria de Ciencias</option>
                            <option value="Entrevistas">Entrevistas</option>
                            <option value="Efemerides">Efemerides</option>
                        </select>
                    </div>

                
                    <div class="casper">
                        <p>SELECCIONAR IMAGEN</p>
                        <input type="file" name="archivo" class="input_file_inserter_noticia">
                    </div>
                    <div class="casper">
                        <p>INGRESAR EL TITULO (maximo de 70 caracteres)</p>
                        <input type="text" name="titulo" placeholder="Titulo" class="input_box_inserter_noticia" maxlength="70">
                    </div>
                    <div class="casper">
                        <p>INGRESAR EL COPETE DE LA NOTICIA</p>
                        <textarea name="copete" placeholder="COPETE">

                        </textarea>
                    </div>

                    <div class="casper">
                        <p>INGRESAR LA NOTICIA COMPLETA</p>
                        <textarea name="descripcion" placeholder="NOTICIA COMPLETA"> 
                        </textarea>
                    </div>

                    <div class="casper">
                        <P>ENVIAR NOTICIA</P>
                        <input type="submit" class="input_submit">
                    </div>
                    <script>
                        tinymce.init({
                        selector: 'textarea',
                        plugins: 'advlist autolink lists link image charmap preview anchor pagebreak',
                        toolbar_mode: 'floating',
                        });
                    </script>
                </form>
            </section>
        </main>
    </body>
</html>
