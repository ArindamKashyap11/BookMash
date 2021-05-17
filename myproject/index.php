<?php
require("includes/common.php");

// Redirects the user to products page if he/she is logged in.
if (isset($_SESSION['email'])) {
  header('location: products.php');
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome | BookMash</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body style="padding-top: 50px;">
        <!-- Header -->
        <?php
        include 'includes/header.php';
        ?>
        <!--Header end-->

        <div id="content">
            <!--Main banner image-->
            <div id = "banner_image">
                <div class="container">	
                    <center>
                        <div id="banner_content">
                            <h1>Buy and Sell</h1>
                            <p>World's Best Books are found here</p>
                            <br/>
                            <a  href="products.php" class="btn btn-danger btn-lg active">Let's Start</a>
                        </div>
                    </center>
                </div>
            </div>
            <!--Main banner image end-->

            <!--Item categories listing-->
            <div class="container">
                <div class="row text-center" id="item_list">
                    <div class="col-sm-4">
                        <a href="products.php#cameras" >
                            <div class="thumbnail thumb">
                                <img src="img/cn.jpg" id="im">
                                <div class="caption">
                                    <h3>Technology</h3>
                                    <p>Always read something that will make you look good if you die in the middle of it.</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="products.php#watches" >
                            <div class="thumbnail thumb">
                                <img src="img/harry.jpg" alt="" id="im">
                                <div class="caption">
                                    <h3>Entertainment</h3>
                                    <p>Books are a uniquely portable magic</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="products.php#shirts" >
                            <div class="thumbnail thumb">
                                <img src="img/bht.jpg" alt=""  id="im">
                                <div class="caption">
                                    <h3>Knowledge</h3>
                                    <p>Reading gives us someplace to go when we have to stay where we are.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            
            <!--Item categories listing end-->
        </div>
        
        <!--Footer-->
       
        <?php
        include 'includes/footer.php';
        ?>
        <!--Footer end-->
    
    </body> 
</html>