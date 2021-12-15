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
?>

<!DOCTYPE html>
<html>

<head>
    <style>
        .header {
            border: 3px outset red;
            background-color: lightgrey;
            text-align: center;
        }

        .button {
            text-align: center;
        }

        .content {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="header">
        <h1>SHOPPING CART</h1><br>
    </div>

    <div class="content">
        <br><br>
        <?php
        $cart = "SELECT * FROM cartitems";
        $result = $conn->query($cart);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "Cart ID: " . $row["cart_ID"] . " | Product ID: " . $row["prod_ID"] . "<br>";
            }
        } else {
            echo "0 results";
        }
        ?>

        <form action='view_cart_checkout.php' method='post'>

            <div class="shopping_cart">


            </div><br><br><br><br><br><br><br><br>


            <label for="cart_ID">Cart ID</label><br>
            <input type="text" placeholder="cart_ID" name="cart_ID" required><br>

            <button class='button' type="submit" name="submit">Checkout</button>


        </form>
    </div>
</body>

</html>