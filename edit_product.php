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

if (isset($_POST['product_id'])) {
	$product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_category = $_POST['product_category'];
	$desc = $_POST['description'];
    $product_quantity = $_POST['product_quantity'];
} else {
    $product_id =NULL;
    $product_name = NULL;
    $product_price =NULL;
    $product_category = NULL;
	$desc = NULL;
    $product_quantity = NULL;
}



    $query="SELECT * FROM products WHERE prod_ID='$product_id'";
    $statement = $db->prepare($query);
    $statement->execute();
    $temp1 = $statement->fetchAll();
    $prod = $temp1[0][0];

    if($prod != NULL){
    $query="UPDATE Products SET Name = '$product_name', Price = '$product_price', Category = '$product_category', Description = '$desc', qty = '$product_quantity' WHERE prod_ID = '$product_id'";
    $statement = $db->prepare($query);
    $statement->execute();
    $temp1 = $statement->fetchAll();
    }

    include("edit_product_form.php");




/*


$stmt1 = "SELECT COUNT(*) FROM Products WHERE prod_ID = '$product_id'";
$qry_count = mysqli_query($conn, $stmt1);
if ($qry_count > 0)
{
	$stmt2 = "UPDATE Products SET Name = '$product_name', Price = '$product_price', Category = '$product_category', Description = '$desc', Quantity = '$product_quantity' WHERE prod_ID = '$product_id'";
	mysqli_query($conn, $stmt2);

	include('edit_product_form.php');
}


$conn->close();

*/