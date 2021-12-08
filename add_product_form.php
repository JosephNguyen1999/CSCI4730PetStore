<!DOCTYPE html>
<html>

<head>
    <title>Add Product</title>
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

        .image_button{
            margin-left: 77px;
        }
    </style>
</head>

<body>
    <div class="header">
        <h1>ADD PRODUCT</h1><br>
    </div>

    <div class="content">
        <br><br>

        <form action='add_product.php' method='post'>
            <h2>Product Information</h2>

            <label for="name">Name</label><br>
            <input type="text" placeholder="German Shepherd" name="name" required><br>

            <label for="price">Price</label><br>
            <input type="number" placeholder="4" name="price" required><br>

            <label for="category">Category</label><br>
            <input type="text" placeholder="Dog" name="category" required><br>

            <label for="description">Description</label><br>
            <input type="text" placeholder="Fluffy" name="description" required><br>

            <label for="image">Image</label><br>
            <div class="image_button">
                <input type="file" id="image" name="image" accept="image/pngm image/jpeg" required><br>
            </div>

            <label for="quantity">Quantity</label><br>
            <input type="number" name="quantity" required><br><br>

            <button class='button' type="submit" name="submit">Add Product</button>
        </form>
    </div>
</body>

</html>