<?php
include("../utils/config.php");
include("../form_handlers/register_form_handler.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>

    <div class="container-fluid">

    </div>

    <div class="container d-flex align-items-center justify-content-center vh-100">
        <div class="row w-100">
            <div class="col-md-8 col-lg-6 mx-auto">
                <div class="card border-0 shadow">
                    <div class="card-body text-center">
                        <i class="fa-solid fa-vault fa-5x mb-3 mt-3"></i>
                        <form action="register.php" method="POST">
                            <div class="form-floating mb-3">
                                <input type="text" name="register_fname" class="form-control shadow-none"
                                    id="floatingFname">
                                <label for="floatingfname">First Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" name="register_lname" class="form-control shadow-none"
                                    id="floatingLname">
                                <label for="floatinglname">Last Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" name="register_email" class="form-control shadow-none"
                                    id="floatingEmail">
                                <label for="floatingInput">Email address</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" name="register_password" class="form-control shadow-none"
                                    id="floatingPassword">
                                <label for="floatingPassword">Password</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" name="register_confirm_password" class="form-control shadow-none"
                                    id="floatingConfirmPassword">
                                <label for="floatingConfirmPassword">Confirm Password</label>
                            </div>
                            <input type="submit" name="register_btn" class="btn btn-primary w-100 mb-3"
                                value="Register">
                            <a href="login.php" class="text-decoration-none">Already have an account?</a>
                            <?php if (!empty($error_array)) {
                                foreach ($error_array as $error) {
                                    echo '' . $error . '';
                                }
                            }
                            ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

</body>

</html>