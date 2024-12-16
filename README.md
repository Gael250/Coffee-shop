-----------FOLDER STRUCTER

COFFEE-SHOP/
│
├── assets/
│   ├── css/
│   │   └── styles.css          # Main stylesheet for the project (BUT IN MY CASE AM USING TAILWIND)
│   ├── js/
│   │   └── scripts.js          # Main JavaScript file for interactivity (WON'T BE NEEDED)
│   ├── images/
│   │   └── logo.png            # Logo and other images
│
├── includes/
│   ├── header.php              # Reusable header (e.g., navigation, meta tags)
│   ├── footer.php              # Reusable footer (e.g., closing HTML tags)
│   └── config.php              # Database connection file
│
├── pages/
│   ├── dashboard.php           # Admin dashboard
│   ├── products.php            # Product management
│   ├── orders.php              # Order management
│   ├── users.php               # User management
│
├── uploads/
│   └── product-images/         # Folder to store uploaded product images
│
├── index.php                   # Main entry point (login page or dashboard redirect)
├── login.php                   # Admin login page
├── logout.php                  # Logout functionality
└── README.md                   # Project documentation