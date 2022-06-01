<?php
  include_once "app/views/userViews/header.php";
  include_once "app/views/userViews/navbar.php";
?>

<section class="container mt-5 p-5">
  <h1>Error 404</h1>
  <h3>This page not found</h3>
  <div>
    <a href='<?php echo constant('URL');?>' 
    class="btn btn-outline-danger">Back</a>
  </div>
</section>

<?php include_once "app/views/userViews/footer.php"; ?>