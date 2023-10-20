<?php
  

  spl_autoload_register(function(){
      include "classes/route.php";
 
  });
  $route = new route;
  ?>