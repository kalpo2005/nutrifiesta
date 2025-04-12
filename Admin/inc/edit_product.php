<?php
session_start();

// Check if admin is logged in
if (!isset($_SESSION['adminLogin']) || $_SESSION['adminLogin'] !== true) {
    header("Location: ../index.php"); // Redirect to login page
    exit;
}

// Get the admin name from session
$adminName = $_SESSION['admin_name'];
?>

<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <?php require('link.php'); ?>


</head>

<body class="bg-light">


    <div class="wrapper">
        <div id="overlay"></div>

        <!-- Sidebar start -->
        <div class="sidebar shadow">
            <div class="admin_brand d-flex justify-content-between align-items-baseline">
                <div>
                    <a class="nav-link fw-bold" href="#">
                        <span class="icon"><i class="fas fa-code"></i></span>
                        <span class="menu">Admin Dashboard</span>
                    </a>
                </div>
                <div class="d-block d-md-none">
                    <a href="javascript:void(0)" id="close_sidebar"><i class="fas fa-times-circle fa-lg"></i></a>
                </div>
            </div>

            <ul class="nav nav-pills flex-column">

                <li class="nav-item <?php echo ($currentPage == 'dashboard.php') ? 'active' : ''; ?>">
                    <a class="nav-link" href="dashboard.php">
                        <span class="icon" data-bs-toggle="tooltip" data-bs-title="Dashboard"><i class="fas fa-dashboard"></i></span>
                        <span class="menu">Dashboard</span>
                    </a>
                </li>

                <!-- Dropdown menu -->
                <li class="nav-item position-relative <?php echo ($currentPage == 'child-one.php' || $currentPage == 'child-two.php') ? 'active' : ''; ?>" data-bs-toggle="collapse" href="#masterCollapse" role="button" aria-expanded="false" aria-controls="masterCollapse">
                    <a class="nav-link" href="#">
                        <span class="icon" data-bs-toggle="tooltip" data-bs-title="Master">
                            <i class="fas fa-cubes"></i>
                        </span>
                        <span class="menu">Master</span>
                    </a>
                </li>

               Admin/inc/dashboard.php

                <li class="nav-item <?php echo ($currentPage == 'user.php') ? 'active' : ''; ?>">
                    <a class="nav-link" href="user.php">
                        <span class="icon" data-bs-toggle="tooltip" data-bs-title="Users"><i class="fas fa-users"></i></span>
                        <span class="menu">Users</span>
                    </a>
                </li>

                <li class="nav-item <?php echo ($currentPage == 'logout.php') ? 'active' : ''; ?>">
                    <a class="nav-link" href="logout.php">
                        <span class="icon" data-bs-toggle="tooltip" data-bs-title="Logout"><i class="fas fa-sign-out"></i></span>
                        <span class="menu">Logout</span>
                    </a>
                </li>

            </ul>
        </div>

        <!-- Sidebar end -->

        <div class="content">
            <!-- Top navbar -->
            <nav class="navbar navbar-expand-md navbar-light bg-light shadow">
                <div class="container-fluid px-3">
                    <button class="navbar-toggler border-0" type="button" id="show_sidebar_phone">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <a class="navbar-brand d-none d-md-block" href="javascript:void(0)" id="show_sidebar_pc">
                        <i class="fas fa-bars fa-lg"></i>
                    </a>

                    <div class="fw-bold text-secondary d-md-none d-block">Admin Panel</div>

                    <div class="ms-auto d-flex align-items-center">
                        <div class="nav-item d-none d-md-block me-2" data-bs-toggle="tooltip" data-bs-title="Full Screen" data-bs-placement="left">
                            <a href="#" class="nav-link" id="fullscreen">
                                <i class="fa-solid fa-expand"></i>
                            </a>
                        </div>

                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle py-1 px-3 rounded-1" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user-circle me-1"></i>
                                Welcome, <?php echo htmlspecialchars($adminName); ?> 👋
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-address-card me-2"></i>Profile</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-gear me-2"></i>Account</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="logout.php"><i class="fa-solid fa-right-from-bracket me-2"></i>Logout</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </nav>

            <!-- Main content -->
            <?php require_once 'db-config.php'; ?>

            <?php
            // Check for valid ID
            if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
                echo "<div class='alert alert-danger text-center'>Invalid Product ID.</div>";
                exit;
            }

            $id = $_GET['id'];

            // 👇 Changed 'id' to 'product_id' assuming that’s the actual column name
            $stmt = $con->prepare("SELECT * FROM products WHERE product_id = ?");
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $result = $stmt->get_result();
            $product = $result->fetch_assoc();

            if (!$product) {
                echo "<div class='alert alert-warning text-center'>Product not found.</div>";
                exit;
            }
            ?>

            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <h3 class="mb-4 text-center">Edit Product</h3>
                        <form method="POST" action="/nutrifiesta/php/update_product.php" enctype="multipart/form-data">

                            <!-- Hidden product ID -->
                            <input type="hidden" name="product_id" value="<?= $product['product_id'] ?>">

                            <div class="mb-3">
                                <label class="form-label">Product Name</label>
                                <input type="text" name="name" class="form-control" required value="<?= htmlspecialchars($product['name']) ?>">
                            </div>

                            <!-- Show Current Image -->
                            <div class="mb-3">
                                <label class="form-label">Current Image</label><br>
                                <img src="<?= htmlspecialchars($product['image']) ?>" alt="Current Image" width="120" class="rounded border">
                            </div>

                            <!-- Image File Upload -->
                            <div class="mb-3">
                                <label class="form-label">Upload New Image</label>
                                <input type="file" name="image" class="form-control">
                                <small class="text-muted">Leave empty to keep the current image.</small>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Price (₹)</label>
                                <input type="number" step="0.01" name="price" class="form-control" required value="<?= $product['price'] ?>">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Feature 1</label>
                                <input type="text" name="feature1" class="form-control" value="<?= htmlspecialchars($product['feature1']) ?>">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Feature 2</label>
                                <input type="text" name="feature2" class="form-control" value="<?= htmlspecialchars($product['feature2']) ?>">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Feature 3</label>
                                <input type="text" name="feature3" class="form-control" value="<?= htmlspecialchars($product['feature3']) ?>">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Rating</label>
                                <input type="number" name="rating" min="1" max="5" class="form-control" value="<?= $product['rating'] ?>">
                            </div>

                            <div class="d-flex gap-2">
                                <button type="submit" class="btn btn-primary">Update Product</button>
                                <a href="/nutrifiesta/Admin/inc/product.php" class="btn btn-secondary">Cancel</a>
                            </div>

                        </form>

                    </div>
                </div>
            </div>


            <!-- Footer -->
            <footer class="bg-light b-0 shadow text-secondary text-center d-flex flex-column flex-md-row justify-content-between p-3 p-md-4">
                <div>Copyright &copy; 2025 Vanita Solanki</div>
                <div>Made with support</div>
            </footer>
        </div>
    </div>



    <?php require('layout/deshboardlink.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- ✅ Bootstrap JS (must be placed at the bottom of body) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</body>

</html>