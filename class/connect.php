<?php
class connect{
    function ketnoi(){
        $conn = new mysqli("localhost", "root", "", "game");

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 
           return $conn;
        }    
    }
?>