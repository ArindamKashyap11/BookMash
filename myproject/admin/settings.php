<?php
require_once("../includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: admin.php');
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Settings | BookMash</title>
        <link href="../css/bootstrap.css" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">
        <script src="../js/jquery.js"></script>
        <script src="../js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php include '../includes/adminheader.php'; ?>
        <div class="container-fluid" id="content">
            <?php
                 $query = "SELECT name FROM userdetails WHERE email='$_SESSION[email]'";
                 $result = mysqli_query($con, $query)or die($mysqli_error($con));
                 $row = mysqli_fetch_array($result);
            echo "<h4> Hi $row[name]. </h4>";
             ?>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4" id="settings-container">
                    <h4>Change Password</h4>
                    <form action="settings_script.php" method="POST">
                        <div class="form-group">
                            <input type="password" class="form-control" name="old-password"  placeholder="Old Password" required = "true">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="New Password" required = "true">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password1"  placeholder="Re-type New Password" required = "true">
                        </div>
                        <button type="submit" class="btn btn-primary">Change</button>
                        <?php
                        echo "<br><br><b class='red'>" . $_GET['error'] . "</b>";
                        ?>
                    </form>
                </div>
            </div>
        </div>
        <?php include("../includes/adminfooter.php"); ?>
    </body>
</html>