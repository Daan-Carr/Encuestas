<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Icono de pestaña -->
    <link rel="shortcut icon" href="<?php echo RUTA; ?>icono.ico" type="image/x-icon">
    <!-- Estilos -->
    <link rel="stylesheet" href="../recursos/css/registrate.css">
    <!-- Color navegador -->
    <meta name="theme-color" content="#202020">
    <title>Registrate</title>
</head>

<body>
<div class="contenedor-pagina">
        <div class="container-login">
            
                <div class="formulario">
    
    <h1>Registrate</h1>
    <br><br>
   
    <form class="form-content" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <div class="form">
            <input id="usuario" class="form-control" type="text" name="usuario" autocomplete="off"placeholder="Ingresa Usuario" required>
            <label for="usuario" class="label-usuario">
                
            </label>
        </div>
        <br>
        <div class="form">
            <input id="pass" class="form-control" type="password" name="contrasena" autocomplete="off" placeholder="Ingresa Contraseña" required>
            <label for="usuario" class="label-usuario">
                
            </label>
            <br><br>
        </div>
        <div class="form">
            <input id="pass2" class="form-control" type="password" name="contrasena2" autocomplete="off" placeholder="Confirma Contraseña" required>
            <label for="usuario" class="label-usuario">
                
            </label>
            <br><br>
        </div>
        <a class="boton" id="boton" class="mostrar" onclick="Mostrar_ocultar()" >
                 
                 <span></span>
                 <span></span>
                 <span></span>
                 <span></span>
             Mostrar Contraseña
               </a>
               
               <br><br>
        <!-- <input id="boton" class="mostrar" type="submit" onclick="Mostrar_ocultar()" value="Mostrar Contraseña"> -->
        <div class="neon">
        <button class="submit" type="submit">
                <span></span>
                 <span></span>
                 <span></span>
                 <span></span>    
        Registrar
    </button>
    </form>
</div>
        <br><br><br><br><br><br>
        <?php if (!empty($errores)) : ?>
        <?php echo $errores; ?>

    <?php endif; ?>
    </div></div></div>
    
</body>

<script src="<?php echo RUTA; ?>recursos/js/passview.js"></script>

</html>


    
    