<?php

$name = $_POST["name"];
$email = $_POST["emailid"];
$password=$_POST["password"];


$conn = new mysqli('localhost', 'root', '', 'tms');
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if($name == "")
{
  echo "<script>alert('Please Enter The Name')<script>";
  exit();
}
if($email == " ")
{
  echo "<script>alert('Please Enter The Email')<script>";
  exit();
}
if($password == " ")
{
  echo "<script>alert('Please Enter The Password')<script>";
  exit();
}
else{

    $sql = "INSERT INTO guider(name,email,password)
    VALUES ('$name','$email','$password')";

    if ($conn->query($sql) === TRUE) {
        echo "<script> alert('New record created successfully') </script>";
    } else {
      echo "<script> alert('Error') </script>";
    }
}


$conn->close();
?>