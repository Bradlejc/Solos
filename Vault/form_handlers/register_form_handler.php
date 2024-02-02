<?php

$fname = "";
$lname = "";
$email = "";
$password = "";
$confirm_password = "";
$date = "";

$error_array = [];

date_default_timezone_set('America/New_York');

if (isset($_POST['register_btn'])) {

    $fname = strip_tags($_POST['register_fname']);
    $fname = str_replace(' ', '', $fname);
    $fname = ucfirst(strtolower($fname));
    $_SESSION['register_fname'] = $fname;

    $lname = strip_tags($_POST['register_lname']);
    $lname = str_replace(' ', '', $lname);
    $lname = ucfirst(strtolower($lname));
    $_SESSION['register_lname'] = $lname;

    $email = strip_tags($_POST['register_email']);
    $email = str_replace(' ', '', $email);
    $email = ucfirst(strtolower($email));
    $_SESSION['register_email'] = $email;

    $password = strip_tags($_POST['register_password']);
    $confirm_password = strip_tags($_POST['register_confirm_password']);

    $date = date('Y-m-d H:i:s');

    $password = md5($password);

    $query = mysqli_query($conn, "INSERT INTO users VALUES (NULL, '$fname', '$lname', '$email', '$password', '$date')");

    //Clear session variables 
    $_SESSION['register_fname'] = "";
    $_SESSION['register_lname'] = "";
    $_SESSION['register_email'] = "";

    array_push($error_array, '<div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
    Successfully registered!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>');

}


?>