<?php
session_start();
if(!isset($_SESSION['login_status'])){
    echo "skipped login altogether; please login first";
    echo "<a href='login.html'>login here..</a>";
   die;
}
if($_SESSION['login_status']==false){
    echo "login again";
    echo "<a href='login.html'>login here..</a>";
    die;
}
if($_SESSION['usertype'] != 'Buyer'){
    echo "Unauthorized attempt";
    die;
}


echo "<div style='display:flex;justify-content: space-around;background-color:lightblue;color:blue;padding:10px'>
<div>$_SESSION[username]</div>
<div>$_SESSION[usertype]</div>
<div>
    <a href='../buyer/page2.php'>home</a>
    <a href='../buyer/vieworder.php'>view order</a>
</div>
</div>";

?>