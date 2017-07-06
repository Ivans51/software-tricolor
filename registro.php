<!doctype html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Registro usuario</title>
    <meta name="generator" content="HAPedit 3.1">
    <link rel="stylesheet" href="registro.css">
</head>
<body>
<div id="cont-registro">

    <form action="bd-registro.php" method="post">
        <table>
            <caption>Registro de usurio</caption>
            <tr>
                <td>Nombre:</td>
                <td><input type="text" name="nombre"></td>
            </tr>
            <tr>
                <td>Apellido:</td>
                <td><input type="text" name="apellido"></td>
            <tr>
                <td>Edad:</td>
                <td><input type="text" name="edad"></td>
            <tr>
                <td>Sexo:</td>
                <td><select name="Sexo">
                    <option></option>
                    <option value="1">Femenino</option>
                    <option value="2">Masculino</option>
                </select></td>
            </tr>
        </table>
        <table>
            <tr>
                <td>Usuario:
                <td><input type="text" name="usuario">
            </tr>
            <tr>
                <td>Contrase&ntilde;a:
                <td><input type="text" name="password">
            </td>
        </table>
        <table class="end-table">
            <tr>
                <td>Opciones:
                    <select name="opciones">
                        <option></option>
                        <option value="Registrar">Registrar</option>
                    </select>
                </td>
                <td><input type="submit" value="cargar">
                    <input type="reset" value="Limpiar"></td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>
</body>
</html>

