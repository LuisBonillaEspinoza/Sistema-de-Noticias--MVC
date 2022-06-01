<?php
  include_once 'app/views/adminViews/header.php';
  include_once 'app/views/adminViews/navbar.php';
  
  include_once 'app/models/adminModels/selectModel.php';
  $model= new SelectModel();
  $sql= $model->select();
  $rows= $model->getData($sql);
?>
<section class="container mt-5">
  <div>
	  <h3>Recent News - Home</h3>
	</div><hr>
  <div class="row justify-content-center">
    <div class="col-md-10">
      <?php
      if(!empty($rows)){
        foreach($rows as $row){
      ?>
      <div>
        <h5 class="float-left"><?php echo $row['TITLE'];?></h5>
        <h4 class="float-right"><?php echo $row['SECTION'];?></h4>
        <img src="public/img/<?php echo $row['IMAGE'];?>">
        <h6>ID: <?php echo $row['ID'];?></h6>
        <p><?php echo $row['DESCRIPTION'];?></p>
        <p><?php echo $row['DATE'];?></p>
        <hr>
      </div>
      <?php 
        } 
      } else {
        echo 'No results!';
      } 
      ?>
    </div>
  </div>
</section>
<?php include_once 'app/views/adminViews/footer.php'; ?>