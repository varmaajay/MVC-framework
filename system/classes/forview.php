<?php
    
class forview{
        public function view($viewName, $data=[]){
         if(file_exists("../application/view/".$viewName.".php")){
            require_once "../application/view/$viewName.php";
         }
        }
        public function model($modelName){
            if(file_exists("../application/models/".$modelName.".php")){
                require_once "../application/models/$modelName.php";
                return new $modelName;
            }
            else{
                echo "not find".$modelName."sorry";
            }
        }

}
?>