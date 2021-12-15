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


if(isset($_POST['prodID'])) {
$prodID = $_POST['prodID'];
$qty = $_POST['qty'];
$email = $_POST['email'];
$password = $_POST['password'];
echo "<script>
    alert('$prodID');
    
    </script>";
}

$query="SELECT user_ID FROM users WHERE email='$email'";
$statement = $db->prepare($query);
$statement->execute();
$temp1 = $statement->fetchAll();
$user = $temp1[0][0];



$query="DELETE FROM cartitems WHERE prod_ID = '$prodID' AND cart_ID = '$user'";
$statement = $db->prepare($query);
$statement->execute();
$temp1 = $statement->fetchAll();
include("removefromcart.php");
/*

if(isset($user)){
$stmt = "DELETE FROM cartitems WHERE cart_ID ='$user' AND prod_ID = '$prodID'";
mysqli_query($conn, $stmt);

}

$conn->close();
*/
?>