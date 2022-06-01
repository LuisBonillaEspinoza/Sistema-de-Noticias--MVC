<?php

class Politics extends Controller {
  
  public function __construct(){
    parent::__construct();  
    $this->view->renderUser('politics/index');
  }
  
}

?>