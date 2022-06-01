<?php

class addNew extends Controller {
  
  public function __construct(){
    parent::__construct();  
    $this->view->renderAdmin('addNew/index');
  }
 
  public function insert(){
    $imgPost= $_FILES['imagePost'];
    $section= $_POST['sectionPost'];
    $title= $_POST['titlePost'];
    $desc= $_POST['descPost'];
    $date= date('Y-m-d H:i:s');
    
    $imageClass= $this->requireModelAdmin('exportImage');
    $img= $imageClass->imageVal($imgPost);
    $dates= [
      'section' => $section,
      'title' => $title,
      'desc' => $desc,
      'image' => $img,
      'date' => $date
    ];
    $model= $this->requireModelAdmin('InsertModel');
    $model->insertNew($dates);
  }  
}

?>