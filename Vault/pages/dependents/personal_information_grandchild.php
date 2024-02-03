<?php
include("../../utils/config.php");
include("../../form_handlers/session_handler.php");
include("../../page_handlers/personal_information_handler.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grandchildren Personal Information</title>

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

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="../../index.php"><i class="fa-solid fa-vault fa-2x"></i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown">
                            <?php echo 'Hello, ' . $user['first_name'] . ' ' . $user['last_name'] . '!'; ?>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="../utils/logout.php">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <?php if (!empty($error_array)) {
            foreach ($error_array as $error) {
                echo '' . $error . '';
            }
        }
        ?>
    </div>

    <div class="container-fluid">

        <form action="personal_information.php" method="POST">
            <div class="row g-3 py-3">
                <div class="col-9">
                    <h1 class="fw-bold">Grandchild Personal Information</h1>
                </div>
                <div class="col-3">
                    <input type="submit" name="personal_information_btn" id="personal_information_btn"
                        class="btn btn-primary w-100" value="Save">
                </div>
            </div>

            <div class="row g-3">
                <div class="col-md-6 col-lg-3">
                    <div class="form-floating">
                        <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                        <label for="floatingInput">Legal Name</label>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="form-floating">
                        <input type="text" name="maiden_name" class="form-control shadow-none" id="floatingInput">
                        <label for="floatingInput">Maiden Name</label>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="form-floating">
                        <input type="date" name="dob" class="form-control shadow-none" id="floatingInput">
                        <label for="floatingInput">Date of Birth</label>
                    </div>
                </div>

                <div class=" col-md-6 col-lg-3">
                    <div class="form-floating">
                        <input type="text" name="place_of_birth" class="form-control shadow-none" id="floatingInput">
                        <label for="floatingInput">Place of Birth</label>
                    </div>
                </div>

                <div class=" col-md-6 col-lg-3">
                    <div class="form-floating">
                        <input type="text" name="ssn" class="form-control shadow-none" id="floatingInput">
                        <label for="floatingInput">Social Security Number</label>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="form-floating">
                        <input type="text" name="address" class="form-control shadow-none" id="floatingInput">
                        <label for="floatingInput">Address</label>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="form-floating">
                        <input type="text" name="passport_number" class="form-control shadow-none" id="floatingInput">
                        <label for="floatingInput">Passport Number</label>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="form-floating">
                        <input type="text" name="drivers_license_number" class="form-control shadow-none"
                            id="floatingInput">
                        <label for="floatingInput">Driver's License Number</label>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="form-floating">
                        <input type="text" name="po_box_number" class="form-control shadow-none" id="floatingInput">
                        <label for="floatingInput">P.O Box Number</label>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="form-floating">
                        <input type="text" name="church_affiliation" class="form-control shadow-none"
                            id="floatingInput">
                        <label for="floatingInput">Church Affiliation</label>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <select name="military_service" class="form-select w-100 h-100 shadow-none"
                        placeholder="Military Service">
                        <option disabled selected>Military Service</option>
                        <option value="army">Army</option>
                        <option value="navy">Navy</option>
                        <option value="marines">Marines</option>
                        <option value="air force">Air Force</option>
                        <option value="coast guard">Coast Guard</option>
                    </select>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="form-floating">
                        <input type="text" name="education" class="form-control shadow-none" id="floatingInput">
                        <label for="floatingInput">Education</label>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="form-floating">
                        <input type="text" name="occupation" class="form-control shadow-none" id="floatingInput">
                        <label for="floatingInput">Occupation</label>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="form-floating">
                        <input type="text" name="citizenship" class="form-control shadow-none" id="floatingInput">
                        <label for="floatingInput">Citizenship Information</label>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="form-floating">
                        <input type="text" name="spouse_other" class="form-control shadow-none" id="floatingInput">
                        <label for="floatingInput">Spouse/Other</label>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="form-floating">
                        <input type="text" name="phone_pin_code" class="form-control shadow-none" id="floatingInput">
                        <label for="floatingInput">Phone Pin Code</label>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="form-floating">
                        <input type="text" name="email_address" class="form-control shadow-none" id="floatingInput">
                        <label for="floatingInput">Email Address</label>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="form-floating">
                        <input type="text" name="email_password" class="form-control shadow-none" id="floatingInput">
                        <label for="floatingInput">Password For Email</label>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 show_parent_item">
                    <div class="input-group h-100">
                        <input type="text" name="parents[]" class="form-control shadow-none" placeholder="Parents">
                        <button class="btn btn-primary add_parent_btn">+</button>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 show_sibling_item">
                    <div class="input-group h-100">
                        <input type="text" name="siblings[]" class="form-control shadow-none" placeholder="Siblings">
                        <button class="btn btn-primary add_sibling_btn">+</button>
                    </div>
                </div>

            </div>
        </form>
    </div>

    <script src="../../scripts/script.js"></script>

    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

</body>

</html>