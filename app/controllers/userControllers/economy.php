<?php

class Economy extends Controller {
  
  public function __construct(){
    parent::__construct();  
    $this->view->renderUser('economy/index');
  }
  
}

?>