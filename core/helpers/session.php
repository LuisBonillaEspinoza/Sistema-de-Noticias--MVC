<?php
class Sessions extends Files {
  
  public function __construct(){
    session_start();
  }
  
  public function verifySessionEmpty(){
    if(!isset($_SESSION['Admin'])){
      require $this->fileUser('home');
    } else {
      require $this->fileAdmin('home');
    }
    $home= new Home();
  }
  
  public function verifySessionFile($controller){
    if(!isset($_SESSION['Admin'])){
      return $this->fileUser($controller);
    } else {
      return $this->fileAdmin($controller);
    }
  }
  
  public function errorPage(){
    if(!isset($_SESSION['Admin'])){
      require $this->fileUser('errorPage');
    } else {
      require $this->fileAdmin('errorPage');
    }
    $errorPage= new ErrorPage();
  }

}

?>