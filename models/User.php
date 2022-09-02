<?php
function __connection()
{
    $servername = "localhost";
    $username = "root";
    $password = "password";
    $database = "db_polinema";
   
    return new mysqli($servername, $username, $password, $database);
}

function login()
{
    $connect = __connection();
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $results = $connect->query($query);
    $fetchResult = mysqli_fetch_assoc($results);
    $rowCount = mysqli_num_rows($fetchResult);

    if ($rowCount > 0) {
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['status'] = 'login';
    }

    return $result;
}

function logout()
{
    session_start();
    session_destroy();
    header('location: ../index.php');
    exit;
}
?>