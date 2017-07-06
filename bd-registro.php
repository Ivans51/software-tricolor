<?php

include_once("bd-conexion.php");

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$edad = $_POST["edad"];
$sexo = $_POST["sexo"];
$usuario = $_POST["usuario"];
$clave = $_POST["password"];
$opciones = $_POST["opciones"];

$sql = "INSERT INTO  tricolor.usuarios  (nombre, apellido, edad, sexo, usuario, clave, opciones)
VALUES ($nombre, $apellido, $edad, $sexo, $usuario, $clave, $opciones)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();