<?php
if (file_exists("../../class/menu/menu.php")){
  $clase1 = "../../class/menu/menu.php";
  $clase2 = "../../class/db/DB.php";
}else{
  $clase1 = "../class/menu/menu.php";
  $clase2 = "../class/db/DB.php";
}

require_once $clase1;
require_once $clase2;
// envio el nivel de usuario y el nom del menu donde estoy parada
$objetoMenu = new Menu(explode( ',' ,$_SESSION['idMenu']),$_SESSION['nivelUsuario']);
$objetoMenu->crearMenu();
?>
