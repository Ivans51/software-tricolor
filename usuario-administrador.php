<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "tricolor";
$port = "3306";
//$port = "3308";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database, $port);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "";

?>

    <h1>Sotfware didactico</h1>
    <ul class="menu">
        <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">CUENTOS</a>
            <div class="dropdown-content">
                <a href="Actividades/aprende riendo.odp">APRENDE RIENDO</a>
                <a href="Actividades/que hora es.odp">QUE HORA ES</a>
                <a href="Actividades/en el zologico.odp">EN EL ZOOLOGICO</a>
                <a href="Actividades/juguemos con las matematicas.odp">JUGUEMOS CON LAS MATEMATICAS</a>
                <a href="Actividades/reto al conocimiento.odp">RETO AL CONOCIMIENTO</a>
                <a href="Actividades/aprendo con pocoyo.odp">APRENDE CON POCOYO</a>
                <a href="Actividades/juguemos con dora y sus amigos.odp">JUGUEMOS CON DORA SUS AMIGOS</a>
                <a href="Actividades/CUENTO DE CAMILA.odp">EL CUENTO DE CAMILA</a>
                <a href="Actividades/LAS AVENTURAS DE LOS NUMEROS.odp">LAS AVENTURAS DE LOS NUMEROS</a>
                <a href="Actividades/trivia del cuerpo humano.odp">TRIVIA DEL CUERPO HUMANO</a>
            </div>
        </li>
        <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">VIDEOS SOBRE MATEMATICA</a>
            <div class="dropdown-content">
                <a href="Matematicas/suma.mp4">COMO SUMAR Y RESTAR CON ESCALAS NUMERICAS</a>
                <a href="Matematicas/Decimales.mp4">QUE SON LOS NUMERO DECIMALES</a>
                <a href="Matematicas/El Doble y la Mitad de un Numero.mp4">EL DOBLE Y LA MITAD DE UN
                    NUMERO</a>
                <a href="Matematicas/La Multiplicacion .mp4">LA MULTIPLICACION</a>
                <a href="Matematicas/Multiplicar.mp4">COMO MULTIPLICAR POR DOS SIFRAS</a>
                <a href="Matematicas/partes de la division.mp4">PARTES DE LA DIVISION</a>
                <a href="Matematicas/La Division  Videos.mp4">lA DIVISION</a>
                <a href="Matematicas/matematica.mp4">CUANTO SABES DE MATEMATICA FRACCIONES MULTIPLICACIO Y
                    DIVISIONES</a>
                <a href="Matematicas/Multiplos y Divisores .mp4">MULTIPLOS DIVISORES</a>
            </div>
        </li>
        <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">VIDEOS SOBRE LENGUAJE</a>
            <div class="dropdown-content">
                <a href="Lenguaje/los abecedario.mp4">ABECEDARIO</a>
                <a href="Lenguaje/Verbo.mp4">QUE ES UN VERBO</a>
                <a href="Lenguaje/los Verbos.mp4">COMO SE CONJUGAN LOS VERBOS</a>
                <a href="Lenguaje/Adjetivos.mp4">QUE SON LOS ADJETIVOS</a>
                <a href="Lenguaje/Oraciones.mp4">ANALISIS SISTEMATICOS DE ORACIONES</a>
                <a href="Lenguaje/Clases de Palabras.mp4">CLASE DE PALABRAS</a>
                <a href="Lenguaje/separarsilabas.mp4">COMO SEPARAR EN SILABAS</a>
                <a href="Lenguaje/signos.mp4">COMO USAR LOS SIGNOS DE PUNTUACION</a>
                <a href="Lenguaje/Adverbios.mp4">LOS ADVERBIOS</a>
                <a href="Lenguaje/Sustantivos.mp4">LOS SUSTANTIVOS PROPIOS Y COMUNES</a>
                <a href="Lenguaje/sn.mp4">SINONIMOS ANTONIMOS Y PARONIMOS</a>
            </div>
        </li>
        <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">ACTIVIDADES</a>
            <div class="dropdown-content">
                <a href="Cuentos/Cuento _El fantasma de la escuela_ (480p_30fps_H264-128kbit_AAC).mp4">EL
                    FANSTAMAS
                    DE LA ESCUELA</a>
                <a href="Cuentos/video1.mp4">LA PRINCESA ROSA</a>
                <a href="Cuentos/video3.mp4">EL ABUELO EL NIETO</a>
                <a href="Cuentos/video4.mp4">EL BOSQUE ENCANTADO</a>
                <a href="Cuentos/video6.mp4">EL ERIZO Y EL GLOBO</a>
                <a href="Cuentos/video7.mp4">EL GIGANTE EGOISTA</a>
                <a href="Cuentos/video8.mp4">EL LEON QUE NO SANIA ESCRIBIR</a>
                <a href="Cuentos/video.mp4">EL RINCIPITO</a>
                <a href="Cuentos/video10.mp4">EL GATO CON BOTAS</a>
            </div>
        </li>
        <li class="dropdown">
            <a href="tricolor-salir.php">SALIR</a>
        </li>
    </ul>

<?php ?>