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
            <h4 style="font-family: algerian">Transactions List</h4>
            <div>
                <table class="table table-bordered table-striped">
                     <?php
                             $query = "SELECT * FROM cart";
                             $result = mysqli_query($con, $query)or die($mysqli_error($con));
                             $num = mysqli_num_rows($result);
                             //for obtaining the price
                             
                        ?>
                    <thead>
                        <tr>
                            <th>Transaction ID</th>
                            <th>User ID</th>
                            <th>Type</th>
                            <th>Amount</th>
                            <th>Status</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                                 
                                while ($row = mysqli_fetch_array($result)) {
                                   $id=$row["email"];
                                    $query1 = "SELECT I.price,I.type FROM book I,cart UI WHERE UI.itemid=I.id AND UI.email='$id'";
                                    $result1 = mysqli_query($con, $query1)or die(mysqli_error($con));
                                    while($row1 = mysqli_fetch_array($result1)){
                                    echo "<tr><td> $row[id] </td> <td>$row[email]</td> <td> $row1[type] </td> <td>$row1[price]</td> <td>$row[status]</td>"
                                            . "<td><a href='edit.php?id={$row['id']}' class='remove_item_link btn btn-block btn-danger'>Edit</a></td>";       
                                }
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