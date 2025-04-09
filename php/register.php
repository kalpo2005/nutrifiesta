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

    // Check for duplicate email
    $check_query = "SELECT email FROM users WHERE email = ?";
    $stmt = mysqli_prepare($con, $check_query);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);

    if (mysqli_stmt_num_rows($stmt) > 0) {
        echo "⚠️ Email already registered. Please use a different email.";
    } else {
        // Insert query
        $insert_query = "INSERT INTO users (user_id, name, address, pincode, email, contact, password) 
                         VALUES (?, ?, ?, ?, ?, ?, ?)";
        $insert_stmt = mysqli_prepare($con, $insert_query);
        mysqli_stmt_bind_param($insert_stmt, "issssss", $user_id, $name, $address, $pincode, $email, $contact, $password);

        if (mysqli_stmt_execute($insert_stmt)) {
            echo "✅ Registration successful!";
        } else {
            echo "❌ Registration failed. Please try again.";
        }

        mysqli_stmt_close($insert_stmt);
    }

    mysqli_stmt_close($stmt);
    mysqli_close($con);
} else {
    echo "❌ Invalid request.";
}
?>
