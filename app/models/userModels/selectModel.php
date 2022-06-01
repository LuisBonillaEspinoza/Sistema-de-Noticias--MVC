<?php

class SelectModel extends Model {

  public function __construct(){
    parent::__construct();
  }
  
  public function select(){
    $sql= 'SELECT * FROM NOTICES';
    return $sql;
  }
  public function selectWhere($sect){
    $sql= 'SELECT * FROM NOTICES WHERE SECTION="'.$sect.'"';
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
  //OBTIENE EL TITULO,
  public function ver_noticia($title){
    $sql = "SELECT * FROM NOTICES WHERE TITLE ='".$title."'";
    return $sql;
  }

  //OBTIENE LA DESCRIPCION
  public function buscar_noticia($dato){
    $sql = "SELECT * FROM NOTICES WHERE DESCRIPTION OR TITLE LIKE '%" . $dato . "%'";
    return $sql;
  }

}

?>