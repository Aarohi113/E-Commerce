<?php



include "authguard.php";
include "../shared/connect.php";
$pdid=$_GET['pdid'];

$status=mysqli_query($conn,"delete from product1 where pdid=$pdid");
if($status){
    echo "Product deleted successfully!";
   
}
else{
    echo "Error while deleting the product";
    echo mysqli_error(($conn)); 
}
?>


