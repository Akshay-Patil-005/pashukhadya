
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demo";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$name=$_REQUEST['name'];
$mobile=$_REQUEST['mobile'];
$district=$_REQUEST['district'];
$taloka=$_REQUEST['taloka'];
$village=$_REQUEST['village'];
$pincode=$_REQUEST['pincode'];
$address=$_REQUEST['address'];
$type=$_REQUEST['type'];
$weight=$_REQUEST['weight'];
$sql = "INSERT INTO sell (name,village)
VALUES ('$name','$village_name','$taloka_name','$address','$pin_code','$mo_no','$type','$date','$area')";

if (mysqli_query($conn, $sql)) {
  echo "Ragistration successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>