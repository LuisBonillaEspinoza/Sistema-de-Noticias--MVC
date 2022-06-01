<?php

class SelectModel extends Model {

  public function __construct(){
    parent::__construct();
  }
  
  public function select(){
    $sql= 'SELECT * FROM NOTICES';
    return $sql;
  }
  public function selectWhere($id){
    $sql= 'SELECT * FROM NOTICES WHERE ID="'.$id.'"';
    return $sql;
  }
  
  public function getData($sql){
    try{
      $data= null;
      
      if($consult= $this->db->query($sql)){
        while($row= $consult->fetch(PDO::FETCH_ASSOC)){
          $data[]= $row;
        }
      }
      return $data;
      
    }catch(PDOException $e){
      echo 'Error DB: '.$e->getMessage();
    }
  }
  
}

?>