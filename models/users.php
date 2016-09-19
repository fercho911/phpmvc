<?php


class users  extends Model{
    
    
    public function __construct($table) {
        parent::__construct($table);
        
    }
    
    function selectAll(){
       
        $result = parent::selectAll();
        return $result;
    }
}
