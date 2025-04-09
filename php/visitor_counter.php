<?php
// Don't count visitors in admin panel
if (strpos($_SERVER['REQUEST_URI'], '/Admin') === false) {
    $file = __DIR__ . '/counter.txt';

    if (!file_exists($file)) {
        file_put_contents($file, '0');
    }

    $count = (int)file_get_contents($file);
    $count++;
    file_put_contents($file, $count);
}
?>
