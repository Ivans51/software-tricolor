<?php ?>
<h1>CONFIGURACION DEL SISTEMA</h1>
<ul class="menu">
    <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">MANUAL DE AYUDA </a>
        <div class="dropdown-content">
            <a href="REPORTE">VER MANUAL</a>
        </div>
    <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">REPORTE </a>
        <div class="dropdown-content">
            <a href="#" onclick="printDiv('printableArea')">IMPRIMIR REPORTE</a>
        </div>
    </li>
    <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">SISTEMA</a>
        <div class="dropdown-content">
            <a href="SOPORTE">SOPORTE TECNICO</a>
            <a href="http://localhost/phpmyadmin/db_structure.php?server=1&db=tricolor&token=e282302404fc1b78065ef55ab9b69e94">MANTENIMIENTO
                DE LA BASE DE DATOS</a>
            <a href="Actividades">MODIFICACION DE LAS ACTIVIDADES</a>
            <a href="Matematicas">MODIFICACION DE LOS VIDEOS DE MATEMATICA</a>
            <a href="Lenguaje">MODIFICACION DE LOS VIDEOS DE LENGUAJE</a>
            <a href="Cuentos">MODIFICACION DE LOS CUENTOS</a>
        </div>
    </li>
    <li class="dropdown">
        <a href="tricolor-salir.php">SALIR</a>
    </li>
</ul>
<div id="printableArea" style="display: none">
    <h1>Auditoria del sistema</h1>
    <table class="tabla-auditoria">
        <tr>
            <th>Id Auditoria</th>
            <th>Usuario</th>
            <th>Nombre</th>
            <th>FechaInicio</th>
            <th>Tiempo Inicio</th>
            <th>Tiempo Fin Sesion</th>
            <th>Id Usuario</th>
        </tr>
        <?php
        $sql = "SELECT id_auditoria, usuario, nombre, fechaInicio, tiempoInicio, tiempoFinSesion, fk_id_auditoria 
                    FROM tricolor.auditoriausuario";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?= $row['id_auditoria'] ?></td>
                    <td><?= $row['usuario'] ?></td>
                    <td><?= $row['nombre'] ?></td>
                    <td><?= $row['fechaInicio'] ?></td>
                    <td><?= $row['tiempoInicio'] ?></td>
                    <td><?= $row['tiempoFinSesion'] ?></td>
                    <td><?= $row['fk_id_auditoria'] ?></td>
                </tr>
            <?php }
        } else {
            echo "0 results";
        }
        ?>
    </table>
</div>

<?php ?>
