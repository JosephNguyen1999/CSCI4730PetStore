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

    </style>
</head>

<body>
<div class="header">
    <h1>SHOPPING CART</h1><br>
</div>

<div class="content">
    <br><br>
    <form>

        <div class="shopping_cart">

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


            $pain = "SELECT * FROM cartitems";
            $result = $conn->query($pain);

            if($result->num_rows > 0){
                while($row = $result->fetch_assoc() ){
                    echo "Cart ID: " . $row["cart_ID"] ." | Product ID: " .$row["prod_ID"]. "<br>";
                }
            } else {
                echo "0 records";
            }


            $conn->close();


            ?>

        </div><br><br><br><br><br><br><br><br>

    </form>
</div>
</body>
</html>