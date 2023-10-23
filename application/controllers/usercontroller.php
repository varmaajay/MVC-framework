<?php
  include "../system/classes/forview.php";
  include "../application/helper/session_start.php";
  include "../application/helper/url.php";
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
            //  var_dump($result);exit;
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
     public function register(){
        $this->view('addstudent'); 
     }

     public function login(){
        // $mydata=  $this->model('userModels');
        // $result = $mydata-> mydata();
        $this->view('login');
     }
     public function loginpage(){
        // if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            // process form
            // $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING); 
            $data = [
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                
            ];
 
             //validate email
            //  if(empty($data['email'])){
            //      $data['email_err'] = 'Please enter email';
            //  }
 
             //validate password 
            //  if(empty($data['password'])){
            //      $data['password_err'] = 'Please enter your password';
            //  }elseif(strlen($data['password']) < 6){
            //      $data['password_err'] = 'Password must be atleast six characters';
            //  }
             
             //make sure error are empty
            //  if(empty($data['email_err']) && empty($data['password_err'])){
                //  $loggedInUser = $this->userModels->login($data['email'], $data['password']);
                $mydata=  $this->model('userModels');
          
                
                    $result = $mydata->login($data);
                    var_dump($result);exit;
                   //  var_dump($mydata->updateQ($result));exit;
               
               
                //  if($result){
                //      //create session
                //     //  $this->createUserSession($result);
                //  }else{
                //     //  $data['password_err'] = 'Password incorrect';
                //      $this->view('userController/login', $result);
                //  }
             
 
      
     }
     public function home(){
        $this->view('home');
     }
     public function about(){
        $this->view('about');
     }
     public function addstudent(){
        
            $data = [
                // 'id' => trim($_POST['id']),
                'name' => trim($_POST['name']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
               
            ];           
        //  var_dump($data);exit;
        $mydata=  $this->model('userModels');
        // var_dump($mydata->updateQ($data));exit;
        $result = $mydata->addstudentmodel($data);
        //  var_dump($result);exit;
        if($result){
            // $this->view('html',$result);
            flash('register_success', 'you are registerd you can login now');
                    // var_dump(flash("ssdssd"));exit;
            redirect('userController/login');
            
         }
      }
      public function createUserSession($user){
        $_SESSION['id'] = $user->id;
        $_SESSION['name'] = $user->name;
        $_SESSION['email'] = $user->email;
        redirect('view/html');
    }

   
}

     
    
 
 ?>