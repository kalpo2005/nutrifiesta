<?php
session_start();
require('inc/db-config.php');
require('inc/essentias.php');

$errorMsg = '';

if (isset($_POST['login'])) {
    $frm_data = filteration($_POST);

    $query = "SELECT * FROM admin_card WHERE admin_name = ? AND password = ?";
    $values = [$frm_data['admin_name'], $frm_data['admin_pass']];
    $res = select($query, $values, "ss");

    if ($res && mysqli_num_rows($res) == 1) {
        $_SESSION['adminLogin'] = true;
        $_SESSION['admin_name'] = $frm_data['admin_name'];

        // ✅ Redirect to dashboard
        header("Location: inc/dashboard.php");
        exit;
    } else {
        $errorMsg = "Login failed - Invalid credentials!";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f5f5f5;
        }

        .login-box {
            max-width: 400px;
            margin: auto;
            margin-top: 10%;
            padding: 30px;
            background: white;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
            border-radius: 10px;
        }
    </style>
</head>
<body>

<div class="login-box">
    <h4 class="text-center mb-4">Admin Login Panel</h4>

    <form method="POST">
        <!-- 🔴 Show error if login fails -->
        <?php if ($errorMsg != ''): ?>
            <div class="alert alert-danger text-center py-2">
                <?php echo $errorMsg; ?>
            </div>
        <?php endif; ?>

        <div class="mb-3">
            <label class="form-label">Admin Name</label>
            <input type="text" name="admin_name" class="form-control" required placeholder="Enter admin name">
        </div>

        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="admin_pass" class="form-control" required placeholder="Enter password">
        </div>

        <button type="submit" name="login" class="btn btn-primary w-100">Login</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
