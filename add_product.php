<?php
/*
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
*/

$dsn='mysql:host=localhost; dbname=petstore4370';
    $username='root';
    $password='';

    try 
    {
        $db= new PDO($dsn, $username, $password);
    }
    catch(PDOException $e)
    {
        $error_message=$e->getMessage();
        echo $error_message;
        exit();
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

$query="INSERT INTO products (Name, Price, Category, Description, Image, qty) VALUES ('$name', '$price', '$category', '$description', '$image', '$quantity')";
$statement1 = $db->prepare($query);
$statement1->execute();
$temp3 = $statement1->fetchAll();

include('add_product_form.php');

/*
$stmt = "INSERT INTO products (Name, Price, Category, Description, Image, qty) VALUES ('$name', '$price', '$category', '$description', '$image', '$quantity')";
mysqli_query($conn, $stmt);




$conn->close();
*/