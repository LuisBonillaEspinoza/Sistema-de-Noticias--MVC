<?php

class Model {
  
  public function __construct(){
    $dbClass= new Database();
    $this->db= $dbClass->conn();
  }
}

?>