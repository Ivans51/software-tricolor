<?php session_destroy(); ?>
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesi&oacute;n</title>
    <meta name="generator" content="HAPedit 3.1">
    <link rel="stylesheet" href="css-registro.css">
    <script src="funciones.js"></script>
</head>
<body onload="startTime()">
<div id="cont-sesion">
    <form action="bd-actualizar-clave.php" method="post">
        <table>
            <caption>Iniciar Sesi&oacute;n</caption>
            <tr>
                <td>Usuario:</td>
                <td><input type="text" name="usuario_nombre"/></td>
            </tr>
            <tr>
                <td>Nueva Contrase&ntilde;a:</td>
                <td><input type="password" name="usuario_clave"/></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Cargar" name="cargar">
                    <input type="reset" value="Limpiar"></td>
            </tr>
        </table>
    </form>
    <h1>Actualizar Clave</h1>
    <div id="txt"></div>
</div>
</body>

<?php ?>