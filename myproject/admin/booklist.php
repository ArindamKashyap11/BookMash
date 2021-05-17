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
            <h4 style="font-family: algerian">Book's List</h4>
            <div>
                <table class="table table-bordered table-striped">
                     <?php
                             $query = "SELECT * FROM book";
                             $result = mysqli_query($con, $query)or die($mysqli_error($con));
                             $num = mysqli_num_rows($result);
                        ?>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Remove Book</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                                  $id=0;
                                while ($row = mysqli_fetch_array($result)) {
                                    $id=$row["id"];
                                    echo "<tr><td> $row[id] </td> <td>$row[name]</td> <td> $row[price] </td>"
                                            . "<td><a href='removebook.php?id={$row['id']}' class='remove_item_link btn btn-block btn-danger'> Remove</a></td>";       
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