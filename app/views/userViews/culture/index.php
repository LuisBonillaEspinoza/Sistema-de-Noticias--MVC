<?php
  include_once "app/views/userViews/header.php";
  include_once "app/views/userViews/navbar.php";

  include_once 'app/views/userViews/url_amigable.php';

  require_once "app/models/userModels/selectModel.php";
  $selectModel= new SelectModel();
  $sql= $selectModel->selectWhere('Culture');
  $rows= $selectModel->getData($sql);
  
?>
<section class="container mt-5">
  <div>
	  <h3>Recent News - Culture</h3>
	</div><hr>
  <div class="row justify-content-center">
    <form method="post">
    <div class="col-md-10">
      <?php
      if(!empty($rows)){
        foreach($rows as $row){
      ?>
      <div>
        <?php echo $row['TITLE'];?>
        <img src="public/img/<?php echo $row['IMAGE'];?>">
        <p><?php echo $row['DESCRIPTION'];?></p>
        <p><?php echo $row['DATE'];?></p>
        <hr>
        <a href="noticehes/politics/<?php url_amigable($row['TITLE']);?>/">Ver Mas</a>
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