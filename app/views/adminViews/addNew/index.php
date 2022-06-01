<?php
  include_once 'app/views/adminViews/header.php';
  include_once 'app/views/adminViews/navbar.php';
?>  
    <section class="container my-5">
      <div class="row justify-content-center">
        <div class="col-md-8 card">
          <form action="<?php echo constant('URL').
          'addNew/insert';?>" method="post" class="card-body py-4"
            enctype="multipart/form-data">  
            <h4 class="text-center">Add New Notice</h4>
            
            <div>
              <select class='custom-select' name='sectionPost'>
                <option selected>Section</option>
                <option value='Politics'>Politics</option>
                <option value='Economy'>Economy</option>
                <option value='Culture'>Culture</option>
                <option value='Sports'>Sports</option>
              </select>
            </div>
            
            <input type="text" class="form-control my-3" 
             name="titlePost" placeholder="Title">
            
            <textarea class="form-control my-3" rows="3"
             placeholder="Description" name='descPost'></textarea>
             
            <div class="input-group mb-3">
              <div class="custom-file">
                <input type="file" class="custom-file-input" 
                id="inputGroupFile01" name='imagePost'
                aria-describedby="inputGroupFile"
                accept='image/*' required>
                <label class="custom-file-label" 
                for="inputGroupFile">Choose file</label>
              </div>
            </div>
            
            <input type="submit" class="btn btn-primary btn-block my-3"
             name="addNotice" value="Send"> 
          </form>
        </div>
      </div>
    </section>
<?php include_once 'app/views/adminViews/footer.php'; ?>
    
    