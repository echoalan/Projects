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
        <title>Iniciar sesion</title>
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

        <section class="section_sesion">
            <article class="article_form">
                <form action="comprueba_loguin.php" method="POST" class="form_sesion">
                    <h2>Iniciar sesion</h2>
                    <input type="text" name="login" class="input_box" placeholder="Usuario">
                    <input type="password" name="password" class="input_box" placeholder="Contraseña">
                    <input type="submit" class="input_submit">
                </form>
            </article>
        </section>
</body>
</html>