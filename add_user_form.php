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
        <h1>ADD USER</h1><br>
    </div>

    <div class="content">
        <br><br>

        <form action='add_user.php' method='post'>
            <h2>User Information</h2>

            <label for="firstname">First Name</label><br>
            <input type="text" placeholder="John" name="firstname" required><br>

            <label for="lastname">Last Name</label><br>
            <input type="text" placeholder="Smith" name="lastname" required><br>

            <label for="phoneNumber">Phone Number</label><br>
            <input type="text" placeholder="1234567890" name="phoneNumber" required><br>

            <label for="address">Address</label><br>
            <input type="text" placeholder="2222 Pet Drive" name="address" required><br>

            <label for="state">State</label><br>
            <input type="text" placeholder="Georgia" name="state" required><br>

            <label for="country">Country</label><br>
            <input type="text" placeholder="United States" name="country" required><br>

            <label for="zip">ZIP</label><br>
            <input type="text" placeholder="30078" name="zip" required><br>

            <label for="email">Email</label><br>
            <input type="text" placeholder="johnsmith@gmail.com" name="email" required><br>

            <label for="password">Password</label><br>
            <input type="password" placeholder="********" name="password" required><br><br>

            <button class='button' type="submit" name="submit">Add User</button>
        </form>
    </div>
</body>

</html>