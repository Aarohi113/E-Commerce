<html>
<head>
   <style>
    .card{
        width: 300px;
        height: 300px;
        background-color: aquamarine;
        display: inline-block;
        margin: 10px;
        padding: 10px;
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
    }
    .price::after{
        content: "Rs";
    }
    .btn{
        border: 2px solid black;
        margin-top: 9px;
        text-decoration: none;
        color: black;
        background-color: white;
        padding: 4px;
    }
   </style>
</head>
<body>
    

</body>
</html>



<?php



include "authguard.php";

include "../shared/connect.php";
$userid=$_SESSION['userid'];
$sql_result=mysqli_query($conn,"select * from product1 where owner=$_SESSION[userid]  ");
//DB_CURSOR
while($row=mysqli_fetch_assoc($sql_result)){
   
   echo "<div class='card'>
        <div class='name'>$row[name]</div>
        <div class='price'>$row[price]</div>
        <img src='$row[impath]'>
        <div>
        <a href='edit.php?pdid=$row[pdid]'>
                    <button class='btn' >Edit</button>
                    </a>
                    <a href='dlt.php?pdid=$row[pdid]'>
                        <button class='btn'>Delete</button>
                    </a>
                </div> 
        </div>
       
    </div>";

}


?>
