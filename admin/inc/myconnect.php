<?php
$conn = mysqli_connect("localhost", "root", "", "website_ivydemo");
// Check connection
if ($conn->connect_error) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}