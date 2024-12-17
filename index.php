<?php
require_once 'config.php';

// Query to get all products from the database
$sql = "SELECT * FROM products";
$result = mysqli_query($connect, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Shop Admin Panel</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <script type="" src=""></script>
    <script type="text/javascript" src="assets/js/script.js"></script>
</head>
<body>
    <div class="container">
        <aside class="sidebar">
            <div class="logo">Coffee Shop Admin</div>
            <nav class="nav">
                <ul>
                    <li><a href="#dashboard" class="active">Dashboard</a></li>
                    <li><a href="#analytics">Analytics</a></li>
                    <li><a href="#products">Products</a></li>
                    <li><a href="#orders">Orders</a></li>
                    <li><a href="#customers">Users</a></li>
                    <li><a href="#activity-log">Activity Log</a></li>
                    <li><a href="#settings">Settings</a></li>
                </ul>
            </nav>
        </aside>

        <main class="main-content">
            <header class="header">
                <h1>Admin Panel</h1>
                <div class="search-bar">
                    <span>Search:</span>
                    <input type="text" placeholder="Search...">
                </div>
                <div class="theme-toggle" onclick="toggleTheme()">🌓</div>
            </header>

            <section id="dashboard" class="section">
                <h2>Welcome to the Coffee Shop Admin Panel</h2>
                <p>Manage your coffee shop efficiently with a simple and intuitive dashboard.</p>
            </section>

            <section id="analytics" class="section">
                <h2>Analytics</h2>
                <p>Charts for sales, orders, and customer trends will go here.</p>
            </section>

            <section id="products" class="section">
                <h2>Products</h2>
                <form action="addProduct.php" method="get">                    
                    <button class="btn">Add New Product </button>
                </form>
                <table>
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Available Stock</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($result)): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($row['name']); ?></td>
                                <td><?php echo htmlspecialchars($row['price']); ?></td>
                                <td><?php echo htmlspecialchars($row['stock']); ?></td>
                                <td>
                                    <img src="assets/images/<?php echo htmlspecialchars($row['image']); ?>" 
                                         alt="Product Image" style="width: 50px; height: 50px;">
                                </td>
                                <td>
                                    <button class="btn"><a href="assets/php/edit_product.php?id=<?php echo $row['id']; ?>">Edit</a></button> 
                                    <button class="btn"><a href="assets/php/delete_product.php?id=<?php echo $row['id']; ?>" 
                                    onclick="return confirm('Are you sure you want to delete this product?');">Delete</a></button>
                                    
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </section>

            <section id="orders" class="section">
                <h2>Orders</h2>
                <p>Order will be shown here</p>
            </section>

            <section id="users" class="section">
                <h2>Users</h2>
                <p>Users will be shown here</p>
            </section>

            <section id="activity-log" class="section">
                <h2>Activity Log</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Timestamp</th>
                            <th>Action</th>
                            <th>Admin</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2024-12-15 10:00</td>
                            <td>Added new product</td>
                            <td>Admin</td>
                        </tr>
                        <tr>
                            <td>2024-12-15 09:45</td>
                            <td>Updated order status</td>
                            <td>Admin</td>
                        </tr>
                    </tbody>
                </table>
            </section>

            <section id="settings" class="section">
                <h2>Settings</h2>
                <p>Manage your account settings here.</p>
            </section>
        </main>
    </div>

</body>
</html>
