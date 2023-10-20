<?php
   
  //defult controller, method, parametre
  
  
  class route {
    public $controller = "welcome";
    public $method  = "index";
    public $parama= [];


    public function __construct(){
      $url  = $this->url();
      if(isset($url)){
        if(file_exists("../application/controllers/".$url[0].".php")){
             $this->controller = $url[0];
            //  echo "/Hello";
             unset($url[0]);
        }else{
          echo "controller not found";
        }
        require_once "../application/controllers/". $this->controller.".php";
        $this->controller = new $this->controller;
        // print_r( $this->controller);
      }
      if(isset($url) && isset($url[1])){
        if(method_exists($this->controller,$url[1])){
          $this->method = $url[1];
        
          unset($url[1]);
            
        }
        else{
          echo "this ".$url[1]." not found";
        }
      }
      if(isset($url)){
          $this->parama  = $url;
          // print_r($this->parama);
      }else{
        $this->parama = [];
      }
      call_user_func_array([$this->controller,$this->method], $this->parama);
     
    }
    public function url(){
      if(isset($_GET['url'])){
      $url = $_GET['url'];
      $url = rtrim($url);
      $url= explode("/", $url);
      return $url;
     }
    }
  }
  ?>