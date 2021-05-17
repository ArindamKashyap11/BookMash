<?php

require("../includes/common.php");
$id= $_GET['id'];
$query = "SELECT userType FROM login WHERE email='$id' ";
$result = mysqli_query($con, $query) or die (mysqli_error($con));
$row = mysqli_fetch_array($result);
if ($row["userType"]!= 'admin') {
   // Delete the rows from user_items table where item_id and user_id equal to the item_id and user_id we got from the cart page and session
    //$query1 = "DELETE FROM userdetails WHERE email='$id'";
   // $res = mysqli_query($con, $query1) ;
    $query3 =  "SELECT * FROM cart WHERE email= '$id'";
    $res3 = mysqli_query($con, $query3);
    if(mysqli_num_rows($res3)!=0)
    { 
        header('location: userlist.php?error=WARNING:user has ordered something');
    }
        else
        {  
        $query2 = "DELETE FROM login WHERE email='$id'";
        $res1 = mysqli_query($con, $query2) ;
        $query1 = "DELETE FROM userdetails WHERE email='$id'";
        $res = mysqli_query($con, $query1) ;
        header("location:userlist.php?error=user has been deleted");
        mysqli_close($con);
        }
}
 else {
     header('location: userlist.php?error=WARNING:Admin cannot be removed'); 
}
?>