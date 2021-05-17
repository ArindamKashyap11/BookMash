<?php

require("includes/common.php");

  // Getting the values from the signup page using $_POST[] and cleaning the data submitted by the user.
  $name = $_POST['name'];
  $name = mysqli_real_escape_string($con, $name);

  $email = $_POST['e-mail'];
  $email = mysqli_real_escape_string($con, $email);

  $password = $_POST['password'];
  $password = mysqli_real_escape_string($con, $password);
  $password1 = MD5($password);

  $contact = $_POST['contact'];
  $contact = mysqli_real_escape_string($con, $contact);

  $city = $_POST['city'];
  $city = mysqli_real_escape_string($con, $city);

  $pincode = $_POST['pincode'];
  $pincode = mysqli_real_escape_string($con, $pincode);

  $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
  $regex_num = "/^[6789][0-9]{9}$/";

  $query = "SELECT * FROM login WHERE email='$email'";
  $result = mysqli_query($con, $query)or die($mysqli_error($con));
  $num = mysqli_num_rows($result);
  
  
   if (!preg_match($regex_email, $email)) {
    $m = "<span class='red'>Not a valid Email Id</span>";
    header('location: signup.php?m1=' . $m);
  } 
    else if ($num != 0) {
    $m = "<span class='red'>Email Already Exists</span>";
    header('location: signup.php?m1=' . $m);
    }
  else if (!preg_match($regex_num, $contact)) {
    $m = "<span class='red'>Not a valid phone number</span>";
    header('location: signup.php?m2=' . $m);
  } else {
    
    $query = "INSERT INTO userdetails(name, email,contact, city, pincode)VALUES('" . $name . "','" . $email . "','" . $contact . "','" . $city . "','" . $pincode . "')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    $query1 = "INSERT INTO login(email,password)VALUES('". $email ." ', '" .$password1." ')";
    mysqli_query($con, $query1) or die(mysqli_error($con)); 
    //$user_id = mysqli_insert_id($con);
    $_SESSION['email'] = $email;
   $user_id = $_SESSION['email'];
    $error = "<span class='blue'>User Created</span>";
    header('location: products.php?error=' .$error);
  }
?>