<?php
require('db-config.php');

$user_count = 0;

$result = mysqli_query($con, "SELECT COUNT(*) AS total FROM users");
if ($row = mysqli_fetch_assoc($result)) {
    $user_count = $row['total'];
}
?>
