<?php
    // Create connection
    $conn = new mysqli("localhost", "root", "");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
    $conn->close();
?> 