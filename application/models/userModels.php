<?php 
 include "../system/classes/database.php";
//  include "../application/view/html.php";
class userModels extends database{
    public function mydata(){
        $name= "Ajay Varma";
        $email = "varmaajay@gmail.com";
        $password= "ajay@123";
    //    if( $this->query("INSERT INTO student(name,email,password) VALUES(?,?,?)",[$name,$email,$password])){
    //     return true;
    //    }else{
    //     return false;
    //    }
    if($this->query("SELECT * FROM student")){
    
       return $this->fetchAll();
    }
    
    
}
public function mydata1($id){
    
    if($this->query("SELECT * FROM student WHERE id= ?",[$id] )){
    
        return $this->fetch();
     }
       
}
public function updateQ($data){
    
    $name=$data['name'];
    $email=$data['email'];
    $password=$data["passowrd"];
    $id=$data["id"];
    // var_dump($id);exit;

    if($this->query("UPDATE student SET name = ?, email = ?, password = ? WHERE id=?",[$name,$email,$password,$id])){
        return true;
    }
   
}
public function deletemodel($id){
    if($this->query("DELETE FROM student WHERE id = ?",[$id])){
        return true;
    }
}
public function addstudentmodel($data){
    $name=$data['name'];
    $email=$data['email'];
    $password=$data["password"];
    // $id=$data["id"];
    // var_dump($password);exit;
    if( $this->query("INSERT INTO student(name,email,password) VALUES(?,?,?)",[$name,$email,$password])){
        return true;
       }else{
        return false;
       }
}
}

?>
<!-- INSERT INTO `student`(`name`, `email`, `password`) VALUES ('Ajay','Afgfg@GMAIL.COM','ajay@123') -->