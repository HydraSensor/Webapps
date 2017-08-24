<?php
class Session{
    public function __construct($MM_authorizedUsers,$MM_donotCheckaccess,$array) // listo
    {
      session_start();
      $this->MM_authorizedUsers = $MM_authorizedUsers;  // se llena distinto en cada pagina
      $this->MM_donotCheckaccess = $MM_donotCheckaccess;
      if ($array != ''){
          $this->crearVariableSession($array);
      }
    }
    // La session solo la destruyo cuando el usuario se desloguea
    public function destruirSession()
    {
      session_destroy();
    }
    public function borrarVariablesSession() // lista
    {
      //unset($_SESSION['cedente']);
      session_unset();
      $this->destruirSession();
    }
    public function Acceso($user,$pass){       
        $db = new Db();
        $q = "SELECT id_usuarios, cliente, email FROM usuarios WHERE usuario = '$user' and password = '$pass'";
        $select = $db -> select($q);
        $user = '';
        foreach($select as $sel){
            $user = $sel['id_usuarios'];
            $cliente = $sel['cliente'];
            $email = $sel['email'];
        }
        if (Count($select) > 0){
          $this->urlIngreso($cliente, $email);
        }else{
          echo "1";
          //$MM_redirectLoginSuccess = '../../bienvenida/bienvenida.php';
          //header("Location: " . $MM_redirectLoginSuccess );

          //$link = "../index.html";
          //$this->Redirect($link);
        }
     }
     public function Redirect($link){
       echo $link;
       //$MM_redirectLoginSuccess = '../../index.html';
       //header("Location: " . $link );

        /*switch($user){
            case 1 :
                $this->crearVariableSession(array("nivelUsuario" => "1", "cliente" => "Si"));
                echo "http://localhost/Webapps-master/bienvenida/bienvenida.php";
                break;
            case 2:
                echo "Redirigir al 2ttt";
                break;
        } */
     }
     public function urlIngreso($cliente, $email){
       if($cliente == 1){
         $subcadena = "@";
         $posicionsubcadena = strpos ($email, $subcadena);
         $carpeta = substr ($email, 0, $posicionsubcadena); //../../index.html
         //$link = "http://localhost/Webapps-master/".$carpeta."/bienvenida/bienvenida.php";
         $link = $carpeta."/bienvenida/bienvenida.php";
         $this->crearVariableSession(array("nivelUsuario" => "2", "cliente" => "No"));
       }else{
         $link = "bienvenida/bienvenida.php";
         $this->crearVariableSession(array("nivelUsuario" => "1", "cliente" => "Si"));
       }
       $this->Redirect($link);
     }

     public function crearVariableSession($vector)
     {
      foreach ($vector as $clave => $valor)
      {
        $_SESSION[$clave] = $valor;
      }
     }
 }
?>
