<?php

if (isset($_SESSION['id'])) {
    $userID = $_SESSION['id'];
    $user_details_query = mysqli_query($conn, "SELECT * FROM users WHERE id='$userID'");
    $user = mysqli_fetch_array($user_details_query);
} else {
    header('Location: pages/login.php');
}

?>