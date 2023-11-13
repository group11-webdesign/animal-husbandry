<?php
$conn = mysqli_connect("localhost", "root", "", "agroallies");
if (!$conn) {
    die("Connection error");
}

$vetnames = [];

// Use mysqli_real_escape_string to prevent SQL injection
$q = mysqli_real_escape_string($conn, $_REQUEST["q"]);

$query = "SELECT `vetname` FROM `vets`
          WHERE `vetname` LIKE '$q%'";

$result = mysqli_query($conn, $query);

if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}

while ($row = mysqli_fetch_assoc($result)) {
    $vetnames[] = $row["vetname"];
}

echo json_encode($vetnames);

// Close the database connection
mysqli_close($conn);
?>
