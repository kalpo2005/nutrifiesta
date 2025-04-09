<?php
$file = __DIR__ . '/counter.txt';

if (file_exists($file)) {
    echo file_get_contents($file);
} else {
    echo 0;
}
?>
