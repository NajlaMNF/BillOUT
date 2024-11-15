<?php

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    if (isset($_COOKIE['username'])) {
        $_SESSION['username'] = $_COOKIE['username'];
    }
    if (isset($_COOKIE['role'])) {
        $_SESSION['role'] = $_COOKIE['Role'];
    }
?>


