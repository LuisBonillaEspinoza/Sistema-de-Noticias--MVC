<?php

class EditModel extends Model {

  public function __construct(){
    parent::__construct();
  }
  
  public function editNew($dates){
    try{
      $sql= 'UPDATE NOTICES SET SECTION= :Sect, TITLE= :Title,  
          DESCRIPTION= :Desc WHERE ID= :Id';
      
      $query= $this->db->prepare($sql);
      $query->execute([
        'Sect' => $dates['section'],
        'Title' => $dates['title'],
        'Desc' => $dates['desc'],
        'Id' => $dates['id']
      ]);
      header('location: '.constant('URL').'newsList/view');
      
    }catch(PDOException $e){
      echo 'Error DB: '.$e->getLine();
    }
  }
  
}

?>