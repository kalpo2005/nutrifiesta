<?php
session_start(); // Start session to store user info

require('../Admin/inc/db-config.php'); // Adjust path as needed

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    $con = $GLOBALS['con'];

    // Check if the user exists
    $query = "SELECT user_id, name, email, password FROM users WHERE email = ?";
    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);

    if (mysqli_stmt_num_rows($stmt) === 1) {
        mysqli_stmt_bind_result($stmt, $user_id, $name, $db_email, $hashed_password);
        mysqli_stmt_fetch($stmt);

        // Verify password
        if (password_verify($password, $hashed_password)) {
            $_SESSION['user_id'] = $user_id;
            $_SESSION['name'] = $name;
            $_SESSION['email'] = $db_email;

            echo "<script>
              alert('✅ Login successful!');
              window.location.href = '../index.php'; // Redirect after login
            </script>";
        } else {
            echo "<script>
              alert('❌ Incorrect password!');
              window.history.back();
            </script>";
        }
    } else {
        echo "<script>
          alert('❌ Email not found!');
          window.history.back();
        </script>";
    }

    mysqli_stmt_close($stmt);
    mysqli_close($con);
} else {
    echo "Invalid request.";
}
