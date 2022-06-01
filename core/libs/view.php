<?php

class View {
  
  public function render($name){
    require_once 'app/views/'.$name.'.php';
  }
  
  public function renderUser($name){
    require_once 'app/views/userViews/'.$name.'.php';
  }
  
  public function renderAdmin($name){
    require_once 'app/views/adminViews/'.$name.'.php';  
  }
}

?>