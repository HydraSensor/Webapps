<?php
 include("../../class/session/session.php");
 require_once( '../../db/class.db.php' );
 $Login = new Session('1',false,'');
 $Login->Acceso($_POST['user'],$_POST['pass']);
?>
