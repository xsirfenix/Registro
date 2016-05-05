<?php

  #Incluimos el archivo core
  require('Core/core.php');

  if (isset($_GET['view'])) {
    # code...
    //Verificamos si existe el archivo
    if (file_exists('Core/Controller/' . strtolower($_GET['view']) . 'Controller.php')) {
      # code...
      #Si existe el archivo lo mandamos llamar
      include('Core/Controller/' . strtolower($_GET['view']) . 'Controller.php');
    }else {
      # code...
      #Si no existe nos llama el error
      include('Core/Controller/errorController.php');
    }
  }else {
    # code...
    include('Core/Controller/indexController.php');
  }
 ?>
