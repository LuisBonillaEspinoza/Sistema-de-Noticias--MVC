<?php

class ExportImage {
  
  public function imageVal($img){
    //$img = $_FILES['imagePost']
    $name= $img['name'];
    $type= $img['type'];  
    $size= $img['size'];
    
    $fold= constant('FOLDERIMAGES').'public/img/';
  
    if($size<=3400000){
    
      if($type=='image/jpeg' || $type=='image/jpg' || 
         $type=='image/png' || $type=='image/gif'){
       
        $destin= $_SERVER['DOCUMENT_ROOT']. $fold;
    
        move_uploaded_file($img['tmp_name'],                            
                         $destin. $name);
        return $name;
        
      } else {
        echo '<script>alert("Error Image")</script>
              <a href="'.constant('URL').'addNew" 
              class="btn btn-outline-primary">BACK</a>';
      }
    } else {
      header('location: '.constant('URL').'addNew');
    }
  
  }

}


?>
