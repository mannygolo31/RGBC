<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "tabledb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['save']))
{
  $id = $_POST['id'];
  $name = $_POST['name'];
  $address = $_POST['address'];
  $contactNum = $_POST['contactNum'];

  $sql = "INSERT INTO cust_info (`id`,`name`,`address`,`contactNum`) VALUES ('$id','
  $name','$address','$contactNum')";

  if (mysqli_query($conn, $sql)){
    header("Location: ../pages/Communication Management.php");
  }else{
    echo "Error:  " . $sql . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);

}
?>