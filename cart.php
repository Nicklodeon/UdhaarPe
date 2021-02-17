<?php


$name = $_POST['name'];
$id = $_POST['id'];
$pid = $_POST['pid'];
$quantity = $_POST['quantity'];

?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "UdhaarPe";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO cart (user_id, product_id, quantity)
VALUES ($id, $pid, $quantity)";

if ($conn->query($sql) === TRUE) {
  echo "Added To Cart" ;
  header("location: cart_view.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>