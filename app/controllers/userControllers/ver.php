<?php

class Ver extends Controller {
  
  public function __construct(){
    parent::__construct();  
    $this->view->renderUser('ver/index');
  }
  //FUNCION PARA OBTENER EL TITULO DE LA NOTICIA, USANDO LA URL QUE SE CREA
  public static function fdgf(){
    $url= isset($_GET['url']) ? $_GET['url']: null;
    $url= trim($url, '/');
    $url= explode('/', $url);
    return $url;
  }

}
  
?>