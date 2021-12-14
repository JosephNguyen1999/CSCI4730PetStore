<?php







?>

<!DOCTYPE html>
<html>

<head>
    <title>Add User</title>
    <link rel="stylesheet" href="styles/normalize.css">
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
        <h1>Remove From Cart</h1><br>
    </div>

    <div class="content">
        <br><br>

        <form action='removecart.php' method='post'>
            <h2>Remove Product from Cart</h2>

            

            <label for="prodID">ProductID</label><br>
            <input type="text" placeholder="" name="prodID" required><br>

            <label for="qty">Quantity</label><br>
            <input type="text" placeholder="0" name="qty" required><br>

            <label for="email">Email</label><br>
            <input type="text" placeholder="johnsmith@gmail.com" name="email" required><br>

            <label for="password">Password</label><br>
            <input type="text" placeholder="********" name="password" required><br><br>

            <button class='button' type="submit" name="submit">Add User</button>
        </form>
    </div>
</body>

</html>