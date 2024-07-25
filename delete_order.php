<?php
include 'configure.php';
    $id = $_GET['id'];
    $sql = "DELETE FROM orders WHERE `id` = '$id'";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('deleted successfully')</script>";
        header('location: current_order.php');
    } else {
        echo "Error deleting record: " . $conn->error;
    }
?>
