<?php
session_start();
require_once __DIR__ . '/db-config.php';
?>

<?php if (isset($_GET['deleted'])): ?>
    <script>
        alert("✅ Product deleted successfully!");
    </script>
<?php endif; ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Panel - All Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        img.product-img {
            width: 60px;
            height: 40px;
            object-fit: cover;
        }
    </style>
</head>

<body class="bg-light">

    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>All Grocery Products</h2>
            <a href="add-product.php" class="btn btn-success">+ Add Product</a>
        </div>

        <!-- ✅ Success Alert using SESSION -->
        <?php if (isset($_SESSION['delete_success'])): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?= $_SESSION['delete_success'] ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php unset($_SESSION['delete_success']); ?>
        <?php endif; ?>

        <table class="table table-bordered table-striped bg-white shadow">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Price (₹)</th>
                    <th>Features</th>
                    <th>Rating</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result = $con->query("SELECT * FROM products ORDER BY product_id DESC");
                if ($result && $result->num_rows > 0):
                    while ($row = $result->fetch_assoc()):
                ?>
                        <tr>
                            <td><?= $row['product_id'] ?></td>
                            <td>
                                <img src="<?= htmlspecialchars($row['image']) ?>" class="product-img"
                                     onerror="this.onerror=null;this.src='https://via.placeholder.com/60x40?text=No+Image';">
                            </td>
                            <td><?= htmlspecialchars($row['name']) ?></td>
                            <td>₹<?= number_format($row['price'], 2) ?></td>
                            <td>
                                <?= htmlspecialchars($row['feature1']) ?>,
                                <?= htmlspecialchars($row['feature2']) ?>,
                                <?= htmlspecialchars($row['feature3']) ?>
                            </td>
                            <td>
                                <?php for ($i = 0; $i < $row['rating']; $i++) echo '⭐'; ?>
                            </td>
                            <td>
                                <a href="edit-product.php?id=<?= $row['product_id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                                <a href="../../php/delete_product.php?id=<?= $row['product_id'] ?>" class="btn btn-sm btn-danger"
                                   onclick="return confirm('Are you sure you want to delete this product?');">
                                    Delete
                                </a>
                            </td>
                        </tr>
                    <?php endwhile;
                else: ?>
                    <tr>
                        <td colspan="7" class="text-center">No products found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

</body>

</html>
