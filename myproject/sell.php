<?php
require("includes\common.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sell Book | BookMash</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
         <?php
        include 'includes\header.php';
        ?>
         <div class="container-fluid" id="content">
             <center> <h5> Please Add the Book Description for sell. Please read the terms and conditions for sell. </h5></center> <br>
         <div class="row">
                   <div class="container">
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                        <form  action=" " method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <input class="form-control" placeholder="Enter book name" name="name"  required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Enter Author name"   name="author" required = "true">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter Price"  name="price" required = "true">
                            </div>
                            <div class="form-group">
                                <textarea  class="form-control"  rows="4" cols="4" name="description" required = "true"> Enter Book Description 
                                </textarea>
                            </div>
                         <div class="form-group">
                             <h5 id="h51">Book Type</h5>
                             <input  type="radio"  name="booktype" value="new" id="h51"><label for="h51" id="h51"> New </label>
                             <input type="radio"  name="booktype" value="old" id="h51"><label for="h51" id="h51"> Old </label>
                            </div>
                            <div class="form-group">
                                <h5 id="h51">Select Image to Upload(jpg,jpeg,png)</h5>
                                <input  type="file"   name="filetoupload" id="filetoupload" required = "true">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
                <?php
                        if (!empty($_GET['error'])) { echo "<br><br><b class='red'>".$_GET['error']."</b>"; }
                        ?>
            </div>
         </div>
    </body>
</html>