<?php

class LoginAdmin extends Controller {

  public function __construct(){
    parent::__construct();
    $this->view->render('login/index');
    error_reporting(0); 
  }
  
  public function validate(){
    $user= $_POST['userLogin'];
    $pass= $_POST['passLogin'];
    
    $model= $this->requireModel('loginAdminModel');
    $model->verifyAdmin($user, $pass);
  }
  
}

?>