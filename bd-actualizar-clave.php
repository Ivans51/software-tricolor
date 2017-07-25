<?php

include_once("bd-conexion.php");

$usuario = $_POST["usuario_nombre"];
$clave = $_POST["usuario_clave"];

$sql = "UPDATE tricolor.usuarios SET fecha = NOW(), clave ='" . $clave . "' WHERE usuario='" . $usuario . "'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

header("Location: inicio.php");