<head>
    <title>Resultado de registro</title>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1"/>
    <meta name="generator" content="HAPedit 3.1">
</head>
<body bgcolor="#57A1BA">
<?php
$conexion = mysqli_connect("localhost", "root")
or die("problema en la conexion");
mysqli_select_db("registro", $conexion)
or die("problemas en la seleccion de la base de datos");
if (($_REQUEST['acti'] == "regi") && ($_REQUEST['nom'] != "") && ($_REQUEST['ape'] != "") && ($_REQUEST['eda'] != "") && ($_REQUEST['usu'] != "") && ($_REQUEST['con'] != "") && ($_REQUEST['Sexo'] != "")) {
    mysqli_query("insert into cliente(nombre,apellido,edad,sexo,
values('$_REQUEST[nom]','$_REQUEST[ape]',' $_REQUEST[eda]','$_REQUEST[usu]','$_REQUEST[con]','$_REQUEST[Sexo]',
')", $conexion)
    or die("problemas en el select" . mysqli_error());
    mysqli_close($conexion);
    echo "El alumno fue ingresado correctamente con los  datos" . "<br />" . "<br />";
    echo "Nombre :" . $_REQUEST['nom'] . "<br />";
    echo "Apellido :" . $_REQUEST['ape'] . "<br />";
    echo "Edad :" . $_REQUEST['eda'] . "<br />";
    echo "Sexo :" . $_REQUEST['Sexo'] . "<br />";
    echo "Usuario :" . $_REQUEST['usu'] . "<br />";
    echo "Contrase�a :" . $_REQUEST['con'] . "<br />";
    $boton = htmlspecialchars($_SERVER['HTTP_REFERER']);
    echo "<a href='$boton'>Atras</a>";
} elseif (($_REQUEST['nom'] == "") && ($_REQUEST['ape'] != "") && ($_REQUEST['eda'] == "") && ($_REQUEST['usu'] == "") && ($_REQUEST['con'] == "") && ($_REQUEST['Sexo'] == "")) {
    echo "Debe llenar los datos  para poder cargar la informacion" . "<br />" . "<br />";
    $boton = htmlspecialchars($_SERVER['HTTP_REFERER']);
    echo "<a href='$boton'>Volver al formulario</a>";
}
/*if (($_REQUEST
}
else{
    echo "No existe el alumno con su nombre" . "<br />";
}}*/
?>
</body>
</html>


