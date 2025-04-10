<?php
require_once '../Admin/inc/db-config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = filteration($_POST);

    $sql = "UPDATE products SET name = ?, price = ?, image = ?, feature1 = ?, feature2 = ?, feature3 = ?, rating = ? WHERE id = ?";
    $values = [
        $data['name'],
        $data['price'],
        $data['image'],
        $data['feature1'],
        $data['feature2'],
        $data['feature3'],
        $data['rating'],
        $data['id']
    ];
    $datatypes = "sdssssii";

    $res = execute($sql, $values, $datatypes);

    if ($res) {
        // Redirect back to product page with JavaScript alert
        echo "<script>
            alert('✅ Product updated successfully!');
            window.location.href = '/nutrifiesta/product.php';
        </script>";
        exit;
    } else {
        echo "<script>
            alert('❌ Failed to update product.');
            window.history.back();
        </script>";
    }
} else {
    echo "⚠️ Invalid request.";
}
?>
