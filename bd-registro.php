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

    $sql = "INSERT INTO  tricolor.usuarios  (nombre, apellido, edad, sexo, usuario, clave, opciones)
VALUES ('$nombre', '$apellido', '$edad', '$sexo', '$usuario', '$clave', '$opciones')";

    if ($conn->query($sql) === TRUE) {
        echo "Usuario registrado correctamente
    <a href='tricolor-inicio.php' 
    style='text-decoration: none; color: #0661d0; font-size: 20px;'>
    Iniciar Sesion</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}