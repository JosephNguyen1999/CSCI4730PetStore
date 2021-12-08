<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "petstore4370";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST["submit"])) {
    $card_number = $_POST['card_number'];
    $exp_date = $_POST['exp_date'];
    $cvv = $_POST['cvv'];
} else {
    include('add_payment_form.php');
}


$stmt = "INSERT INTO paymentinfo (CardNum, Exp. Date, CVV) VALUES ('$card_number', '$exp_date', '$cvv')";
mysqli_query($conn, $stmt);

include('add_payment_form.php');


$conn->close();
