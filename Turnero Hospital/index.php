<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <header class="header">
        <div class="casper-header">
            <div class="son-casper-header">
                <div class="header-img">
                    <img src="login/view/images/logo1.png" alt="">
                </div>
                <div class="title-header">
                    <p>HOSPITAL</p>
                    <p>Dr. RAMON CARRILLO</p>
                </div>
            </div>
        </div>
    </header>
    
    <main class="main">
        <section class="section-form">
            <article class="article-form">
                <form action="comprueba_login.php" method="post" class="form">
                    <h3>Ingrese sus credenciales</h3>
                    <input type="Text" placeholder="Usuario" name="login" class="input-box">
                    <input type="password" placeholder="Contraseña" name="password" class="input-box">
                    <input type="submit" class="submit">
                </form>
            </article>
        </section>
    </main>
</body>
</html>