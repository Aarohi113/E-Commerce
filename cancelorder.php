<?php
include "../buyer/authguard.php";
include "../shared/connect.php";

$orderid=$_GET['orderid'];

$status=mysqli_query($conn,"delete from orders where orderid=$orderid");
if($status){
    echo "Cart removed successfully";
  
}
else{
    echo mysqli_error($conn);
}

?>