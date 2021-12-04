<?php
require ('WS2/client.php');

class Book {


    public function getInfo($name, $operation){
        
        $result = getInfo($name, $operation);
        return $result;

    }
    
}

?>