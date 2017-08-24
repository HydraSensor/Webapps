<?php
$cadena = "maiiiiir@gmail.com";
$subcadena = "@";
$posicionsubcadena = strpos ($cadena, $subcadena);
$carpeta = substr ($cadena, 0, $posicionsubcadena);
echo $carpeta;

 ?>
