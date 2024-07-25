<?php
include 'configure.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customer_name = $_POST['name'];
    $email = $_POST['email'];
    $order = $_POST['order'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO orders (`name`, `email`, `phone`, `order`) VALUES ('$customer_name', '$email', '$phone', '$order');";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('success')</script>";
        header('location: current_order.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Now - Indian Restaurant</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Order Now</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="menu.php">Menu</a></li>
                <li><a href="order.php">Order Now</a></li>
                <li><a href="current_order.php">Current Orders</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="order-form">
            <h2>Place Your Order</h2>
            <form action="order.php" method="POST">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="phone">Phone:</label>
                <input type="tel" id="phone" name="phone" required>
                <label for="order">Order:</label>
                <input type="text" id="order" name="order" required>
                <button type="submit" class="btn">Submit Order</button>
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Indian Restaurant. All rights reserved.</p>
    </footer>
</body>
</html>
