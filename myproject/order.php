<?php

require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
$user_id = $_SESSION['email'];
//$item_ids_string = $_GET['itemsid'];

//We will change the status of the items purchased by the user to 'Confirmed' AND item_id IN (" . $item_ids_string . ")
$query = "UPDATE cart SET status='Confirmed' WHERE email='" . $user_id . "' and status='Added to cart'";
$result = mysqli_query($con, $query) or die(mysqli_error($con));
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width = device-width, initial-scale = 1">
        <title>Success | BookMash</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <?php include 'includes/header.php'; ?>
        <div class="container-fluid" id="content">
            <div class="col-md-12">
                <div class="jumbotron">
                      <h3 align="center">Your order is confirmed. Thank you for shopping with us.</h3><hr>
                    <p align="center">Click <a href="products.php">here</a> to purchase any other item.</p>
                </div>
            </div>
            <div>
                
            </div>
        </div>
        <?php include("includes/footer.php");
        ?>
    </body>
</html>