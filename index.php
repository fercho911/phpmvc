        <?php

        //import global variabless    
        include_once './config/global.php'; 

        //import class from libs if they are require 
            spl_autoload_register(function($class){
            if(file_exists(LIBS.$class.".php")){
            require LIBS.$class.".php";
            }
            });

      //verify  if Url is setted, and if this is not set,it  sets the url in default action index        $url  = isset($_GET["url"]) ? $_GET["url"] : "Index/index";
      //the url is an array and it's separated into 3 variables
      //     
      //print_r($_GET["url"]."lleno");




       //$url =((isset($u))) ? $_GET("url"): "Index/index" ;
       if(isset($_GET["url"])) {

          $url= $_GET["url"];
     //     print_r($url);
      }

      else{

        $url= "Index/index" ;
         // print_r("url");
      }



      if(isset($url)){
              $url = explode("/", $url);
             // print_r($url);


        }


    //set the variable $controller 
            if(isset($url[0])){
             $controler = $url[0];



            }
    //set the variable $method
            if(isset($url[1])){
             if($url[1] != ""){    
                 $method =$url[1];
            }
            }
    //set the variable $params 

            if(isset($url[2])){
               if($url[2] != ""){ 
             $params = $url[2];
             }
             }


             //verify if  the  controller's file exist  and create the new class

          $path = "./controllers/".$controler.".php";

           if(file_exists($path)){

           require $path;

           $controler = new $controler();
        }


        //echo  method_exists($controler,$method);
        //verify if the method exists, if the url have params 

        if(isset($method)){

            if(method_exists($controler,$method)){
            //if the method exists and have params, execute the method               
                if(isset($params)){
                      $controler->{$method}($params);  

                    }
            else {

             //if have not  any param, only execute the method      
                $controler->{$method}();
                }
            }

         else {
             //if have not any controller or method the default it's index controller and index action  
             $controler->index();  
            }

        }
         else {
             //if the controller doesn't exists throws error;
             echo "error the controller doesn't exist";    
        }



