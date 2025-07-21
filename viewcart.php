<html>
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
    .place-order button{
        padding: 7px;
        background-color: lightgreen;
        border: 2px solid black;
        font-size: 23px;


    }
    .place-order button:hover{
        background-color: greenyellow;
    }

    </style>
</html>
<?php
include "../shared/connect.php";

include "../buyer/authguard.php";

$sql_result=mysqli_query($conn,"select * from cart join product1 on cart.pdid=product1.pdid ");
$total=0;
while($row=mysqli_fetch_assoc($sql_result)){
    $total+=$row['price'];
    echo 
   
    "<div class='card'>
 
         <div class='name'>$row[name]</div>
         <div class='price'>$row[price]</div>
        
         <img src='$row[impath]'>
         <div class='con'>
         <a class='cart' href='removecart.php?cartid=$row[cartid]'>Remove Item</a>
        
         </div>
        
     </div>";
 
}

echo "<hr>";
echo "<div class='place-order'>
<h1>Total Price=$total Rs</h1>
<a href='placeorder.php?pdid=$row[pdid]'>
<button>Place Order</button> 
</a>
  


</div>"




?>