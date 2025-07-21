<?php
$name=$_POST['name'];
$price=$_POST['price'];
$userid=$_SESSION['userid'];
$source_path=$_FILES['pdtimg'] ['tmp_name'];
$target_path= "../intern img/img url" . $_FILES['pdtimg'] ['name'];

$userid=$_SESSION['userid'];
move_uploaded_file($source_path,$target_path);
include "../shared/connect.php";

$status=mysqli_query($conn,"insert into product1(`name`,`price`,`impath`,`owner`) values('$name','$price','$target_path','$userid')");

if(!$status){
    echo "ERROR";
 }
     
  else{
    
    echo "uploaded Successfully";
    header("location:../seller/view.php");
  }
 

?>