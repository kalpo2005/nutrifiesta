<?php
require_once __DIR__ . '/../Admin/inc/db-config.php';

if (isset($_GET['id'])) {
    $userId = intval($_GET['id']);

    $query = "DELETE FROM users WHERE user_id = ?";

    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, "i", $userId);

    if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_close($stmt);
        header("Location: ../Admin/inc/user.php?msg=deleted");
        exit;
    } else {
        mysqli_stmt_close($stmt);
        echo "Error deleting user.";
    }
} else {
    echo "Invalid request.";
}
