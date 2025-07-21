<html>
<head>
   <style>
    .card{
        width: 300px;
        height: 300px;
        background-color: beige;
        display: inline-block;
        margin: 10px;
        padding: 10px;
        border: 2px solid black;
    }
    img{
        width: 100%;
        height: 70%;
    }
    .name{
        font-size: 24px;
    }
    .price{
        font-size: 26px;
        font-weight: bold;
        color: brown;
    }
    .price::after{
        content: "Rs";
    }
    .cart{
        text-decoration: none;
        border: 2px solid black;
        background-color: yellow;
        color: black;
        font-size: 18px;
        padding: 2px;

    }
    .con{
        align-items: center;
        margin-left: 35%;
        margin-top: 10px;
        
    }
    .cart:hover{
        background-color: goldenrod;
    }
   </style>
</head>
<body>
    

</body>
</html>



<?php
$startpdid=17;
$endpdid=18;

include "connect.php";
$sql_result=mysqli_query($conn,"select * from product1 where pdid between $startpdid and $endpdid");

//DB_CURSOR
while($row=mysqli_fetch_assoc($sql_result)){
    // print_r($row);
    // echo "<br>";
     
   echo 
   
   "<div class='card'>

        <div class='name'>$row[name]</div>
        <div class='price'>$row[price]</div>
       
        <img src='$row[impath]'>
        <div class='con'>
        <a class='cart' href='../buyer/addcart.php?pdid=$row[pdid]'>Add to Cart</a>
       
        </div>
       
    </div>";

}


?>

