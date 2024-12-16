<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register- Create your Account</title>
    <link rel="stylesheet" href="assets/css/forms.css">
</head>
<body>
    <header>
        <div class="logo">
            <a href="#"></a>
        </div>
    </header>

    <div class="container">
        <div class="info">
            <h2></h2>
    
            <p>
                
                
                <div>
                    <br>
                </div>
    
                <!-- <button>See Pricing</button> -->
            </p>
        </div>
    
        <div class="form">
            <form method="POST" action="assets/php/register.php">
                <h1>Sign up</h1>
                <input type="text" name='fullname' id="fullname" placeholder="Full Name" required>
                <input type="text" name='passkey'  id="passkey" placeholder="Create your passkey" required>
    
                <button>Register</button>
                <div></div>
                <span>Already an account?<a href="SignIn.html" style="color:#007bff ;  text-decoration: underline;">Login</a></span>
            </form>
        </div>
    </div>

    <!-- <script src="Storage.js"></script> -->
</body>
</html>