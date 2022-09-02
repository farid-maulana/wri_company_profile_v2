<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $q = $_GET['q'];

    $con = mysqli_connect('localhost', 'root', '');
    if (!$con) {
        die('Could not connect: ' . mysqli_error($con));
    }

    mysqli_select_db($con, "db_polinema");
    // echo $q;
    if($q != "All")
    $sql = "SELECT * FROM jadwal_miniclass WHERE miniclass LIKE '%$q%'";
    else
    $sql = "SELECT * FROM jadwal_miniclass";
    $result = mysqli_query($con, $sql);

    echo "<table class='table'>
    <tr>
    <th scope='row'>Miniclass</th>
    <th scope='row'>Topik</th>
    <th scope='row'>Hari dan Tanggal</th>
    </tr>";
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['miniclass'] . "</td>";
        echo "<td>" . $row['topik'] . "</td>";
        echo "<td>" . $row['tanggal_waktu'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    mysqli_close($con);
    ?>
</body>
</html>