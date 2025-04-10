<?php
require_once __DIR__ . '/../admin/inc/db-config.php';

if (isset($_GET['id'])) {
    $product_id = (int)$_GET['id'];

    $stmt = $con->prepare("DELETE FROM products WHERE product_id = ?");
    $stmt->bind_param("i", $product_id);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        header("Location: ../admin/inc/product.php?deleted=1");
        exit();
    } else {
        echo "Product not found or could not be deleted.";
    }
} else {
    echo "Invalid ID.";
}
