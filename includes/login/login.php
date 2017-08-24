<?php
include("../../class/login/login.php");
include("../../class/db/DB.php");
//require_once( '../../db/class.db.php' );
$Login = new Login();
$Login->Acceso($_POST['user'],$_POST['pass']);
?>