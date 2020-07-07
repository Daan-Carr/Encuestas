<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Icono de pestaña -->
    <link rel="shortcut icon" href="<?php echo RUTA; ?>icono.ico" type="image/x-icon">
    <!-- Estilos -->
    <link rel="stylesheet" href="<?php echo RUTA; ?>recursos/css/login.css">
    <!-- Color navegador -->
    <meta name="theme-color" content="#202020">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <title>Iniciar Sesión</title>
</head>


<body>
    <div class="contenedor-pagina">
        <div class="container-login">

            <div class="formulario">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                    <input type="hidden" name="csrf" value="<?php echo $_SESSION["token"]; ?>">

                    <h1>Iniciar Sesión</h1>


                    <input type="text" class="form-control" name="usuario" placeholder="Ingresa Usuario" require>

                    <br><br>

                    <input type="password" class="form-control" name="contrasena" placeholder="Ingresa Contraseña" require>

                    <br><br>

                    <div class="conetnedor-recaptcah">

                        <div class="g-recaptcha" data-sitekey="6LeKHf0UAAAAAIkv321u4kSfU0WcN5xamEcYLWUG"></div>
                    </div>

                    <br>
                    <div class="neon">

                        <button class="boton-ini" type="submit">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            Iniciar Sesión
                        </button>

                    </div>
                    <br>
                    <div>
                        <h2 class="registrate">¿Aun no Tienes Cuenta?</h2>
                    </div>
                    <div class="neon2">

                        <a href="<?php echo RUTA; ?>principales/registrate.php">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            Crear Cuenta
                        </a>

                    </div>
                    <br><br>

                    <div class="clean-gray">
                        <?php if (!empty($errores)) : ?>
                            <?php echo $errores; ?>
                        <?php endif; ?>
                    </div>

                </form>
                <br><br>
                <div class="contenedor-encuesta ">
                    <h3>Número de personas que se han</h3>
                    <h3>registrado:</h3>
                    <h2><?php echo $conteo["total_personas"]; ?> Personas</h2>
                </div>
            </div>
        </div>
    </div>
    <br>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>







    </div>
</body>

</html>