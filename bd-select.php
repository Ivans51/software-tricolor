<?php
session_start();
include "bd-conexion.php";

/**
 * @param $row
 */
if (isset($_POST['cargar'])) { // comprobamos que se hayan enviado los datos del formulario
    // comprobamos que los campos usuarios_nombre y usuario_clave no estén vacíos
    if (empty($_POST['usuario_nombre']) || empty($_POST['usuario_clave'])) {
        echo "El usuario o la contraseña no han sido ingresados. <a href='javascript:history.back();'>Reintentar</a>";
    } else {
        $usuario_nombre = $_POST['usuario_nombre'];
        $usuario_clave = $_POST['usuario_clave'];
        $sql = mysqli_query($conn, "SELECT id_usuario, usuario, clave, tipoUsuario, fecha
        FROM tricolor.usuarios 
        WHERE usuario='" . $usuario_nombre . "' AND  clave ='" . $usuario_clave . "'");
        if ($row = mysqli_fetch_array($sql)) {
            $_SESSION['usuario_id'] = $row['id_usuario'];
            $_SESSION['usuario_nombre'] = $row["usuario"];
            $_SESSION['tipo_usuario'] = $row['tipoUsuario'];
            $date1 = $row['fecha'];
            $date2 = date('Y-m-d');

            $diff = abs(strtotime($date2) - strtotime($date1));

            $years = floor($diff / (365 * 60 * 60 * 24));
            $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
            $days = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));

            printf("%d years, %d months, %d days\n", $years, $months, $days);

            $_SESSION['months'] = $months;

            // Horas
            $hoy = date("H:i:s") - 6;
            if ($hoy < 0)
                $hoy = 24 + $hoy;

            // Minutos
            // $tiempoCierre = date("i");

            $selecUser = mysqli_query($conn, "SELECT id_usuario FROM usuarios WHERE usuario='" . $usuario_nombre . "'");
            $row = mysqli_fetch_row($selecUser);
            $idUser = $row['0'];

            $selectDato = mysqli_query($conn, "SELECT nombre FROM dato WHERE fk_id_dato_id_usuario = $idUser");
            $row = mysqli_fetch_row($selectDato);
            $nombre = $row['0'];

            $sqlInsert = "INSERT INTO auditoriausuario (usuario, nombre, fechaInicio, tiempoInicio, tiempoFinSesion, fk_id_auditoria) 
                          VALUES ('$usuario_nombre', '$nombre', NOW(), '$hoy', '0', '$idUser' )";
            $insertCorreto = mysqli_query($conn, $sqlInsert) or die ("Problemas insertar");
            header("Location: inicio.php");
        } else {
            echo 'Error, <a href="inicio.php">Reintentar</a>';
        }
    }
} else {
    header("Location: inicio.php");
}