<?php
require_once '../Admin/inc/db-config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = filteration($_POST);

    $sql = "INSERT INTO products (name, price, image, feature1, feature2, feature3, rating) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";
    $values = [
        $data['name'],
        $data['price'],
        $data['image'],
        $data['feature1'],
        $data['feature2'],
        $data['feature3'],
        $data['rating']
    ];
    $datatypes = "sdssssi";

    $res = execute($sql, $values, $datatypes);

    if ($res) {
        // Use a URL parameter for now
        header("Location: /nutrifiesta/Admin/inc/product.php?status=success");
        exit;
    } else {
        echo "❌ Failed to add product.";
    }
} else {
    echo "⚠️ Invalid request.";
}
?>
