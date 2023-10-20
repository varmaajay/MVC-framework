<?php
  include "../system/classes/forview.php";
 class userController extends forview{
     public function index(){
          echo "This is usercontroller";
     }
     public function userMethod(){
        // $myData=[
        //    'title'=> "This is title",
        //     'body'=> "This is body"

        // ];
        
        $mydata=  $this->model('userModels');
        if($mydata-> mydata()){
            // echo "successfully registered"."<br/>";
             $result = $mydata-> mydata();
        }else{
            echo "sorry not count";
        }
        $this->view('html',$result); 
        // redir    ect('html');
       
        // echo $mydata-> mydata();
     } 
     public function delete($id){

        $mydata=  $this->model('userModels');
        // var_dump($mydata->updateQ($data));exit;
            if($mydata->deletemodel($id)){
                
                 $result = $mydata-> deletemodel($id);
                //  var_dump($mydata->updateQ($result));exit;
            }else{
                echo "sorry not count";
            }
          $this->view('home',$result);
          header("Location: http://localhost/MVCframework/public/userController/userMethod/");
     
          exit;

     }
     public function addfrom(){
        $this->view('addstudent'); 
     }
     public function addstudent(){
        
            $data = [
                // 'id' => trim($_POST['id']),
                'name' => trim($_POST['name']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
               
            ];           
        //  var_dump($data);exit;
         //  var_dump($data);exit;
    $mydata=  $this->model('userModels');
    // var_dump($mydata->updateQ($data));exit;
    $result = $mydata-> addstudentmodel($data);
        if(!$result){
            echo "sorry not count";
        }
      $this->view('home',$result);
      header("Location: http://localhost/MVCframework/public/userController/userMethod/");
 
      exit;
 

      
   }
      
     }
     
    
 
 ?>