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
<h1>EDIT PRODUCT INFO</h1><br>
    </div>

    <div class="content">
    <br><br>
<form action='add_payment.php' method='post'> 
	<label for="product id">Product ID :</label><nbsp>
 <input type="number" id="product_id" name="product_id" size="40px"><br><br>
 
 <label for="product name">Product Name :</label><nbsp>
 <input type="text" id="product_name" name="product_name" size="40px"><br><br>
 
 <label for="price">Price :</label><nbsp>
 <input type="number" id="product_price" name="product_price" size="15px"><br><br>
 
      <label for="category">Category :</label>
<select name="product_category" id="product_category">
        <option value="none" selected disabled hidden></option>
  <option value="appliances">Appliances</option>
  <option value="gadgets">Electronoc Gadgets</option>
  <option value="furniture">Furniture</option>
            <option value="mechanical">Mechanical</option>
</select><br><br>    
           
       <label for="description">Description :</label><br>
       <textarea id="desc" name="description" rows="4" cols="50"></textarea><br><br>
       
       
 <label for="quantity">Quantity :</label><nbsp>
 <input type="number" min="0" step="1" oninput="validity.valid||(value='');" id="product_quantity" name="product_quantity" size="40px"><br><br>
 
        <label for="photo">Photo :</label><nbsp>
<img src="img_girl.jpg" alt="Girl in a jacket" width="200" height="200">

  <div class="button">
<input type="submit" value="Update" align="center">
           </div>
</form>
    </div>
</body>
</html>