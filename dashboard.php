<?php
session_start();
if ($_SESSION['status'] != 'login') {
    header('location: login.php');
}

echo "<h1>Halo</h1>";
?>