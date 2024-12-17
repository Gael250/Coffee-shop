<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product(s)</title>
    <link rel="stylesheet" href="assets/css/add.css">
</head>
<body>
    <header>
        Coffee Shop Admin
    </header>

    <div class="container">
        <div class="info">
            <h2>Add a New Product to Your Inventory</h2>
            <p>Fill in the product details below to add a new product.</p>
        </div>

        <div class="form">
            <form method="POST" action="assets/php/add.php">
                <h1>Add New Product</h1>
                <input type="text" name="pname" id="pname" placeholder="Product Name" required>
                <input type="number" name="price" id="price" placeholder="Price of the Product" required>
                <input type="file" accept="image/*" name="image" id="image" required>
                <input type="number" name="stock" id="stock" placeholder="Available Stock" required>

                <button type="submit">Add Product</button>
            </form>
        </div>
    </div>
</body>
</html>
