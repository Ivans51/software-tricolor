<!doctype html>
<html >
<?php
// include_once "bd-select.php";
session_start();
if (isset($_SESSION['usuario_nombre'])) {
?>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css" type="text/css" media="all">
    <title>Software Tricolor</title>
</head>
<body>

<div id="contenedor">
    <h1>Sotfware didactico</h1>
    <ul class="menu">
        <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">CUENTOS</a>
            <div class="dropdown-content">
                <a href="">submenu1</a>
                <a href="">submenu1</a>
                <a href="">submenu1</a>
                <a href="">submenu1</a>
                <a href="">submenu1</a>
                <a href="">submenu1</a>
                <a href="">submenu1</a>
                <a href="">submenu1</a>
                <a href="">submenu1</a>
                <a href="">submenu1</a>
            </div>
        </li>
        <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">VIDEOS SOBRE MATEMATICA</a>
            <div class="dropdown-content">
                <a href="">submenu2</a>
                <a href="">submenu2</a>
                <a href="">submenu2</a>
                <a href="">submenu2</a>
                <a href="">submenu2</a>
                <a href="">submenu2</a>
                <a href="">submenu2</a>
                <a href="">submenu2</a>
                <a href="">submenu2</a>
                <a href="">submenu2</a>
            </div>
        </li>
        <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">VIDEOS SOBRE LENGUAJE</a>
            <div class="dropdown-content">
                <a href="">submenu3</a>
                <a href="">submenu3</a>
                <a href="">submenu3</a>
                <a href="">submenu3</a>
                <a href="">submenu3</a>
                <a href="">submenu3</a>
                <a href="">submenu3</a>
                <a href="">submenu3</a>
                <a href="">submenu3</a>
                <a href="">submenu3</a>
            </div>
        </li>
        <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">ACTIVIDADES</a>
            <div class="dropdown-content">
                <a href="">submenu4</a>
                <a href="">submenu4</a>
                <a href="">submenu4</a>
                <a href="">submenu4</a>
                <a href="">submenu4</a>
                <a href="">submenu4</a>
                <a href="">submenu4</a>
                <a href="">submenu4</a>
                <a href="">submenu4</a>
                <a href="">submenu4</a>
            </div>
        </li>
    </ul>
    <div class="manual-usuario">
        <a href="manual" target="_blank">
            <img alt="image" src="programarealizado/libro.gif" title="libro" width="45" height="60" border="0"/>
            <span>Manual de Usuario</span>
        </a>
        <a href="salir.php" class="salir-boton">Salir de la sesión</a>
    </div>
</div>
</body>
<?php } else { ?>
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesi&oacute;n</title>
    <meta name="generator" content="HAPedit 3.1">
    <link rel="stylesheet" href="registro.css">
</head>
<body>
<div id="cont-sesion">
    <form action="bd-select.php" method="post">
        <table>
            <caption>Iniciar Sesi&oacute;n</caption>
            <tr>
                <td>Usuario:</td>
                <td><input type="text" name="usuario_nombre"/></td>
            </tr>
            <tr>
                <td>Contrase&ntilde;a:</td>
                <td><input type="password" name="usuario_clave"/></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Cargar" name="cargar">
                    <input type="reset" value="Limpiar"></td>
            </tr>
        </table>
    </form>
    <ul>
        <li>&iquest;No tienes cuenta?</li>
        <li><a href="registro.php"> Registrarte </a></li>
    </ul>
    <h1>Sotfware didactico</h1>
</div>
</body>
<?php } ?>
</html>