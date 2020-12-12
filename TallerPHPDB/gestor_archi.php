<!DOCTYPE html>
<html>
<head>
<title>Subir Archivo</title> 
<meta charset="UTF-8">
</head>
<body>
    <h1>SUBIR ARCHIVO</h1>
<form action="archivo_subir.php" method="post"
enctype="multipart/form-data">
<label for="arch">Nombre:</label>
<input type="file" name="arch" id="arch"><br>
<input type="submit" name="submit"
value="Cargar Archivo">
</form>
<br><br><br><br><br><br>
<?php
crear_imagen();
date_default_timezone_set("America/Bogota");
echo "<img src=imagen.png?".date("l")."><br>";
echo "La fecha actual es " . date("d") . " del " . date("m") . " de " . date("Y")." ".date("G").":".date("i").".".date("s");

function crear_imagen(){
    $rand1 = rand(0, 255); 
    $rand2 = rand(0, 255);
    $rand3 = rand(0, 255);
$im = imagecreate(200, 200) or die("Error en la creacion de imagenes");
imagecolorallocate($im, $rand1, $rand2, $rand3); 
$rojo = imagecolorallocate($im, $rand2, $rand1, $rand3); 
$azul = imagecolorallocate($im, $rand2, $rand1, $rand3); 
imagerectangle ($im, $rand1, 10, $rand2, 50, $rojo); //rectangulo (borde)
imagefilledrectangle ($im, $rand1, $rand1, 195, $rand3, $azul); //rectangulo (lleno)
imagepng($im,"imagen.png");
imagedestroy($im);
}
$index = '<br><a href="index.php">Volver</a>';



echo $index;
?>
</body>
</html>