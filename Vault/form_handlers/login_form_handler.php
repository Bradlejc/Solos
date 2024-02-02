<?php

$error_array = [];

if (isset($_POST['login_btn'])) {
    $email = filter_var($_POST["login_email"], FILTER_SANITIZE_EMAIL);
    $password = md5($_POST["login_password"]);

    $check_database_query = mysqli_query($conn, "SELECT * FROM users WHERE email_address='$email' AND password='$password'");
    $check_login_query = mysqli_num_rows($check_database_query);

    if ($check_login_query == 1) {
        $row = mysqli_fetch_array($check_database_query);
        $id = $row["id"];

        $_SESSION["id"] = $id;
        header('Location: ../index.php');
        exit();
    } else {
        array_push($error_array, '<div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
        Error logging in!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>');
    }
}

?>