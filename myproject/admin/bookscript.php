<?php

require("..\includes\common.php");

  // Getting the values from the signup page using $_POST[] and cleaning the data submitted by the user.
  $name = $_POST['name'];
  $name = mysqli_real_escape_string($con, $name);

  $author = $_POST['author'];
  $author = mysqli_real_escape_string($con, $author);

  $price = $_POST['price'];
  $price = mysqli_real_escape_string($con, $price);

  $description = $_POST['description'];
  $description = mysqli_real_escape_string($con, $description);

  $booktype = $_POST['booktype'];
  $booktype = mysqli_real_escape_string($con, $booktype);
  
  $target_dir="uploads/";
  $target_file= $target_dir.basename($_FILES["filetoupload"]["name"]);
  $uploadok=1;
  $imagefiletype= strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    //check if image file is a actual image or fake image
  if(isset($_POST["submit"])){
      $check= getimagesize($_FILES["filetoupload"]["tmp_name"]);
      if($check == false){
            header('location:addbook.php?error=File is not an image');
          $uploadok=0;
      }
  }
  //check file size
  if ($_FILES["filetoupload"]["size"]>232000)
  {
        header('location:addbook.php?error=Sorry ,your file is too large');
      $uploadok=0;
  }
  //allow certain formats
  if($imagefiletype != "jpg" && $imagefiletype != "png" && $imagefiletype != "jpeg")
  {
        header('location:addbook.php?error=Sorry ,only /jpg,jpeg,png files are allowed');
      $uploadok=0;
  }
 if($uploadok == 0){
       header('location:addbook.php?error=Sorry,your file was not uploaded');
  }

  if(move_uploaded_file($_FILES["filetoupload"]["tmp_name"], $target_file))
       {
     $query = "INSERT INTO book(name,author, price, description,type,location)VALUES('" . $name . "','".$author."','" . $price . "','" . $description . "','" . $booktype ."','".$target_file."')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    header('location: admin.php?error=Book added to the Database');
        }   
 else {
     header('location:addbook.php?error=Sorry ,there is an error uploading your file'); 
        }

    
?>