<?php

include "authguard.php";

include "../shared/connect.php";
if (isset($_GET['pdid'])) {
    $pdid = $_GET['pdid'];
    $sql_result = mysqli_query($conn, "SELECT * FROM product1 WHERE pdid = $pdid");
    $product = mysqli_fetch_assoc($sql_result);
} else {
    
    header("Location: ../seller/view.php");
    die;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $newName = mysqli_real_escape_string($conn, $_POST['name']);
    $newPrice = mysqli_real_escape_string($conn, $_POST['price']);
   

    $updateQuery = "UPDATE product1 SET name='$newName', price='$newPrice' WHERE pdid = $pdid";
    $status = mysqli_query($conn, $updateQuery);

    if ($status) {
        header("Location: view.php");
       die;
    } else {
        echo "Error in updating : " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .e-form{
            width: 300px;
            height:200px;
            border:2px solid black;
            margin-left: 40%;
            margin-top: 15%;
        }
        .e-form h2{
            text-align: center;
        }
        .e-form input{
            border-radius: 3px;
            margin: 3px;
        }
        .e-form label{
            margin-left: 10px;
        }
        .allbtn{
            text-align: center;
            margin-top: 5px;
        }
        </style>
<div class="container">
    
        <div class="e-form">
        <h2>Edit Product</h2>
            <form action="" method="post">
                <div class="name">
                    <label for="name" class="">Product Name</label>
                    <input type="text" name="name"  value="<?php echo $product['name']; ?>">
                </div>
                <div class="price">
                    <label for="price" class="price">Product Price</label>
                    <input type="number" name="price"  value="<?php echo $product['price']; ?>">
                </div>
                
                <div class="allbtn">
                    <button type="submit" class="btn ">Save </button>
                    <a href="../seller/view.php" class="btn ">View</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>