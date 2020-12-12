<?php
include_once dirname(__FILE__) . '/config.php';

// Crear conexión
$con=mysqli_connect(HOST_DB,USUARIO_DB,USUARIO_PASS);
$sql="CREATE DATABASE ".NOMBRE_DB;
$sql2 = "CREATE TABLE Personas
(
    PID INT NOT NULL AUTO_INCREMENT,
    PRIMARY KEY(PID),
    Cedula INT,
    Nombre CHAR(30),
    Apellido CHAR(30),
    Correo CHAR(30),
    Edad INT)";

// Verificar conexión
if (mysqli_connect_errno())
{
echo "Error en la conexión: ". mysqli_connect_error();
}else{
echo "CONEXIÓN CON LA BASE DE DATOS EXITOSA!\n";
}

if (mysqli_query($con,$sql)) {
echo "Base de datos".NOMBRE_DB." creada\n";
}else {
echo mysqli_error($con)."\n";
}
$con= mysqli_connect(HOST_DB,USUARIO_DB,USUARIO_PASS,NOMBRE_DB);

if (mysqli_query($con, $sql2)) {
    echo "Tabla Personas creada correctamente\n";
    } else {
    echo "Error creando la tabla " . mysqli_error($con)."\n";
}
?>
<!DOCTYPE HTML>
<HEAD>
<title>Gestor DB</title>
</HEAD>
<body>

<?php

$mensaje = '<h1>Bienvenido al gestor de base de datos</h1>
<h2>Gestor tabla Personas</h2>
<a href="gestor_person.php">Gestionar tabla</a>
<h2>Gestor archivos</h2>
<a href="gestor_archi.php">Gestionar archivos</a>
<br>
<br>
<h2>Información</h2>';

echo $mensaje;
mysqli_close($con);

?>
</body>