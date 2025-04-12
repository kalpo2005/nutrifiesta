<?php
require('../Admin/inc/db-config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = $_POST['user_id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $pincode = $_POST['pincode'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hashed password

    $con = $GLOBALS['con'];

    // Check for duplicate user_id
    $check_id_query = "SELECT user_id FROM users WHERE user_id = ?";
    $id_stmt = mysqli_prepare($con, $check_id_query);
    mysqli_stmt_bind_param($id_stmt, "i", $user_id);
    mysqli_stmt_execute($id_stmt);
    mysqli_stmt_store_result($id_stmt);

    if (mysqli_stmt_num_rows($id_stmt) > 0) {
        echo "<script>
                alert('⚠️ User ID already exists. Please choose a different one.');
                window.location.href = '../index.php';
              </script>";
        mysqli_stmt_close($id_stmt);
        exit;
    }
    mysqli_stmt_close($id_stmt);

    // Check for duplicate email
    $check_email_query = "SELECT email FROM users WHERE email = ?";
    $email_stmt = mysqli_prepare($con, $check_email_query);
    mysqli_stmt_bind_param($email_stmt, "s", $email);
    mysqli_stmt_execute($email_stmt);
    mysqli_stmt_store_result($email_stmt);

    if (mysqli_stmt_num_rows($email_stmt) > 0) {
        echo "<script>
                alert('⚠️ Email already registered. Please use a different email.');
                window.location.href = '../index.php';
              </script>";
        mysqli_stmt_close($email_stmt);
        exit;
    }
    mysqli_stmt_close($email_stmt);

    // Insert user data
    $insert_query = "INSERT INTO users (user_id, name, address, pincode, email, contact, password) 
                     VALUES (?, ?, ?, ?, ?, ?, ?)";
    $insert_stmt = mysqli_prepare($con, $insert_query);
    mysqli_stmt_bind_param($insert_stmt, "issssss", $user_id, $name, $address, $pincode, $email, $contact, $password);

    if (mysqli_stmt_execute($insert_stmt)) {
        echo "<script>
                alert('✅ Registration successful!');
                window.location.href = '../index.php';
              </script>";
    } else {
        echo "<script>
                alert('❌ Registration failed. Please try again.');
                window.location.href = '../index.php';
              </script>";
    }

    mysqli_stmt_close($insert_stmt);
    mysqli_close($con);
} else {
    echo "<script>
            alert('❌ Invalid request.');
            window.location.href = '../index.php';
          </script>";
}
?>
