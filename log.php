<?php

 session_start();
 $_SESSION['login_status']=false;
$uname=$_POST['uname'];
$upass1=$_POST['upass1'];

// $conn=new mysqli("localhost","root","","acme23_sep",3306);
include "connect.php";
$sql_result=mysqli_query($conn,"select * from user1 where username='$uname' and password='$upass1'");

$row=mysqli_fetch_assoc($sql_result);
$rows=mysqli_num_rows($sql_result); 
 
if($rows>0){
    echo "login successful";
    $_SESSION['login_status']=true;
        $_SESSION['usertype']=$row['usertype'];
        $_SESSION['username']=$row['username'];
        $_SESSION['userid']=$row['userid'];


    if($row['usertype']==='Seller'){
        
         header("location: ../seller/page2.php");
    }
    else if($row['usertype']==='Buyer'){
    $_SESSION['login_status']=true;
         header("location: ../buyer/page2.php");
    }
}
else{
    echo "invalid credentials";
}


?>
