<?php
    session_start();

    session_destroy();

    header("Location: ../HTML/Login.php");

    exit();
?>