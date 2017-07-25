<?php

include_once("bd-conexion.php");

$usuario = $_POST["usuario"];

// comprobamos que el usuario ingresado no haya sido registrado antes
$sql = mysqli_query($conn, "SELECT usuario FROM usuarios WHERE usuario='" . $usuario . "'");
if (mysqli_num_rows($sql) > 0) {
    $row = mysqli_fetch_row($sql);
    $usuario = $row['0'];
    echo "El nombre usuario elegido ya ha sido registrado anteriormente. <a href='javascript:history.back();'>Reintentar</a>";
} else {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $edad = $_POST["edad"];
    $sexo = $_POST["sexo"];
    $clave = $_POST["password"];
    $opciones = $_POST["opciones"];
    $tipoUsuario = $_POST["tipoUsuario"];

    $sql = "INSERT INTO  tricolor.usuarios  (usuario, clave, opciones, fecha, tipoUsuario)
VALUES ('$usuario', '$clave', '$opciones', NOW(), '$tipoUsuario')";

    if ($conn->query($sql))
        echo "";

    $select = mysqli_query($conn, "SELECT id_usuario FROM usuarios ORDER BY id_usuario DESC LIMIT 1");
    $row = mysqli_fetch_row($select);
    $id = $row['0'];

    $sql2 = "INSERT INTO  tricolor.dato  (nombre, apellido, edad, sexo, fk_id_dato_id_usuario)
VALUES ('$nombre', '$apellido', '$edad', '$sexo', '$id')";

    if ($conn->query($sql2))
        echo "Usuario registrado correctamente
    <a href='inicio.php' 
    style='text-decoration: none; color: #0661d0; font-size: 20px;'>
    Iniciar Sesion</a>";

    $conn->close();
}