<?php
$conn = mysqli_connect("localhost", "root", "", "agroallies");
if (!$conn) {
    die("Connection error");
}

$vetnames = [];


$q = mysqli_real_escape_string($conn, $_REQUEST["q"]);

$query = "SELECT * FROM `vets`
          WHERE `vetname` LIKE '$q%'";

$result = mysqli_query($conn, $query);

if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}

while ($row = mysqli_fetch_assoc($result)) {
    $vetnames[] = $row;
}

echo json_encode($vetnames);

mysqli_close($conn);
?>
