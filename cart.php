<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "petstore4370";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {
    $cartID = $_POST['cart_ID'];
    $delete = "DELETE FROM cartitems WHERE cart_ID = $cartID";
    echo "$cartID";
    $out = $conn->query($delete);
} else {

}

include('cart_form.php');

$conn->close();
?>