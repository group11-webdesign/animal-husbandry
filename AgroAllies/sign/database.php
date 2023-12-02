<?php

    // Connection parameters for a remote MySQL server
    $server = "sql11.freemysqlhosting.net";
    $database = "sql11666984";
    $username = "sql11666984";
    $password = "ZJeX9tpVXc";
    $port = 3306;

    // Establishing the connection
    $con = mysqli_connect($server, $username, $password, $database, $port);
    if (!$conn) {
        die("Something went wrong;");
    }

?>