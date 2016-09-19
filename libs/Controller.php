<?php


class Controller {
   
    
    
    
    function __construct() {
        Session::init();
        $this->view = new Views();
//        $this->loadModel();
    }
    
    
//    public function loadModel(){
//        
//        $model = get_class($this);
//        $path  = 'models/'.$model.'.php';
//      
//        if(file_exists($path)){
//            require $path;
//          
//          
//      }          
//        
//    }
    
    
    
    
}
