<?php
        require('inc/essentias.php');
        session_start();
        session_destroy();
        redirect('index.php');
?>