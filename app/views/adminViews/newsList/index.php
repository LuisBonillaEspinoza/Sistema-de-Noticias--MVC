<?php
  include_once 'app/views/adminViews/header.php';
  include_once 'app/views/adminViews/navbar.php';
  
  include_once 'app/models/adminModels/selectModel.php';
  $model= new SelectModel();
  $sql= $model->select();
  $rows= $model->getData($sql);
?>
<div class="container">
  <div class="card-columns">
    <?php
      if(!empty($rows)){
        foreach($rows as $row){
    ?>
    <div class="card my-2 p-4">
      <div>
        <p><strong>Id: </strong>
        <?php echo $row['ID']; ?></p>
      </div>
      <div>
        <p><strong>Section: </strong>
        <?php echo $row['SECTION']; ?></p>
      </div>
      <div>
        <p><strong>Title: </strong>
        <?php echo $row['TITLE']; ?></p>
      </div>
      <div>
        <p><strong>Description.Lenght: </strong>
        <?php echo strlen($row['DESCRIPTION']); ?></p>
      </div>
      <div>
        <p><strong>Date: </strong>
        <?php echo $row['DATE']; ?></p>
      </div>
      <div>
        <a href="<?php echo constant('URL').'newsList/delete?ID='. 
        $row['ID']; ?>" class="btn btn-danger">Delete</a>
      </div>
      <div>
        <a href="<?php echo constant('URL').'newsList/edit?ID='. 
        $row['ID']; ?>" class="btn btn-success">Edit</a>
      </div>
    </div>
    <?php 
        }
      } else {
        echo 'No results!';
      } 
    ?>
  </div>
</div>
<?php include_once 'app/views/adminViews/footer.php'; ?>