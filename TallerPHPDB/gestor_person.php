<?php
include_once dirname(__FILE__) . '/config.php';
$con = mysqli_connect(HOST_DB, USUARIO_DB, USUARIO_PASS, NOMBRE_DB);
?>
<!DOCTYPE HTML>
<HEAD>
<title>Gestor DB</title>
</HEAD>
<body>

<?php

$mensaje = '<h1>INSERTAR DATOS</h1>
<form action="confirmacion.php" method="post">
Cedula: <input type="numeric" name="cedulap" required pattern="[0-9]+"><br>
Nombre: <input type="text" name="nombrep" required pattern="[A-Za-z]+[\s][A-Za-z]+"><br>
Apellido: <input type="text" name="apellidop" required pattern="[A-Za-z]+[\s][A-Za-z]+"><br>
Correo: <input type="email" name="correop" required pattern="^[^@]+@[^@]+\.[a-zA-Z]{2,}$"><br>
Edad: <input type="numeric" name="edadp" required pattern="[0-9]+"><br>
<input type="submit" value="Insertar">
</form>
<h1>BORRAR PERSONA</h1>
<form action="confir_borrar.php" method="post">
Cedula: <input type="numeric" name="cedulapborrar" required pattern="[0-9]+"><br>
<input type="submit" value="Borrar">
</form>
<h1>VER TABLA PERSONAS</h1>
<form action="ver_tabla_per.php" method="get">
<p>Seleccione el orden de visualización:</p>
<input type="radio" id="Ascen" name="Orden" value="Ascendente">
<label for="Ascen">Ascendente</label><br>
<input type="radio" id="Desc" name="Orden" value="Descendente">
<label for="Desc">Descendente</label>
<br>  
<p>Seleccione la columna por la que desea organizar:</p>
<input type="radio" id="nombre" name="Columna" value="Nombre">
<label for="nombre">Nombre</label><br>
<input type="radio" id="cedula" name="Columna" value="Cedula">
<label for="age2">Cedula</label>
<br> 
<br>  
<input type="submit" value="Ver tabla personas">
</form>';

echo $mensaje;

$index = '<br><a href="index.php">Volver</a>';



echo $index;
mysqli_close($con);

?>
</body>