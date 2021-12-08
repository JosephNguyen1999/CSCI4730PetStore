<!DOCTYPE html>
<html>

<head>
    <title>Add Payment Card</title>
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
        <h1>ADD PAYMENT CARD</h1><br>
    </div>

    <div class="content">
        <br><br>

        <form action='add_payment.php' method='post'>
            <h2>Payment Information</h2>

            <label for="card_number">Card Number</label><br>
            <input type="text" placeholder="1234123412341234" name="card_number" required><br>

            <label for="expiration_date">Expiration Date</label><br>
            <input type="text" placeholder="08/23" name="exp_date" required><br>

            <label for="cvv">CVV</label><br>
            <input type="text" placeholder="123" name="cvv" required><br><br>

            <button class='button' type="submit" name="submit">Add Payment Card</button>
        </form>
    </div>
</body>

</html>