<?php
include 'configure.php';

// Fetch all orders
$sql = "SELECT * FROM orders";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders Management</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <h1>Orders Management</h1>
    <a href="order.php">Add New Order</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Customer Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Item Name</th>
            <th>Order Date</th>
            <th>Actions</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['phone']}</td>
                        <td>{$row['order']}</td>       
                        <td>{$row['order_date']}</td>
                        <td>
                            <a href='delete_order.php?id={$row['id']}'>Delete</a>
                        </td>
                    </tr>";
            }
        } else {
            echo "<tr><td colspan='6'>No orders found</td></tr>";
        }
        ?>
    </table>
</body>
</html>
