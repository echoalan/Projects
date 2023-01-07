<?php
session_start();
if(!isset($_SESSION["usuario"])){
    header("Location:../index.php");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <title>Document</title>
</head>
<body>
    <header class="header">
        <div class="casper-header">
            <div class="son-casper-header">
                <div class="header-img">
                    <img src="view/images/logo1.png" alt="">
                </div>
                <div class="title-header">
                    <p>HOSPITAL</p>
                    <p>Dr. RAMON CARRILLO</p>
                </div>
            </div>
            <div class="close-sesion">
                <a href="controller/cerrar-sesion.php">Cerrar sesion</a>
            </div>
        </div>
    </header>
    <main class="main">
        <section class="section-table">
            <article class="article-form">
                <div class="content-form">
                    <div class="title-form">
                        <h2>Nuevo Turno</h2>
                    </div>
                    <?php include("view/form.php");?>
                </div>
                <div class="content-form">
                    <div class="title-form">
                        <h2>Registrar Paciente</h2>
                    </div>
                    <?php include("view/form-paciente.php");?>
                </div>
            </article>    
            <article class="article-table">
                <div class="content-table">
                    <?php include("view/tabla.php");?>                    
                </div>
            </article>
        </section>    
    </main>
</body>
</html>

<?php
/*
                <div class="content-form">
                    <div class="title-form">
                        <h2>Registrar Paciente</h2>
                    </div>
                    <?php include("view/form.php");?>
                </div>
*/

?>