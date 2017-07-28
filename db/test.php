<?php
 
 require_once( 'class.db.php' );
 $database = new DB();
 $q = "SELECT username FROM users WHERE id = 1";
 $select = $database->get_results($q);
 $user = '';
 foreach($select as $sel){
     $user = $sel['username'];
 }
 echo $user;

?>