<!DOCTYPñE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">

        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- Icono de pestaña -->
        <link rel="shortcut icon" href="<?php echo RUTA; ?>icono.ico" type="image/x-icon">
        <!-- Estilos -->
        <link rel="stylesheet" href="<?php echo RUTA; ?>recursos/css/encuestas.css">
        <!-- Color navegador -->
        <meta name="theme-color" content="#202020">
        <title>Encuesta 1</title>
    </head>

    <body>
        <div id="progressbar"> </div>
        <div id="scrollpath"></div>
        <section>

            <div class="bienvenido">
                <h1>
                    <span>E</span>
                    <span>n</span>
                    <span>c</span>
                    <span>u</span>
                    <span>e</span>
                    <span>s</span>
                    <span>t</span>
                    <span>a</span>
                    <span>-</span>
                    <span>1</span>

                </h1>
            </div>
            <br><br><br><br><br>

            <!--cual es tu edad-------------------------------------------------------------------------------------------->
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                <div class="contenedor-encuesta">
                    <h1>¿Entre que edad te encuentras?</h1>
                    <?php foreach ($edades as $edad) : ?>
                        <label>
                            <input type="radio" name="radioedad" value="<?php echo $edad['opcion']; ?>" required>
                            <span class="<?php echo $edad['seleccion']; ?>"><?php echo strtoupper($edad['seleccion']); ?></span>
                            <?php echo $edad['opcion']; ?>

                        </label>
                        <br>
                    <?php endforeach; ?>
                </div>
                <br>
                <!--a que te dedicas-------------------------------------------------------------------------------------------->


                <div class="contenedor-encuesta">
                    <h1>¿A que te dedicas?</h1>
                    <?php foreach ($empleos as $empleo) : ?>
                        <label>
                            <input type="radio" name="radioempleo" value="<?php echo $empleo['opcion']; ?>" required>
                            <span class="<?php echo $empleo['seleccion']; ?>"><?php echo strtoupper($empleo['seleccion']); ?></span>
                            <?php echo $empleo['opcion']; ?>

                        </label>
                        <br>
                    <?php endforeach; ?>
                </div>
                <br>
                <!--que musica prefieres-------------------------------------------------------------------------------------------->


                <div class="contenedor-encuesta">
                    <h1>¿Genero?</h1>
                    <?php foreach ($musica as $music) : ?>
                        <label>
                            <input type="radio" name="radiomusic" value="<?php echo $music['opcion']; ?>" required>
                            <span class="<?php echo $music['seleccion']; ?>"><?php echo strtoupper($music['seleccion']); ?></span>
                            <?php echo $music['opcion']; ?>

                        </label>
                        <br>
                    <?php endforeach; ?>
                </div>
                <br>
                <!--que genero de perliculas prefieres-------------------------------------------------------------------------------------------->

                <div class="contenedor-encuesta">
                    <h1>¿Tienes Equipo de Cómputo en Casa?</h1>
                    <?php foreach ($peliculas as $pelicula) : ?>
                        <label>
                            <input type="radio" name="radiopeli" value="<?php echo $pelicula['opcion']; ?>" required>
                            <span class="<?php echo $pelicula['seleccion']; ?>"><?php echo strtoupper($pelicula['seleccion']); ?></span>
                            <?php echo $pelicula['opcion']; ?>

                        </label>
                        <br>
                    <?php endforeach; ?>
                </div>

                <br>
                <!--que comida prefieres-------------------------------------------------------------------------------------------->

                <div class="contenedor-encuesta">
                    <h1>¿Tienes Internet En Casa?</h1>
                    <?php foreach ($comidas as $comida) : ?>
                        <label>
                            <input type="radio" name="radiocomida" value="<?php echo $comida['opcion']; ?>" required>
                            <span class="<?php echo $comida['seleccion']; ?>"><?php echo strtoupper($comida['seleccion']); ?></span>
                            <?php echo $comida['opcion']; ?>

                        </label>
                        <br>
                    <?php endforeach; ?>
                </div>
                <br>
                <center>
                    <br><br>
                    <div class="neon">

                        <button class="boton-ini" type="submit" style="vertical-align:middle">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            Enviar Encuesta
                        </button>

                    </div>

                </center>
                <br>
            </form>
        </section>
        <script type="text/javascript">
            let progress = document.getElementById('progressbar');
            let totalHeight = document.body.scrollHeight - window.innerHeight;
            window.onscroll = function() {
                let progressHeight = (window.pageYOffset / totalHeight) * 100;
                progress.style.height = progressHeight + "%";
            }
        </script>

    </body>

    </html>