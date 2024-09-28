<?php
//  database connection
try{
    $db = new PDO("mysql:host=localhost;dbname=gaushala","root","");
    // echo "coonection ok";
  
}catch(PDOException $e){
    die("Error: " . $e->getMessage());
}

?>