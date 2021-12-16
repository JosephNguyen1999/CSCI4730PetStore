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

    $check = "DELETE FROM cartitems WHERE cart_ID = $cartID";
    $order = "INSERT INTO orders (user_ID, cart_ID) VALUES ($cartID, $cartID);";

     // Check username is exists or not
      $query = "SELECT count(*) as allcount FROM cartitems
              WHERE cart_ID = $cartID";

      $result = mysqli_query($conn,$query);
      $row = mysqli_fetch_array($result);
      $allcount = $row['allcount'];

      if($allcount != 0) {
        $checkout = $conn->query($check);
        $pushOrder = $conn->query($order);
      }
}

include('view_cart_checkout_form.php');

$conn->close();
?>