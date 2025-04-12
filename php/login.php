<?php
session_start();
require('../Admin/inc/db-config.php'); // Adjust path as needed

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = strtolower(trim($_POST['email']));
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        echo "<script>
            alert('❌ Please fill all fields.');
            window.history.back();
        </script>";
        exit;
    }

    $con = $GLOBALS['con'];
    $query = "SELECT user_id, name, email, password FROM users WHERE LOWER(email) = ?";
    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);

    if (mysqli_stmt_num_rows($stmt) === 1) {
        mysqli_stmt_bind_result($stmt, $user_id, $name, $db_email, $hashed_password);
        mysqli_stmt_fetch($stmt);

        if (password_verify($password, $hashed_password)) {
            $_SESSION['user_id'] = $user_id;
            $_SESSION['name'] = $name;
            $_SESSION['email'] = $db_email;

            echo "<script>
                alert('✅ Login successful!');
                window.location.href = '../Cart.php';
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
    echo "<script>
        alert('❌ Invalid request.');
        window.history.back();
    </script>";
}
?>
