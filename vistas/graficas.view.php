<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Icono de pestaña -->
    <link rel="shortcut icon" href="<?php echo RUTA; ?>icono.ico" type="image/x-icon">
    <!-- Estilos -->
    <link rel="stylesheet" href="<?php echo RUTA; ?>recursos/css/encuestas.css">
    <!-- Color navegador -->
    <meta name="theme-color" content="#202020">
    <title>Gráficas</title>
</head>

<body>
    <div id="progressbar"> </div>
    <div id="scrollpath"></div>
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


    <div class="contenedor-contador">
        <h3>Número de personas que han</h3>
        <h3>contestado esta encuesta:</h3>
        <div class="grafico"><strong class="barra"><?php echo $conteo["votos_totales"]; ?> Personas</strong></div>

    </div><br>

    <style>
        <?php
        foreach ($votosedad as $votos) :
            $porcentajepreg = calcularPorcentaje($votos['voto'], $conteo["votos_totales"]);
            echo ".card1:nth-child(" . $votos['id_res'] . ") circle:nth-child(2){
                stroke-dashoffset: calc(440 - (440 *" . round($porcentajepreg, 1) . ") / 100);";
            if ($votos['id_res'] == '1') {
                echo 'stroke:#62ff00';
            } else if ($votos['id_res'] == '2') {
                echo  'stroke:#00a1ff';
            } else {
                echo 'stroke: #ff04f3';
            }
            echo "}";
        endforeach;

        foreach ($votosempleo as $votos) :
            $porcentajepreg = calcularPorcentaje($votos['voto'], $conteo["votos_totales"]);
            echo ".card2:nth-child(" . $votos['id_empleo'] . ") circle:nth-child(2){
                stroke-dashoffset: calc(440 - (440 *" . round($porcentajepreg, 1) . ") / 100);";
            if ($votos['id_empleo'] == '1') {
                echo 'stroke:#62ff00';
            } else if ($votos['id_empleo'] == '2') {
                echo  'stroke:#00a1ff';
            } else {
                echo 'stroke: #ff04f3';
            }
            echo "}";
        endforeach;

        foreach ($votosmusic as $votos) :
            $porcentajepreg = calcularPorcentaje($votos['voto'], $conteo["votos_totales"]);
            echo ".card3:nth-child(" . $votos['id_music'] . ") circle:nth-child(2){
                stroke-dashoffset: calc(440 - (440 *" . round($porcentajepreg, 1) . ") / 100);";
            if ($votos['id_music'] == '1') {
                echo 'stroke:#62ff00';
            } else if ($votos['id_music'] == '2') {
                echo  'stroke:#00a1ff';
            } else {
                echo 'stroke: #ff04f3';
            }
            echo "}";
        endforeach;

        foreach ($votospeli as $votos) :
            $porcentajepreg = calcularPorcentaje($votos['voto'], $conteo["votos_totales"]);
            echo ".card4:nth-child(" . $votos['id_peli'] . ") circle:nth-child(2){
                stroke-dashoffset: calc(440 - (440 *" . round($porcentajepreg, 1) . ") / 100);";
            if ($votos['id_peli'] == '1') {
                echo 'stroke:#62ff00';
            } else if ($votos['id_peli'] == '2') {
                echo  'stroke:#00a1ff';
            } else {
                echo 'stroke: #ff04f3';
            }
            echo "}";
        endforeach;

        foreach ($votoscomida as $votos) :
            $porcentajepreg = calcularPorcentaje($votos['voto'], $conteo["votos_totales"]);
            echo ".card5:nth-child(" . $votos['id_com'] . ") circle:nth-child(2){
                stroke-dashoffset: calc(440 - (440 *" . round($porcentajepreg, 1) . ") / 100);";
            if ($votos['id_com'] == '1') {
                echo 'stroke:#62ff00';
            } else if ($votos['id_com'] == '2') {
                echo  'stroke:#00a1ff';
            } else {
                echo 'stroke: #ff04f3';
            }
            echo "}";
        endforeach;

        ?>
    </style>

    <div class="contenedor-encuesta">

        <h1>¿Cuál es tu edad?</h1>

        <div class="graficas">
            <div class="container">

                <?php foreach ($votosedad as $votos) :
                    $porcentajepreg = calcularPorcentaje($votos['voto'], $conteo["votos_totales"]);
                ?>
                    <div class="card1">
                        <div class="caja">
                            <div class="percent<?php echo $votos['seleccion']; ?>">
                                <svg>
                                    <circle cx="70" cy="70" r="70"></circle>
                                    <circle cx="70" cy="70" r="70"></circle>
                                </svg>
                                <div class="number">
                                    <h2><?php echo round($porcentajepreg, 1); ?> <span>%</span></h2>
                                </div>
                            </div>
                            <h2 class="text<?php echo $votos['seleccion']; ?>"> El <?php echo round($porcentajepreg, 1) . '%'; ?> tienen de <?php echo $votos['opcion']; ?>.</h2>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div><br>

    <div class="contenedor-encuesta">
        <h1>¿A que te dedicas?</h1>
        <div class="graficas">
            <div class="container">
                <?php foreach ($votosempleo as $votos) :
                    $porcentajepreg = calcularPorcentaje($votos['voto'], $conteo["votos_totales"]);
                ?>
                    <div class="card2">
                        <div class="caja">
                            <div class="percent<?php echo $votos['seleccion']; ?>">
                                <svg>
                                    <circle cx="70" cy="70" r="70"></circle>
                                    <circle cx="70" cy="70" r="70"></circle>
                                </svg>
                                <div class="number">
                                    <h2><?php echo round($porcentajepreg, 1); ?> <span>%</span></h2>
                                </div>
                            </div>
                            <h2 class="text<?php echo $votos['seleccion']; ?>">El <?php echo round($porcentajepreg, 1) . '%'; ?> se dedica a <?php echo $votos['opcion']; ?>.</h2>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div><br>

    <div class="contenedor-encuesta">
        <h1>¿Genero?</h1>
        <div class="graficas">
            <div class="container">
                <?php foreach ($votosmusic as $votos) :
                    $porcentajepreg = calcularPorcentaje($votos['voto'], $conteo["votos_totales"]);
                ?>
                    <div class="card3">
                        <div class="caja">
                            <div class="percent<?php echo $votos['seleccion']; ?>">
                                <svg>
                                    <circle cx="70" cy="70" r="70"></circle>
                                    <circle cx="70" cy="70" r="70"></circle>
                                </svg>
                                <div class="number">
                                    <h2><?php echo round($porcentajepreg, 1); ?> <span>%</span></h2>
                                </div>
                            </div>
                            <h2 class="text<?php echo $votos['seleccion']; ?>">El <?php echo round($porcentajepreg, 1) . '%'; ?> prefiere <?php echo $votos['opcion']; ?>.</h2>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div><br>

    <div class="contenedor-encuesta">
        <h1>¿Tienes Equipo de Cómputo en Casa?</h1>
        <div class="graficas">
            <div class="container">
                <?php foreach ($votospeli as $votos) :
                    $porcentajepreg = calcularPorcentaje($votos['voto'], $conteo["votos_totales"]);
                ?>
                    <div class="card4">
                        <div class="caja">
                            <div class="percent<?php echo $votos['seleccion']; ?>">
                                <svg>
                                    <circle cx="70" cy="70" r="70"></circle>
                                    <circle cx="70" cy="70" r="70"></circle>
                                </svg>
                                <div class="number">
                                    <h2><?php echo round($porcentajepreg, 1); ?> <span>%</span></h2>
                                </div>
                            </div>
                            <h2 class="text<?php echo $votos['seleccion']; ?>">El <?php echo round($porcentajepreg, 1) . '%'; ?> prefiere <?php echo $votos['opcion']; ?>.</h2>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div><br>

    <div class="contenedor-encuesta">
        <h1>¿Tienes Internet En Casa?</h1>
        <div class="graficas">
            <div class="container">
                <?php foreach ($votoscomida as $votos) :
                    $porcentajepreg = calcularPorcentaje($votos['voto'], $conteo["votos_totales"]);
                ?>
                    <div class="card5">
                        <div class="caja">
                            <div class="percent<?php echo $votos['seleccion']; ?>">
                                <svg>
                                    <circle cx="70" cy="70" r="70"></circle>
                                    <circle cx="70" cy="70" r="70"></circle>
                                </svg>
                                <div class="number">
                                    <h2><?php echo round($porcentajepreg, 1); ?> <span>%</span></h2>
                                </div>
                            </div>
                            <h2 class="text<?php echo $votos['seleccion']; ?>">El <?php echo round($porcentajepreg, 1) . '%'; ?> prefiere <?php echo $votos['opcion']; ?>.</h2>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div><br>
    <center>
        <br><br>
        <div class="neon-gra">

            <a class="boton-ini" style="vertical-align:middle" href="<?php echo RUTA; ?>principales/principal.php">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Finalizar
            </a>

        </div>

    </center>
    <br>
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