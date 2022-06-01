<?php

class NewsList extends Controller {
  
  public function __construct(){
    parent::__construct();
  }
  
  public function view(){
    $this->view->renderAdmin('newsList/index');
  }
  
  public function delete(){
    $id= $_GET['ID'];
    if(!isset($_GET['ID'])){
      header('location: '.constant('URL').'newsList/view');
    }
    
    $model= $this->requireModelAdmin('DeleteModel');
    $model->deleteNew($id);
  }
  
  public function edit(){
    $this->view->renderAdmin('editForm/index');
    if(!isset($_GET['ID'])){
      header('location: '.constant('URL').'newsList/view');
    }
  }
  
  public function update(){
    $id= $_GET['ID'];
    $section= $_POST['sectionPost'];
    $title= $_POST['titlePost'];
    $desc= $_POST['descPost'];
    $dates= [
      'section' => $section,
      'title' => $title,
      'desc' => $desc,
      'id' => $id
    ];
    
    $model= $this->requireModelAdmin('EditModel');
    $model->editNew($dates);
  }
  
}

?>