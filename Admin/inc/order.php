<?php
session_start();

// Redirect if admin not logged in
if (!isset($_SESSION['adminLogin']) || $_SESSION['adminLogin'] !== true) {
    header("Location: ../index.php");
    exit;
}

// Include DB connection
require_once __DIR__ . '/db-config.php';

$adminName = $_SESSION['admin_name'];

// Fetch order and item info using JOIN
$sql = "
    SELECT 
        o.id AS order_id,
        o.full_name,
        o.phone_number,
        o.address,
        o.pay_mode,
        o.order_date,
        oi.item_name,
        oi.price,
        oi.quantity
    FROM orders o
    JOIN order_items oi ON o.id = oi.order_id
    ORDER BY o.id DESC
";
$result = $con->query($sql);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <?php require('link.php'); ?>
    <style>
        img.product-img {
            width: 60px;
            height: 40px;
            object-fit: cover;
        }
    </style>

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

            <main class="p-4">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Order Details</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped align-middle">
                                <thead class="table-dark">
                                    <tr>
                                        <th>#</th>
                                        <th>Customer Name</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Pay Mode</th>
                                        <th>Product</th>
                                        <th>Quantity</th>
                                        <th>Total Price</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if ($result && $result->num_rows > 0): ?>
                                        <?php $count = 1; ?>
                                        <?php while ($row = $result->fetch_assoc()): ?>
                                            <tr>
                                                <td><?= $count++; ?></td>
                                                <td><?= htmlspecialchars($row['full_name']); ?></td>
                                                <td><?= htmlspecialchars($row['phone_number']); ?></td>
                                                <td><?= htmlspecialchars($row['address']); ?></td>
                                                <td><?= htmlspecialchars($row['pay_mode']); ?></td>
                                                <td><?= htmlspecialchars($row['item_name']); ?></td>
                                                <td><?= $row['quantity']; ?></td>
                                                <td>₹<?= $row['price'] * $row['quantity']; ?></td>
                                                <td><?= date('d M Y, h:i A', strtotime($row['order_date'])); ?></td>
                                            </tr>
                                        <?php endwhile; ?>
                                    <?php else: ?>
                                        <tr>
                                            <td colspan="9" class="text-center">No orders found.</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>



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