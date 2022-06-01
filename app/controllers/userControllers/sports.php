<?php

class Sports extends Controller {
  
  public function __construct(){
    parent::__construct();  
    $this->view->renderUser('sports/index');
  }
  
}

?>