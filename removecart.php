<?php
include "../buyer/authguard.php";
include "../shared/connect.php";

$cartid=$_GET['cartid'];

$status=mysqli_query($conn,"delete from cart where cartid=$cartid");
if($status){
    echo "Cart removed successfully";
    header("location:viewcart.php");
}
else{
    echo mysqli_error($conn);
}

?>