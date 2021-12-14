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

if(isset($_POST['prodID'])) {
$prodID = $_POST['prodID'];
$qty = $_POST['qty'];
$email = $_POST['email'];
$password = $_POST['password'];
}

$query="SELECT userID,FirstName,Lastname FROM users WHERE email='$email'";
$statement = $db->prepare($query);
$statement->execute();
$temp1 = $statement->fetchAll();
$user = $temp1[0][0];



if(isset($user)){
    $stmt = "INSERT INTO cartitems (cart_ID, prod_ID) VALUES ('$user', '$prodID' )";
    mysqli_query($conn, $stmt);
    include("addtoCart.php");
    }
    $conn->close();

?>