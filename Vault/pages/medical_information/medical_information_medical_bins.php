<?php
include("../../utils/config.php");
include("../../form_handlers/session_handler.php");
include("../../page_handlers/medical_information_handler.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical Information | Bins</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

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
                            <li><a class="dropdown-item" href="../../utils/logout.php">Logout</a></li>
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

    <?php

    $check_medical_information_query = mysqli_query($conn, "SELECT * FROM medical_information WHERE id='$userID'");
    $check_medications_query = mysqli_query($conn, "SELECT medication FROM medications WHERE id='$userID'");
    $check_allergies_query = mysqli_query($conn, "SELECT allergy FROM allergies WHERE id='$userID'");
    $check_medical_conditions_query = mysqli_query($conn, "SELECT medical_condition FROM medical_conditions WHERE id='$userID'");

    $check_records_query = mysqli_num_rows($check_medical_information_query);

    if ($check_records_query == 1) {
        $medical_information_user = mysqli_fetch_array($check_medical_information_query);
    }

    ?>

    <div class="container-fluid">

        <div class="row g-3 py-3">
            <div class="col-9">
                <h1 class="fw-bold">Medical Information</h1>
            </div>
        </div>

        <div class="row g-3 medical_information_bins">
            <div class="col-md-6 col-lg-6">
                <div class="card border-0 shadow h-100">
                    <div class="card-body d-flex flex-column">
                        <h4 class="card-title text-center">
                            <?php
                            echo
                                '<b>' . $user['first_name'] . ' ' . $user['last_name'] . '</b><hr>';
                            ?>
                        </h4>
                        <p class="card-text">
                            <?php
                            echo
                                '<b>Medical Advocate:</b> ' . $medical_information_user['medical_advocate'] .
                                '<br>' .
                                'Blood Type: ' . $medical_information_user['blood_type'] .
                                '<br>' .
                                '<b>Primary Care Physician:</b> ' . $medical_information_user['primary_care_physician'] .
                                '<br>' .
                                'Primary Care Physician Number: ' .
                                '<br>' .
                                'Preferred Hospital: ' .
                                '<br>' .
                                'Preferred Hospital Address: ' .
                                '<br>' .
                                'Preferred Pharmacy: ' .
                                '<br>' .
                                'Preferred Pharmacy Number: ' .
                                '<br>' .
                                'Preferred Pharmacy Address: ' .
                                '<br>' .
                                '<b>Family Health History:</b> ' .
                                '<br>' .
                                '<b>Organ Donation:</b> ' . ucwords($medical_information_user['organ_donation']);
                            ?>
                        </p>
                        <a href="update_medical_information_medical.php"
                            class="btn btn-primary w-100 mt-auto">Update</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="../../scripts/script.js"></script>

    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

</body>

</html>