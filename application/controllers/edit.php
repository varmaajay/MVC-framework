<?php
  include "../system/classes/forview.php";
 class edit extends forview{
   public function upadate($id){
        //  print_r($id);
    $mydata=  $this->model('userModels');
   
        if($mydata-> mydata1($id)){
           
             $result = $mydata-> mydata1($id);
            //  echo "sorry not couasasasnt";
        }else{
            echo "sorry not count";
        }
      $this->view('upadate',$result);
      
   }
}
?>
 