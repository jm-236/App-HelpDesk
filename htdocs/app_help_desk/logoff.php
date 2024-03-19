<?php
    session_start();
    session_destroy();
    header('Location: index.php');
    // echo "<pre>";
    // print_r($_SESSION);
    // echo "</pre>";
?>