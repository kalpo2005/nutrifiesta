<?php
session_start();
require_once '../Admin/inc/db-config.php'; // Capital "A" is correct if your folder is named "Admin"

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    $image = trim($_POST['image']);
    $price = (float) $_POST['price'];
    $feature1 = trim($_POST['feature1']);
    $feature2 = trim($_POST['feature2']);
    $feature3 = trim($_POST['feature3']);
    $rating = (int) $_POST['rating'];

    $stmt = $con->prepare("INSERT INTO products (name, image, price, feature1, feature2, feature3, rating) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssdsssi", $name, $image, $price, $feature1, $feature2, $feature3, $rating);

    if ($stmt->execute()) {
        $_SESSION['success_message'] = "Product added successfully!";
        header("Location: ../Admin/inc/product.php"); // ✅ Redirects to your product page
        exit();
    } else {
        $_SESSION['error'] = "Failed to add product. Please try again.";
        header("Location: ../Admin/inc/dashboard.php");
        exit();
    }
} else {
    header("Location: ../Admin/inc/product.php");
    exit();
}
