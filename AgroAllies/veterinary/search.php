<?php
    // Connection parameters for a remote MySQL server
    $server = "sql11.freemysqlhosting.net";
    $database = "sql11666984";
    $username = "sql11666984";
    $password = "ZJeX9tpVXc";
    $port = 3306;

    // Establishing the connection
    $con = mysqli_connect($server, $username, $password, $database, $port);
if (!$con) {
    die("Connection error");
}

$vetnames = [];


$q = mysqli_real_escape_string($con, $_REQUEST["q"]);

$query = "SELECT * FROM `vets`
          WHERE `vetname` LIKE '$q%'";

$result = mysqli_query($con, $query);

if (!$result) {
    die("Query failed: " . mysqli_error($con));
}

while ($row = mysqli_fetch_assoc($result)) {
    $vetnames[] = $row;
}

echo json_encode($vetnames);

mysqli_close($con);
?>
