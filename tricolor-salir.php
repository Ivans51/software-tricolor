<?php
session_start();
include('bd-conexion.php'); // incluímos los datos de acceso a la BD
// comprobamos que se haya iniciado la sesión
$usuario = $_SESSION['usuario_nombre'];
if (isset($usuario)) {
    $selecUser = mysqli_query($conn, "SELECT id_usuario FROM usuarios WHERE usuario='" . $usuario . "'");
    $row = mysqli_fetch_row($selecUser);
    $idUser = $row['0'];

    $selectDato = mysqli_query($conn, "SELECT tiempoInicio FROM auditoriausuario WHERE fk_id_auditoria = $idUser");
    $row = mysqli_fetch_row($selectDato);
    $tiempoInicio = $row['0'];

    // Horas
    $tiempoCierre = date("H:i:s") - 6;
    if ($tiempoCierre < 0)
        $tiempoCierre = 24 + $tiempoCierre;

    // Minutos
    // $tiempoCierre = date("i");

    $nuevoTiempo = $tiempoCierre - $tiempoInicio;

    session_destroy();
    $actualizarAuditoria = "UPDATE auditoriausuario SET tiempoFinSesion = '11' 
    WHERE fk_id_auditoria = '" . $idUser . "'";

    header("Location: inicio.php");
} else {
    echo "Operación incorrecta.";
}