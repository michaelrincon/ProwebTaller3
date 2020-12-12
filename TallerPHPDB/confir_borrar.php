<?php
include_once dirname(__FILE__) . '/config.php';

// Crear conexión
$con=mysqli_connect(HOST_DB,USUARIO_DB,USUARIO_PASS,NOMBRE_DB);
$sqlbor = "DELETE FROM Personas WHERE Cedula='".$_POST['cedulapborrar']."'";
// Verificar conexión
if (mysqli_connect_errno())
{
echo "Error en la conexión: ". mysqli_connect_error();
}

//borrar
if($resul=mysqli_query($con, $sqlbor)){
    echo "<h2>BORRADO</h2>";
}else{
    echo "Error al borrar".mysqli_error($con);
}

?>
<!DOCTYPE HTML>
<HEAD>
<title>Gestor DB</title>
</HEAD>
<body>

<?php
$index = '<br><a href="gestor_person.php">Volver</a>';
echo $index;
mysqli_close($con);

?>
</body>