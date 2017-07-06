<html>
<head>
    <title>Registro usuario</title>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1"/>
    <meta name="generator" content="HAPedit 3.1">
    <link rel="stylesheet" href="registro.css">
</head>
<body>
<div id="cont-registro">
    <form action="registro-bd.php" medhot="post">
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
                <td>Contraseña:
                <td><input type="text" name="password">
            </td>
        </table>
        <table class="end-table">
            <tr>
                <td>Opciones:
                    <select name="opciones">
                        <option></option>
                        <option value="regi">Registrar</option>
                    </select>
                </td>
                <td><input type="submit" value="Cargar">
                    <input type="reset" value="Limpiar"></td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>
</body>
</html>

