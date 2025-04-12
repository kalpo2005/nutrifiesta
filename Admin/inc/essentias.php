<?php
function alert($type, $msg) {
    $bs_class = ($type == "success") ? "alert-success" : "alert-danger";
    echo "<div class=\"alert $bs_class alert-dismissible fade show custom-alert\" role=\"alert\">
            <strong class=\"me-3\">$msg</strong> You should check in on some of those fields below.
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
          </div>";
}
?>
