<?php
try{
    $conn=new mysqli("localhost","root","","acme23_sep",3306);
    if($conn->connect_error){
        echo "connection error";
        die;
    }
}
    catch(exception $err){
           print_r($err);
    }

?>