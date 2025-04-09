<?php
require('inc/db-config.php');

$admin_name = "vanita";
$email = "vanita@gamil.com";
$password = "123123";

$con = $GLOBALS['con'];

// Check if email already exists
$check_query = "SELECT * FROM admin_card WHERE email = ?";
if ($check_stmt = mysqli_prepare($con, $check_query)) {
    mysqli_stmt_bind_param($check_stmt, "s", $email);
    mysqli_stmt_execute($check_stmt);
    mysqli_stmt_store_result($check_stmt);

    if (mysqli_stmt_num_rows($check_stmt) > 0) {
        echo "⚠️ Email already exists!";
    } else {
        // Insert new admin
        $insert_query = "INSERT INTO admin_card (admin_name, email, password) VALUES (?, ?, ?)";
        if ($insert_stmt = mysqli_prepare($con, $insert_query)) {
            mysqli_stmt_bind_param($insert_stmt, "sss", $admin_name, $email, $password);
            if (mysqli_stmt_execute($insert_stmt)) {
                echo "✅ Admin inserted successfully!";
            } else {
                echo "❌ Failed to insert admin!";
            }
            mysqli_stmt_close($insert_stmt);
        } else {
            echo "❌ Insert query could not be prepared!";
        }
    }
    mysqli_stmt_close($check_stmt);
} else {
    echo "❌ Check query could not be prepared!";
}
?>
