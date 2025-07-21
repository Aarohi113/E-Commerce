<?php


include "../buyer/authguard.php";
include "../shared/connect.php";

$pdid=$_GET['pdid'];
$userid=$_SESSION['userid'];
$status=mysqli_query($conn,"insert into orders(userid) values('$userid')");

if($status){
   echo "Order Successfully";
  
}
else{
    echo mysqli_error($conn);
}




?>