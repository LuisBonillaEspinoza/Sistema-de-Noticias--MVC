<?php

class Buscar extends Controller {
  
  public function __construct(){
    parent::__construct();  
    $this->view->renderUser('buscar/index');
  }

  public function busqueda(){
      $dato= $_POST['busqueda'];
      return $dato;
  }
}
  
?>