<?php
class Login{
    public function Acceso($user,$pass){
        $database = new DB();
        $q = "SELECT id FROM users WHERE username = '$user'";
        $select = $database->get_results($q);
        $user = '';
        foreach($select as $sel){
            $user = $sel['id'];
        }
        $this->Redirect($user);
     }
     public function Redirect($user){
        switch($user){
            case 1 :
                echo "Redirigir al 1";
                break;
            case 2:
                echo "Redirigir al 2";
                break;  
        }
     }
 }
?>