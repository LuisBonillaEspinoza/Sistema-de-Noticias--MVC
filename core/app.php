<?php

  require 'config/config.php';
  
  require 'helpers/files.php';
  require 'helpers/session.php';
  
  require 'libs/database.php';
  require 'libs/controller.php';
  require 'libs/view.php';
  require 'libs/model.php';
  
  require 'router/getUrl.php';
  require 'router/router.php';
  
  $router= new Router();
  
?>