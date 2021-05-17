<?php
require("..\includes\common.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CREATE USER | BookMash</title>
        <link href="..\css\bootstrap.css" rel="stylesheet">
        <link href="..\css\style.css" rel="stylesheet">
        <script src="..\js\jquery.js"></script>
        <script src="..\js\bootstrap.min.js"></script>
    </head>

    <body>
        <?php
        include '..\includes\adminheader.php';
                        if (!empty($_GET['error'])) { echo "<br><br><b class='red'>".$_GET['error']."</b>"; }
                        ?>
  
        <div class="container-fluid decor_bg" id="content">
             
            <div class="row">
                   <div class="container">
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                        <h2> ADMIN - CREATE USER</h2>
                        <form  action="create_script.php" method="POST">
                            <div class="form-group">
                                <input class="form-control" placeholder="Name" name="name"  required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="e-mail" required = "true">
                                      <?php 
                                if (!empty($_GET['m1'])) { echo $_GET['m1']; }
                                   ?>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" pattern=".{6,}" name="password" required = "true">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Contact" maxlength="10" size="10" name="contact" required = "true">
                                    <?php 
                                if (!empty($_GET['m2'])) { echo $_GET['m2']; }
                                   ?>
                            </div>
                         <div class="form-group">
                             <h5 id="h51">User Type</h5>
                             <input  type="radio"  name="userType" value="user" id="h51"><label for="h51" id="h51"> User </label>
                             <input type="radio"  name="userType" value="admin" id="h51"><label for="h51" id="h51"> Admin </label>
                            </div>
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="City" name="city" required = "true">
                            </div>
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="Pincode" name="pincode" required = "true">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <?php
        include '..\includes\adminfooter.php';
      ?>
</html>