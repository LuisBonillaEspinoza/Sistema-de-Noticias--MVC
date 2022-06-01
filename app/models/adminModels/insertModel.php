<?php

class InsertModel extends Model {

  public function __construct(){
    parent::__construct();
  }
  
  public function insertNew($dates){
    try{
      $sql= 'INSERT INTO NOTICES (SECTION, TITLE, DESCRIPTION,
        IMAGE, DATE) VALUES (:Sect, :Title, :Desc, :Img, :Date)';
      
      $query= $this->db->prepare($sql);
      $query->execute([
        'Sect' => $dates['section'],
        'Title' => $dates['title'],
        'Desc' => $dates['desc'],
        'Img' => $dates['image'],
        'Date' => $dates['date'],
      ]);
      
    }catch(PDOException $e){
      echo 'Error DB: '.$e->getMessage();
    }
  }
  
}

?>