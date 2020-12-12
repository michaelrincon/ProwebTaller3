
<!DOCTYPE HTML>
<HEAD>
<title>Gestor DB</title>
</HEAD>
<body>
<?php
include_once dirname(__FILE__) . '/config.php';
$str_datos='';
// Crear conexión
$con=mysqli_connect(HOST_DB,USUARIO_DB,USUARIO_PASS,NOMBRE_DB);
$sql= "SELECT `Cedula`,`Nombre`,`Apellido`,`Correo`,`Edad` FROM Personas ORDER BY `Nombre` ASC";;
$sql2="SELECT `Cedula`,`Nombre`,`Apellido`,`Correo`,`Edad` FROM Personas ORDER BY `Nombre` DESC";
$sql3="SELECT `Cedula`,`Nombre`,`Apellido`,`Correo`,`Edad` FROM Personas ORDER BY `Cedula` ASC";
$sql4="SELECT `Cedula`,`Nombre`,`Apellido`,`Correo`,`Edad` FROM Personas ORDER BY `Cedula` DESC";
$sql5="SELECT * FROM Personas ";
// Verificar conexión
if (mysqli_connect_errno())
{
echo "Error en la conexión: ". mysqli_connect_error();
}

$str_datos.='<table border="1" style="width:100%">';
$str_datos.='<tr>';
$str_datos.='<th>Cedula</th>';
$str_datos.='<th>Nombre</th>';
$str_datos.='<th>Apellido</th>';
$str_datos.='<th>Correo</th>';
$str_datos.='<th>Edad</th>';
$str_datos.='</tr>';

$orden=$_GET['Orden'];
$columna=$_GET['Columna'];
if($orden === 'Ascendente' && $columna === 'Nombre'){
    $resultado = mysqli_query($con,$sql);
    while($fila = mysqli_fetch_array($resultado)) {
    $str_datos.='<tr>';
    $str_datos.= "<td>".$fila['Cedula']."</td> <td>".$fila['Nombre']."</td> <td>".$fila['Apellido']."</td> <td>".$fila['Correo']."</td> <td>".$fila['Edad']."</td>";
    $str_datos.= "</tr>";
    }
    $str_datos.= "</table>";
}elseif($orden === 'Descendente' && $columna === 'Nombre'){
    $resultado = mysqli_query($con,$sql2);
    while($fila = mysqli_fetch_array($resultado)) {
    $str_datos.='<tr>';
    $str_datos.= "<td>".$fila['Cedula']."</td> <td>".$fila['Nombre']."</td> <td>".$fila['Apellido']."</td> <td>".$fila['Correo']."</td> <td>".$fila['Edad']."</td>";
    $str_datos.= "</tr>";
    }
    $str_datos.= "</table>";
}elseif($orden === 'Ascendente' && $columna === 'Cedula'){
    $resultado = mysqli_query($con,$sql3);
    while($fila = mysqli_fetch_array($resultado)) {
    $str_datos.='<tr>';
    $str_datos.= "<td>".$fila['Cedula']."</td> <td>".$fila['Nombre']."</td> <td>".$fila['Apellido']."</td> <td>".$fila['Correo']."</td> <td>".$fila['Edad']."</td>";
    $str_datos.= "</tr>";
    }
    $str_datos.= "</table>";
}elseif($orden === 'Descendente' && $columna === 'Cedula'){
    $resultado = mysqli_query($con,$sql4);
    while($fila = mysqli_fetch_array($resultado)) {
    $str_datos.='<tr>';
    $str_datos.= "<td>".$fila['Cedula']."</td> <td>".$fila['Nombre']."</td> <td>".$fila['Apellido']."</td> <td>".$fila['Correo']."</td> <td>".$fila['Edad']."</td>";
    $str_datos.= "</tr>";
    }
    $str_datos.= "</table>";
}

echo $str_datos;

$index = '<br><a href="gestor_person.php">Volver</a>';



echo $index;
mysqli_close($con);

?>
</body>