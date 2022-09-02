<?php
function __connection()
{
    $servername = "localhost";
    $username = "root";
    $password = "password";
    $database = "db_polinema";
   
    return new mysqli($servername, $username, $password, $database);
}

function login($username, $password)
{
    $connect = __connection();
    $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $results = $connect->query($query);
    
    if ($rowCount = mysqli_num_rows($results) > 0) {
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['status'] = 'login';
        header('location: ../dashboard.php');
    } else {
        header('location: ../login.php');
    }

}

function logout()
{
    session_start();
    session_destroy();
    header('location: ../index.php');
    exit;
}
?>