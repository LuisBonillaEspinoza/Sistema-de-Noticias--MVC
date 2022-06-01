<?php
class Files {

  public function fileDefault($pag){
    $rute= 'app/controllers/'.$pag.'.php';
    return $rute;
  }
  
  public function fileUser($pag){
    $rute= 'app/controllers/userControllers/'.$pag.'.php';
    return $rute;
  }
  
  public function fileAdmin($pag){
    $rute= 'app/controllers/adminControllers/'.$pag.'.php';
    return $rute;
  }
  
}

?>