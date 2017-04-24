<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


<?php
ini_set('display_error',1);
error_reporting(~0);

$servername = "localhost";
$username = "root";
$password = "";
$dbname=webProject;

// Create connection
 $conn = mysqli_connect( $username, $password,$dbname) or die("Error Connect to Database");
 $sql="INSERT INTO reister(User,Pass,E-mail)
 VALUES ('".$_POST["name"].$_POST["pass"].$_POST["email"]."')";

         $query = mysqli_query($conn,$sql);
         if($query)
          {
           echo "Record add successfully";
         }else {
           echo "Error".$query;
         }
         mysqli_close($conn);
?>
</body>
</html>
