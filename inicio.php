<!doctype html>
<html>
<?php
session_start();
// Validar si el usuario existe
if (isset($_SESSION['usuario_nombre'])) {
    $usuario = $_SESSION['usuario_nombre'];
    $tipoUsuario = $_SESSION['tipo_usuario'];
    $months = $_SESSION['months'];
    ?>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css-style.css" type="text/css" media="all">
        <title>Software Tricolor</title>
        <script src="funciones.js"></script>
    </head>
    <body onload="startTime()">
    <!-- Validar el tiempo de inicio de sesion -->
    <?php if ($months <= 3) { ?>
        <div id="contenedor">
            <!-- Validar si el usuario es un administrador -->
            <?php if ($tipoUsuario != "Administrador") {
                include "usuario-administrador.php";
            } else {
                include "usuario-estandar.php";
            } ?>
        </div>
        <main>
            <a href="manual" target="_blank">
                <img alt="image" src="programarealizado/libro.gif" title="libro" width="45" height="60" border="0"/>
                <span>Manual de Usuario</span>
                <div id="txt"></div>
            </a>
        </main>
        </div>
        </body>
    <?php } else {
        // validar el tiempo de sesion
        include "usuario-nueva-contraseña.php";
    }
} else {
    // Inicio de sesion normal del usuario
    include "usuario-inicio-sesion.php";
} ?>
</html>