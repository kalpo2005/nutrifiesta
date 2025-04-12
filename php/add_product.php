<?php
require_once '../Admin/inc/db-config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = filteration($_POST);

    // Handle file upload
    if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
        $img_name = basename($_FILES['image']['name']);
        $img_tmp = $_FILES['image']['tmp_name'];
        $upload_path = "../uploads/" . $img_name;
        $db_path = "/nutrifiesta/uploads/" . $img_name;

        // Move the uploaded file
        if (move_uploaded_file($img_tmp, $upload_path)) {
            $sql = "INSERT INTO products (name, price, image, feature1, feature2, feature3, rating) 
                    VALUES (?, ?, ?, ?, ?, ?, ?)";
            $values = [
                $data['name'],
                $data['price'],
                $db_path, // Store the relative path to use later
                $data['feature1'],
                $data['feature2'],
                $data['feature3'],
                $data['rating']
            ];
            $datatypes = "sdssssi";

            $res = execute($sql, $values, $datatypes);

            if ($res) {
                echo "<script>alert('✅ Product added successfully!'); window.location.href = '/nutrifiesta/Admin/inc/product.php';</script>";
                exit;
            } else {
                echo "<script>alert('❌ Failed to insert product into database.'); window.history.back();</script>";
            }
        } else {
            echo "<script>alert('❌ Failed to upload image.'); window.history.back();</script>";
        }
    } else {
        echo "<script>alert('⚠️ No image uploaded or upload error.'); window.history.back();</script>";
    }
} else {
    echo "<script>alert('⚠️ Invalid request method.'); window.history.back();</script>";
}
?>
