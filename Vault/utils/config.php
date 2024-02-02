<?php
session_start();
$conn = mysqli_connect("localhost", "root", "root", "Vault");

if (mysqli_connect_errno()) {
    echo "Failed to connect: " . mysqli_connect_error();
}
?>