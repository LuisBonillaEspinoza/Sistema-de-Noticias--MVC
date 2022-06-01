<?php
  include_once "app/views/userViews/header.php";
  include_once "app/views/userViews/navbar.php";
  require_once "app/controllers/userControllers/buscar.php";

  $bus = new Buscar();

  $dato = $bus->busqueda();

  require_once "app/models/userModels/selectModel.php";
  $selectModel= new SelectModel();
  $sql= $selectModel->buscar_noticia($dato);
  $rows= $selectModel->getData($sql);
?>

  <section class="container mt-5">
  <div>
	<h3>Recent News - Home</h3>
	</div><hr>
  <form method="post" action=<?php echo constant('URL')?>buscar/>
  <input type="text" name="busqueda">
  <input type="submit" name="enviar">
</form>
  <?php
      if(!empty($rows)){
        foreach($rows as $row){
      ?>
      <?php 
      $title = $row['TITLE'];
      ?>
      <input value="<?php echo  $row['TITLE'];?>" type="text" hidden>
  <div class="row justify-content-center">
    <div class="col-md-10">
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
        <a href="<?php echo constant('URL')?>ver/<?php echo url_amigable($title);?>">Ver Mas</a>
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
  </div>
</section>
<?php include_once "app/views/userViews/footer.php"; ?> 