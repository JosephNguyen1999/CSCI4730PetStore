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
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phoneNumber = $_POST['phoneNumber'];
    $address = $_POST['address'];
    $state = $_POST['state'];
    $country = $_POST['country'];
    $zip = $_POST['zip'];
    $email = $_POST['email'];
    $password = $_POST['password'];
} else {
    include('add_user_form.php');
}


$stmt = "INSERT INTO users (firstname, lastname, phoneNum, Address, State, Country, ZIP, email, password) VALUES ('$firstname', '$lastname', '$phoneNumber', '$address', '$state', '$country', '$zip', '$email', '$password')";
mysqli_query($conn, $stmt);


include('add_user_form.php');


$conn->close();
