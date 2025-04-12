<?php
require_once(__DIR__ . '/../Admin/inc/db-config.php'); // Adjust path as needed

$order_count = 0;

$query = "SELECT COUNT(*) AS total_orders FROM orders";
$result = $con->query($query);

if ($result && $row = $result->fetch_assoc()) {
    $order_count = $row['total_orders'];
}

echo $order_count;
?>
