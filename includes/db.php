<?php
$conn = new mysqli("localhost:3307", "root", "", "school_db");

if ($conn->connect_error) {
    die("Connection Faild: " . $conn->connect_error);
}
