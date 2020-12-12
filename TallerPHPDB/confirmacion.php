<!DOCTYPE HTML>
<HEAD>
<title>Gestor DB</title>
</HEAD>
<body>
<?php
include_once dirname(__FILE__) . '/config.php';

// Crear conexión
$con=mysqli_connect(HOST_DB,USUARIO_DB,USUARIO_PASS,NOMBRE_DB);
$ced=$_POST['cedulap'];
$sqlinsert = "INSERT INTO Personas (Cedula, Nombre, Apellido, Correo, Edad) VALUES ('".$_POST['cedulap']."','".$_POST['nombrep']."', '".$_POST['apellidop']."','".$_POST['correop']."','".$_POST['edadp']."')";
$sqlactu = "UPDATE Personas SET Nombre='".$_POST['nombrep']."',Apellido='".$_POST['apellidop']."',Correo='".$_POST['correop']."',Edad='".$_POST['edadp']."' WHERE Cedula='".$_POST['cedulap']."'";
$sqlver= "SELECT * FROM Personas WHERE Cedula='".$_POST['cedulap']."'";
// Verificar conexión
if (mysqli_connect_errno())
{
echo "Error en la conexión: ". mysqli_connect_error();
}


//Actualizar o crear
$resul=mysqli_query($con, $sqlver);
$result=mysqli_fetch_array($resul); 
if($result===null){
    mysqli_query($con, $sqlinsert);
    echo  "<h2>CREADO</h2>";
}elseif(mysqli_query($con, $sqlactu)){
    echo "<h2>ACTUALIZADO</h2>";
}

$index = '<br><a href="gestor_person.php">Volver</a>';
echo $index;
mysqli_close($con);

?>
</body>