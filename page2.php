<?php
include "../buyer/authguard.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Webpage Title</title>

    <style>
        body {
            margin: 0;
            padding: 0;
           font-family: Arial, sans-serif;
          
        }
        .home{
            background-image: url("../intern img/women bg2.jpg");
            height: 100vh;
           background-size: cover;

        }

        

        .navbar {
            background-color: transparent;
            width: 100%;
        }

        .navbar ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            /* justify-content: space-between; */
            width: 100%;
        }

        .navbar a {
            display: block;
            color:rgb(139, 0, 0) ;
            padding: 14px 16px;
            text-decoration: none;
            font-weight: bold;
            font-size: 19px;
           
            

        }
        .navbar li {
            margin-left: 20%;
        }
        .navbar li a:hover{
            color: black;
            cursor:pointer;
        }
        .s-bar{
           margin-left: 20%;
           margin-top: 3%;
          
           
        }
        .s-bar input{
            padding: 15px;
            width: 55%;
            border-radius: 8px;
            border: none;
            font-size: 17px;
        }
        .s-bar button{
        padding:10px ;
        border-radius: 8px;
        border: none;
        background-color: rgb(116, 177, 157);
        font-size: 17px;

        }
        .s-bar  button:hover{
            background-color: aquamarine;
            cursor: pointer;
        }
        .s-bar select{
            padding: 12px;
            width:10%;
            border: none;
            border-radius: 8px;
            font-size: 17px;
        }
        .s-bar span:hover{
            color: chocolate;
            cursor: pointer;
           
        }
        .cart{
            font-size: 25px;
            border-radius: 4px;
            border: none;
            text-decoration: none;
            color: black;

        }
        .cart:hover{
            cursor: pointer;
            color: blue;
        }
        .title{
            text-align: center;
            font-family:Georgia, 'Times New Roman', Times, serif;
            font-size: 23px;
            color: rgb(10, 23, 113);
           
        }
        .container{
            text-align: center;
            margin-top: 115px;
            font-size: 37px;
           color:rgb(217, 160, 45);
            width: 800px;
            margin-left: 27%;
            
        }
        .sec-1 h3{
            text-align: center;
            color:black;
            font-size: 35px;
            background-color: white;
            
        }
        .btn:hover{
            background-color: rgb(69, 40, 96);
            font-weight: bold;
            cursor: pointer;
        }
        .btn{
            margin-left: 47%;
             padding: 15px; 
             width:10%; 
             background-color:darkviolet; 
             color: white; 
             font-size: 23px; 
             border-radius: 10px;
             border: none;
        }
        footer{
        background-color: black;
       color: white;
       padding: 12px;
       text-align: center;
       margin-top: 15px;
    }
    .out{
        align-items: center;
        margin-top: 10px;
        margin-left: 49%;
    }
    .lout{
        text-decoration: none;
        border: 2px solid black;
        padding: 5px;
        background-color:red;
        color: white;
    }
    </style>
</head>
        <body>
    <div class="home">
        <header>
            <nav class="navbar">
                <ul>
                    <li><a href="../shared/buymen.php">MEN</a></li>
                    <li><a href="../shared/buywomen.php">WOMEN</a></li>
                    <li><a href="../shared/buyele.php">ELECTRONIC</a></li>
                </ul>
            </nav>
        </header>
        <div class="title">
            <h2>Shopping World</h2>
        </div>
       <div class="s-bar">
        <select name="categoryselect" id=""><option value="" label="All Categories"></option><option value="" label="men" >Men</option><option value="" label="women">Women</option><option value="" label="electronics">Electronics</option></select>
        <select name="languageselect" id="" data-uia="language-picker-header"><option value="en-IN" lang="en" label="English">English</option><option value="hi-IN" lang="hi" label="हिंदी">हिंदी</option></select>
        <input type="text" placeholder="Search Your Fav Brand">
        <button type="submit"> Search</button>
        <a class="cart" href="viewcart.php">&#128722;Cart</a>
       </div>
   
    <div class="container">
        <h1 class="runtext">GET  START YOUR FAVORITE SHOPPING </h1>
    </div>
    
    <button class="btn" >
        Buy Now
    </button>
</div>
<div class="out">
    <a class="lout" href="../shared/page1.html">Logout</a>
</div>
<footer>
        @Copyrights Terms and Conditions
    </footer>
</body>
</html>
