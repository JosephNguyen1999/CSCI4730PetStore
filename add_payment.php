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
    $card_number = $_POST['card_number'];
    $exp_date = $_POST['exp_date'];
    $cvv = $_POST['cvv'];
} else {
    include('add_payment_form.php');
}

$query="INSERT INTO paymentinfo (CardNum, ExpDate, CVV) VALUES ('$card_number', '$exp_date', '$cvv')";
$statement1 = $db->prepare($query);
$statement1->execute();
$temp3 = $statement1->fetchAll();

/*
$stmt = "INSERT INTO paymentinfo (CardNum, Exp. Date, CVV) VALUES ('$card_number', '$exp_date', '$cvv')";
mysqli_query($conn, $stmt);
*/
include('add_payment_form.php');


//$conn->close();
