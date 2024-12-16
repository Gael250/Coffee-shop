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
                <button class="btn">Add New Product</button>
                <table>
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Espresso</td>
                            <td>$3.00</td>
                            <td><button class="btn">Edit</button> <button class="btn">Delete</button></td>
                        </tr>
                        <tr>
                            <td>Latte</td>
                            <td>$4.00</td>
                            <td>
                                <button class="btn">Edit</button> <button class="btn">Delete</button>
                            </td>
                        </tr>
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
