<?php

$uname=$_POST['uname'];
$ucontact=$_POST['ucontact'];
$upass1=$_POST['upass1'];
$usertype=$_POST['usertype'];
 include "../shared/connect.php";

 $status=mysqli_query($conn,"insert into user1(username,`phone-no`,password,usertype) values('$uname','$ucontact','$upass1','$usertype')");
 if(!$status){
   echo "ERROR";
}
    
 else{
   
   echo "Registered Successfully";
  header("Location:log.html");
  exit;
}

?>