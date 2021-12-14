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
	$card_holder_name= $_POST['customer_name'];
    $card_number = $_POST['card_number'];
    $exp_date = $_POST['exp_date'];
    $cvv = $_POST['cvv'];
} else {
    include('edit_payment_form.php');
}

$stmt1 = "SELECT COUNT(*) FROM Products WHERE CardNumber = $card_number";
$qry_count = mysqli_query($conn, $stmt1);
if ($qry_count > 0)
{
	$stmt2 = "UPDATE PaymentInfo SET CardNumber = $new_card_number, ExpirationDate = $exp_date, CVV = $cvv CardNumber = $card_number";
	mysqli_query($conn, $stmt2);

	include('edit_payment_form.php')
}


$conn->close();