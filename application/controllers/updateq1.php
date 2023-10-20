<?php
  include "../system/classes/forview.php";
 class updateq1 extends forview{
   public function updateq(){
    $data = [
      'id' => trim($_POST['id']),
      'name' => trim($_POST['name']),
      'email' => trim($_POST['email']),
      'passowrd' => trim($_POST['passowrd']),
     
  ];
  //  var_dump($data);exit;
    $mydata=  $this->model('userModels');
    // var_dump($mydata->updateQ($data));exit;
        if($mydata->updateQ($data)){
            
             $result = $mydata-> updateQ($data);
            //  var_dump($mydata->updateQ($result));exit;
        }else{
            echo "sorry not count";
        }
      $this->view('home',$result);
      header("Location: http://localhost/MVCframework/public/userController/userMethod/");
 
      exit;
 

      
   }
  
}
?>