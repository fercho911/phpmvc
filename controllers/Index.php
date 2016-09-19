<?php

class Index extends Controller {
   
    function __construct() {
        parent::__construct();
    }

        public function index(){
            $this->view->render($this,"index");
        
    }
    
    
    public function indexdos(){
        
        $this->view->render($this,"indexdos");
        
    }
    
    
}
