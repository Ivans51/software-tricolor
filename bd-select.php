<?php
session_start();
include_once "bd-conexion.php";
if (isset($_POST['cargar'])) { // comprobamos que se hayan enviado los datos del formulario
    // comprobamos que los campos usuarios_nombre y usuario_clave no estén vacíos
    if (empty($_POST['usuario_nombre']) || empty($_POST['usuario_clave'])) {
        echo "El usuario o la contraseña no han sido ingresados. <a href='javascript:history.back();'>Reintentar</a>";
    } else {
        $usuario_nombre = $_POST['usuario_nombre'];
        $usuario_clave = $_POST['usuario_clave'];
        $sql = mysqli_query($conn, "SELECT id_usuario, usuario, clave 
        FROM tricolor.usuarios 
        WHERE usuario='" . $usuario_nombre . "' AND  clave ='" . $usuario_clave . "'");
        if ($row = mysqli_fetch_array($sql)) {
            $_SESSION['usuario_id'] = $row['id_usuario'];
            $_SESSION['usuario_nombre'] = $row["usuario"];
            header("Location: tricolor-inicio.php");
        } else {
            echo 'Error, <a href="tricolor-inicio.php">Reintentar</a>';
        }
    }
} else {
    header("Location: tricolor-inicio.php");
}
?>