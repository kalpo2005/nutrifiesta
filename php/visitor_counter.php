<?php
// php/visitor-count.php

// Only count if NOT in admin panel AND not already counted in this session
if (strpos(strtolower($_SERVER['REQUEST_URI']), '/admin') === false && !isset($_SESSION['counted'])) {
    $file = __DIR__ . '/counter.txt';

    // Create file if it doesn't exist
    if (!file_exists($file)) {
        file_put_contents($file, '0');
    }

    // Read, increment, and write back the count
    $count = (int)file_get_contents($file);
    $count++;
    file_put_contents($file, $count);

    // Mark this session as counted
    $_SESSION['counted'] = true;
}
?>
