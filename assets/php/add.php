<?php
    require_once '../../config.php';

    $Product_name = $_POST['pname'];
    $Product_price = $_POST['price'];
    $Product_stock = $_POST['stock'];

    // Iyi ijynaye na Image Upload
    $Product_image = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $path = "../../assets/images/" . basename($Product_image);

    move_uploaded_file($tmp_name, $path);

    $sql = "INSERT INTO products (name, price, stock, image) 
            VALUES ('$Product_name', '$Product_price', '$Product_stock', '$Product_image')";

    $result = mysqli_query($connect, $sql);

    if (!$result){
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    } else {
        echo "New record created successfully";
        confirm('Are you sure you want to delete this product?');
        header("Location: ../../index.php");
    }
?>
