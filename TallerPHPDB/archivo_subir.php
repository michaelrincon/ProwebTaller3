<!DOCTYPE HTML>
<HEAD>
<title>Gestor ARCHI</title>
</HEAD>
<body> 
    <h1>Archivo subido</h1>
    <script type="text/javascript">
            alert("Archivo guardado correctamente");
         </script>
<?php
$str_pagina = "";
if ($_FILES["arch"]["error"] > 0){
$str_pagina.="Error: " . $_FILES["arch"]["error"] . "<br>";
}
else {
$str_pagina.= "Nombre: " . $_FILES["arch"] ["name"] . "<br>";
$str_pagina.= "Tipo: " . $_FILES["arch"]["type"] . "<br>";
$str_pagina.= "Tamaño: " . ($_FILES["arch"]["size"] / 1024) . "
kB<br>";
}
echo $str_pagina;
if (!file_exists('subidos/')) {
    mkdir('subidos/',0777,true);
    }
    move_uploaded_file($_FILES["arch"]["tmp_name"],"subidos\\"
    .$_FILES["arch"]["name"]);
    echo "Guardado en: " . "subidos/" . $_FILES["arch"]["name"];


    $index = '<br><a href="gestor_archi.php">Volver</a>';



echo $index;
?>
</body>