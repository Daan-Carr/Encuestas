<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Icono de pestaña -->
    <link rel="shortcut icon" href="<?php echo RUTA; ?>icono.ico" type="image/x-icon">
    <!-- Estilos -->
    <!-- <link rel="stylesheet" href="<?php // echo RUTA; 
                                        ?>recursos/css/principal.css"> -->
    <!-- <link rel="stylesheet" href="<?php // echo RUTA; 
                                        ?>recursos/css/style.css"> -->
    <link rel="stylesheet" href="<?php echo RUTA; ?>recursos/css/bienvenido.css">
    <!-- Color navegador -->
    <meta name="theme-color" content="#202020">
    <title>Iniciar encuesta</title>
</head>

<body>
    <div id="progressbar"> </div>
    <div id="scrollpath"></div>
    <section>
        <div class="contenedor-l">
            <div class="bienvenido">
                <h1>
                    <span>B</span>
                    <span>i</span>
                    <span>e</span>
                    <span>n</span>
                    <span>v</span>
                    <span>e</span>
                    <span>n</span>
                    <span>i</span>
                    <span>d</span>
                    <span>o</span>

                </h1>

            </div>
        </div>
        <br><br>
        <div class="encuestas">
            <div class="contenedor">
                <div class="box-elije">
                    <div class="contenedor2">
                        <h2>01</h2>
                        <h3>Encuesta Uno</h3>
                        <p>
                            La encuesta que esta por contestar es con fines educativos.
                            <?php
                            if ($acceso['acceso'] == 'Contestada') {
                                echo '<br><b style="color: red;">(Encuesta contestada)</b>';
                            }
                            ?>
                        </p>
                        <div class="neon-elije">
                            <a href="<?php echo RUTA; ?>principales/encuestas.php">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <?php
                                if ($acceso['acceso'] != 'Contestada') {
                                    echo 'ir a Encuesta 1';
                                } else {
                                    echo 'ir a las Graficas';
                                }
                                ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="box-elije">
                    <div class="contenedor2">
                        <h2>02</h2>
                        <h3>Encuesta Dos</h3>
                        <p>
                            La encuesta que esta por contestar es con fines educativos.
                            <?php
                            if ($acceso2['acceso2'] == 'Contestada') {
                                echo '<br><b style="color: red;">(Encuesta contestada)</b>';
                            }
                            ?>
                        </p>
                        <div class="neon-elije">
                            <a href="<?php echo RUTA; ?>principales/encuestas2.php">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <?php
                                if ($acceso2['acceso2'] != 'Contestada') {
                                    echo 'ir a Encuesta 2';
                                } else {
                                    echo 'ir a las Graficas';
                                }
                                ?>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <script type="text/javascript">
        let progress = document.getElementById('progressbar');
        let totalHeight = document.body.scrollHeight - window.innerHeight;
        window.onscroll = function() {
            let progressHeight = (window.pageYOffset / totalHeight) * 100;
            progress.style.height = progressHeight + "%";
        }
    </script>
    <div class="neon-elije">
        <a href="<?php echo RUTA; ?>principales/cerrar.php">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Cerrar Sesión
        </a>
    </div>
</body>

</html>