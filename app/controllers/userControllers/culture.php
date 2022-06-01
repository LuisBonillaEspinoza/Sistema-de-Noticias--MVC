<?php

class Culture extends Controller {
  
  public function __construct(){
    parent::__construct();  
    $this->view->renderUser('culture/index');
  }
  
}

?>