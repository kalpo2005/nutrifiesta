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

                <li class="nav-item active">
                    <a class="nav-link" href="#">
                        <span class="icon" data-bs-toggle="tooltip" data-bs-title="Dashboard"><i class="fas fa-dashboard"></i></span>
                        <span class="menu">Dashboard</span>
                    </a>
                </li>

                <!-- Dropdown menu -->
                <li class="nav-item position-relative" data-bs-toggle="collapse" href="#masterCollapse" role="button" aria-expanded="false" aria-controls="masterCollapse">
                    <a class="nav-link" href="#">
                        <span class="icon" data-bs-toggle="tooltip" data-bs-title="Master">
                            <i class="fas fa-cubes"></i>
                        </span>
                        <span class="menu">Master</span>
                    </a>
                </li>

                <div class="collapse" id="masterCollapse">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span class="icon" data-bs-toggle="tooltip" data-bs-title="Child One">
                                <i class="fas fa-cube"></i>
                            </span>
                            <span class="menu">Child One</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span class="icon" data-bs-toggle="tooltip" data-bs-title="Child Two">
                                <i class="fas fa-cube"></i>
                            </span>
                            <span class="menu">Child Two</span>
                        </a>
                    </li>
                </div>

                <li class="nav-item">
                    <a class="nav-link" href="user.php">
                        <span class="icon" data-bs-toggle="tooltip" data-bs-title="Users"><i class="fas fa-users"></i></span>
                        <span class="menu">Users</span>
                    </a>
                </li>

                <li class="nav-item">
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
           

            <!-- Footer -->
            <footer class="bg-light shadow text-secondary text-center d-flex flex-column flex-md-row justify-content-between p-3 p-md-4">
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