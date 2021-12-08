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
    $name = $_POST['name'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $image = $_POST['image'];
    $quantity = $_POST['quantity'];
} else {
    include('add_product_form.php');
}


$stmt = "INSERT INTO products (Name, Price, Category, Description, Image, qty) VALUES ('$name', '$price', '$category', '$description', '$image', '$quantity')";
mysqli_query($conn, $stmt);

include('add_product_form.php');


$conn->close();
