<?php
include '../models/User.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

login($username, $password);
?>