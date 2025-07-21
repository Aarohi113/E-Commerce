<?php
include "../buyer/authguard.php";

include "../shared/connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>vieworder</title>
</head>
<style>
    .order{
        border: 2px solid black;
        display: inline-block;
    }
    .order h5{
        text-align: center;
        
    }
    .order p{
        font-size: 24px;
        color: red;
    }
</style>
<body>

<div >
    <?php
    $userid = $_SESSION['userid'];
    $sql_result = mysqli_query($conn, "SELECT * FROM cart JOIN product1 ON cart.pdid = product1.pdid WHERE userid = $userid");

    $total = 0;

    while ($row = mysqli_fetch_assoc($sql_result)) {
        $total += $row['price'];
        ?>
        <div >
            <div class="order" >
            <div >
                <h3 ><?php echo $row['name']; ?></h3>
               
                <p ><small >Price: Rs<?php echo $row['price']; ?></small></p>
                <a href=".php?pid=<?php echo $row['pdid']; ?>" >More details</a>
                <a href="../Buyer/cancelorder.php?pdid=<?php echo $row['pdid']; ?>" >Cancel order</a>

            </div>
                <div >
                    <img src="<?php echo $row['impath']; ?>"  alt="<?php echo $row['name']; ?>">
                </div>
                
                
            </div>
        </div>
        <?php
    }
    ?>

    <div >
        <?php if ($total > 0): ?>

            
        <?php else: ?>
            <p>No products in the cart.</p>
        <?php endif; ?>
    </div>
</div>

</body>
</html>