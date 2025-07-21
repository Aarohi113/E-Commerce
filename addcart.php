<?php


include "../Buyer/authguard.php";
include "../shared/connect.php";
// $userid=$_SESSION['userid'];
$pdid=$_GET['pdid'];
$userid=$_SESSION['userid'];
$status=mysqli_query($conn,"insert into cart(userid,pdid) values('$userid','$pdid')");

if($status){
   echo " Added to cart Successfully";
    header("Location:page2.php");
}
else{
    echo mysqli_error($conn);
}

?>