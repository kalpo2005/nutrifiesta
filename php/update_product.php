<?php
require('../Admin/inc/db-config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['product_id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $feature1 = $_POST['feature1'];
    $feature2 = $_POST['feature2'];
    $feature3 = $_POST['feature3'];
    $rating = $_POST['rating'];

    // Fetch current image from DB
    $query = $con->prepare("SELECT image FROM products WHERE product_id = ?");
    $query->bind_param("i", $id);
    $query->execute();
    $result = $query->get_result();
    $currentProduct = $result->fetch_assoc();
    $currentImage = $currentProduct['image'] ?? '';
    $query->close();

    // Handle image upload
    if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
        $imageName = time() . '_' . basename($_FILES['image']['name']);
        $imagePath = '../uploads/' . $imageName;

        if (move_uploaded_file($_FILES['image']['tmp_name'], $imagePath)) {
            $imageToSave = '/nutrifiesta/uploads/' . $imageName;
        } else {
            $imageToSave = $currentImage; // fallback
        }
    } else {
        $imageToSave = $currentImage; // keep existing
    }

    // Update query
    $stmt = $con->prepare("UPDATE products SET name=?, image=?, price=?, feature1=?, feature2=?, feature3=?, rating=? WHERE product_id=?");
    $stmt->bind_param("ssdsssii", $name, $imageToSave, $price, $feature1, $feature2, $feature3, $rating, $id);

    if ($stmt->execute()) {
        echo "<script>
                alert('✅ Product updated successfully!');
                window.location.href = '/nutrifiesta/Admin/inc/product.php';
              </script>";
    } else {
        echo "<script>
                alert('❌ Failed to update product.');
                window.history.back();
              </script>";
    }

    $stmt->close();
}
?>
