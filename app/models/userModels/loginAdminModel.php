<?php

class LoginAdminModel extends Model {
  
  public function __construct(){
    parent::__construct();
  }
  
  public function verifyAdmin($user, $pass){
    if(isset($_POST['sendLogin'])){
      
      if($user==constant('admin') || $pass==constant('pass')){
        session_start();
        $_SESSION["Admin"] = $user;
        header('location: '.constant('URL'));
        
      } else { 
        header('location: '.constant('URL'));
      }
      
    } else {
      header('location: '.constant('URL'));
    }
  }
  
}

?>