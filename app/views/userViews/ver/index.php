<?php
  include_once "app/views/userViews/header.php";
  include_once "app/views/userViews/navbar.php";
  require_once "app/controllers/userControllers/ver.php";
  require_once "app/models/userModels/selectModel.php";
  //agregando ando
  $selectModel= new SelectModel();
  $title = ver::fdgf();
  //LE QUITA LOS GUIONES AL TITULO Y LOS REEMPLAZA CON ESPACIOS, PARA BUSCAR EN LA BASE DE DATOS
  $title_limpio = str_replace("-"," ",$title[1]);
  $sql = $selectModel->ver_noticia($title_limpio);
  $rows = $selectModel->getData($sql); 
  error_reporting(0);
?>
<section class="container mt-5">
<hr>
  <div class="row justify-content-center">
    <form>
    <div class="col-md-10">
      <?php
      if(!empty($rows)){
        foreach($rows as $row){
      ?>
      <div>
        <h5 class="float-left"><?php echo $row['TITLE'];?></h5>
        <h4 class="float-right"><?php echo $row['SECTION'];?></h4>
        <?php
          $img = $row['IMAGE'];
          $src = "../public/img/$img";
          $array_medidas_img = redimensionar($src,150);
        ?>
        <img src="<?php echo $src; ?>" width="<?php echo $array_medidas_img[0]; ?>" $height="<?php echo $array_medidas_img[1]; ?>">
        <p><?php echo $row['DESCRIPTION'];?></p>
        <p><?php echo $row['DATE'];?></p>
        <hr>
      </div>
      <?php 
        } 
      } else {
        echo '<p>No results</p>';
      } 
      ?>
    </div>
    </form>
  </div>
</section>
<?php include_once "app/views/userViews/footer.php"; ?>