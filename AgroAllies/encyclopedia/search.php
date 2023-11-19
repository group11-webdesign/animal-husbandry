<?php
$conn = mysqli_connect("localhost", "root", "", "AgroAllies");
if (!$conn) {
    die("Connection error");
    
}

$disease = [];


$q = mysqli_real_escape_string($conn, $_REQUEST["q"]);

$query = "SELECT * FROM `Disease`
          WHERE `Dname` LIKE '%$q%'";

$result = mysqli_query($conn, $query);

if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}

while ($row = mysqli_fetch_assoc($result)) {
    $disease[] = $row;
}

echo json_encode($disease);


mysqli_close($conn);
?>
