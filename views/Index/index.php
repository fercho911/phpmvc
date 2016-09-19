<?php

require "./models/users.php"; 

echo ' esta es la vista index';

$users =  new users("users");



$result = $users->selectAll();
 

print_r($result."vacio");
//foreach ($result as $user){
//    
//    
//    echo "<p>".$user[id]."</p>"; 
//    
//    
//}