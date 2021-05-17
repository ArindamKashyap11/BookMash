<?php
require("..\includes\common.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ADMIN PORTAL | BookMash</title>
        <link href="../css/bootstrap.css" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">
        <script src="../js/jquery.js"></script>
        <script src="../js/bootstrap.min.js"></script>
    </head>

    <body>
        <?php
        include '..\includes\adminheader.php';
        ?>
        <div class="container-fluid" id="content">
              <div class="row">
                  <div class="col-xs-offset-1 col-xs-1">
                      <a href="dashboard.php"><h1><span class="glyphicon glyphicon-dashboard color">Dashboard</span></h1></a> 
                  </div>
                <div class="col-xs-offset-1 col-xs-1">
                    <a href="userlist.php"><h1><span class="glyphicon glyphicon-user color">User List</span></h1></a><br>
                </div>
               <div class="col-xs-offset-1 col-xs-1">   
                   <a href="booklist.php"><h1><span class="glyphicon glyphicon-book color">Book List</span></h1></a><br>
               </div>
          <div class="col-xs-offset-1 col-xs-1">
              <a href="addbook.php"><h1><span class="glyphicon glyphicon-adjust color">Add Book</span></h1></a><br>
          </div>
          <div class="col-xs-offset-1 col-xs-1">
              <a href="transactions.php"><h1><span class="glyphicon glyphicon-piggy-bank color">Transactions</span></h1></a><br>
            </div>
        </div>
            <h4 style="font-family: algerian">User List</h4>
            <div>
                <table class="table table-bordered table-striped">
                     <?php
                             $query = "SELECT * FROM userdetails";
                             $result = mysqli_query($con, $query)or die($mysqli_error($con));
                             $num = mysqli_num_rows($result);
                             $query1 = "select userType from login";
                             $result1 = mysqli_query($con, $query1)or die($mysqli_error($con));
                        ?>
                    <thead>
                        <tr>
                            <!--<th>ID</th> -->
                            <th>Name</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>City</th>
                            <th>Pincode</th>
                            <th>User Type</th>
                            <th>Remove User</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                                  //$id=0;
                                while ($row = mysqli_fetch_array($result)) {
                                    $row1 = mysqli_fetch_array($result1);
                                   //$id=$row["id"];<td> $row[id] </td>
                                    echo "<tr> <td>$row[name]</td> <td> $row[email] </td> <td> $row[contact] </td> <td> $row[city] </td>"
                                            . "<td> $row[pincode] </td> <td> $row1[userType]</td><td><a href='removeuser.php?id={$row['email']}' class='remove_item_link btn btn-block btn-danger'> Remove</a></td>";       
                                }
                           ?>
                    </tbody>
                </table>
                <?php
                        if (!empty($_GET['error'])) { echo "<br><br><b class='red'>".$_GET['error']."</b>"; }
                        ?>
            </div>
    </div>
    </body>
    <?php
        include '..\includes\adminfooter.php';
      ?>
</html>