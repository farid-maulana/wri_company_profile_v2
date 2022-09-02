<?php
function connection()
{
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "db_polinema";
    return mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
}

function getTableMiniclass()
{
    $link = connection();
    $query = "SELECT * FROM jadwal_miniclass";
    $result = mysqli_query($link, $query);

    $hasil = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $hasil;
}