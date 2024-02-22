<?php
include("utils/config.php");
include("form_handlers/session_handler.php");
include("form_handlers/login_form_handler.php");
include("keycode_handlers/encrypted_key.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"
        integrity="sha512-CNgIRecGo7nphbeZ04Sc13ka07paqdeTu0WR1IM4kNcpmBAUSHSQX0FslNhTDadL4O5SAGapGt4FodqL8My0mA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<body>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Solos<!-- <i class="fa-solid fa-vault fa-2x"></i>--></a>
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
                            <li><a class="dropdown-item" href="pages/profile.php">Profile</a></li>
                            <li><a class="dropdown-item" href="utils/logout.php">Logout</a></li>
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

        <!-- <div class="mt-3 mb-3">
            <h1 class="h3 text-dark">Dashboard</h1>
        </div> -->

        <div class="row bins mt-3">

            <!-- <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-0 shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs fw-bold text-dark text-uppercase mb-1">
                                    Key Contacts</div>
                                <button type="button" class="btn btn-link text-secondary text-decoration-none"
                                    data-bs-toggle="modal" data-bs-target="#key_contacts">
                                    Enter Bin
                                </button>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-address-book fa-2x text-secondary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-0 shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs fw-bold text-dark text-uppercase mb-1">
                                    Key Contacts</div>
                                <a class="btn btn-link text-secondary text-decoration-none"
                                    href="pages/key_contacts/key_contacts.php">
                                    Enter Bin
                                </a>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-money-bill-wave fa-2x text-secondary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-0 shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs fw-bold text-dark text-uppercase mb-1">
                                    Personal Information</div>
                                <button type="button" class="btn btn-link text-secondary text-decoration-none"
                                    data-bs-toggle="modal" data-bs-target="#personal_information">
                                    Enter Bin
                                </button>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-user fa-2x text-secondary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <?php

            $check_database_query = mysqli_query($conn, "SELECT * FROM personal_information WHERE id='$user_id'");
            $check_records_query = mysqli_num_rows($check_database_query);

            if ($check_records_query == 1) {
                echo '
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-0 shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs fw-bold text-dark text-uppercase mb-1">
                                        Personal Information</div>
                                    <a class="btn btn-link text-secondary text-decoration-none"
                                        href="pages/personal_information/personal_information_bins.php">
                                        Enter Bin
                                    </a>
                                </div>
                                <div class="col-auto">
                                    <i class="fa-solid fa-money-bill-wave fa-2x text-secondary"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
            } else {
                echo
                    '<div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-0 shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs fw-bold text-dark text-uppercase mb-1">
                                            Personal Information</div>
                                        <a class="btn btn-link text-secondary text-decoration-none"
                                            href="pages/personal_information/personal_information.php">
                                            Enter Bin
                                        </a>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa-solid fa-money-bill-wave fa-2x text-secondary"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>';
            }

            ?>

            <!-- <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-0 shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs fw-bold text-dark text-uppercase mb-1">
                                    Medical Information</div>
                                <button type="button" class="btn btn-link text-secondary text-decoration-none"
                                    data-bs-toggle="modal" data-bs-target="#medical_information">
                                    Enter Bin
                                </button>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-truck-medical fa-2x text-secondary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-0 shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs fw-bold text-dark text-uppercase mb-1">
                                    Medical Information</div>
                                <a class="btn btn-link text-secondary text-decoration-none"
                                    href="pages/medical_information/medical_information_bins.php">
                                    Enter Bin
                                </a>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-money-bill-wave fa-2x text-secondary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-0 shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs fw-bold text-dark text-uppercase mb-1">
                                    Financial Information</div>
                                <button type="button" class="btn btn-link text-secondary text-decoration-none"
                                    data-bs-toggle="modal" data-bs-target="#financial_information">
                                    Enter Bin
                                </button>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-money-bill-wave fa-2x text-secondary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-0 shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs fw-bold text-dark text-uppercase mb-1">
                                    Financial Information</div>
                                <a class="btn btn-link text-secondary text-decoration-none"
                                    href="pages/financial_information/financial_information_bins.php">
                                    Enter Bin
                                </a>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-money-bill-wave fa-2x text-secondary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-0 shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs fw-bold text-dark text-uppercase mb-1">
                                    Tax</div>
                                <button type="button" class="btn btn-link text-secondary text-decoration-none"
                                    data-bs-toggle="modal" data-bs-target="#tax">
                                    Enter Bin
                                </button>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-file-invoice-dollar fa-2x text-secondary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-0 shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs fw-bold text-dark text-uppercase mb-1">
                                    Tax</div>
                                <a class="btn btn-link text-secondary text-decoration-none"
                                    href="pages/tax/tax_bins.php">
                                    Enter Bin
                                </a>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-money-bill-wave fa-2x text-secondary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-0 shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs fw-bold text-dark text-uppercase mb-1">
                                    My Dependents</div>
                                <button type="button" class="btn btn-link text-secondary text-decoration-none"
                                    data-bs-toggle="modal" data-bs-target="#my_dependents">
                                    Enter Bin
                                </button>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-people-group fa-2x text-secondary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-0 shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs fw-bold text-dark text-uppercase mb-1">
                                    My Dependents</div>
                                <a class="btn btn-link text-secondary text-decoration-none"
                                    href="pages/dependents/my_dependents_bins.php">
                                    Enter Bin
                                </a>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-money-bill-wave fa-2x text-secondary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-0 shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs fw-bold text-dark text-uppercase mb-1">
                                    Business Information</div>
                                <button type="button" class="btn btn-link text-secondary text-decoration-none"
                                    data-bs-toggle="modal" data-bs-target="#business_information">
                                    Enter Bin
                                </button>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-briefcase fa-2x text-secondary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-0 shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs fw-bold text-dark text-uppercase mb-1">
                                    Business Information</div>
                                <a class="btn btn-link text-secondary text-decoration-none"
                                    href="pages/business_information/business_information.php">
                                    Enter Bin
                                </a>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-money-bill-wave fa-2x text-secondary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-0 shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs fw-bold text-dark text-uppercase mb-1">
                                    Property</div>
                                <button type="button" class="btn btn-link text-secondary text-decoration-none"
                                    data-bs-toggle="modal" data-bs-target="#property">
                                    Enter Bin
                                </button>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-house fa-2x text-secondary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-0 shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs fw-bold text-dark text-uppercase mb-1">
                                    Personal Property</div>
                                <a class="btn btn-link text-secondary text-decoration-none"
                                    href="pages/property/property_bin.php">
                                    Enter Bin
                                </a>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-money-bill-wave fa-2x text-secondary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-0 shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs fw-bold text-dark text-uppercase mb-1">
                                    Insurance</div>
                                <button type="button" class="btn btn-link text-secondary text-decoration-none"
                                    data-bs-toggle="modal" data-bs-target="#insurance">
                                    Enter Bin
                                </button>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-file-signature fa-2x text-secondary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-0 shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs fw-bold text-dark text-uppercase mb-1">
                                    Insurance</div>
                                <a class="btn btn-link text-secondary text-decoration-none"
                                    href="pages/insurance/insurance_bins.php">
                                    Enter Bin
                                </a>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-money-bill-wave fa-2x text-secondary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-0 shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs fw-bold text-dark text-uppercase mb-1">
                                    Passwords</div>
                                <button type="button" class="btn btn-link text-secondary text-decoration-none"
                                    data-bs-toggle="modal" data-bs-target="#passwords">
                                    Enter Bin
                                </button>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-lock fa-2x text-secondary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-0 shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs fw-bold text-dark text-uppercase mb-1">
                                    Passwords</div>
                                <a class="btn btn-link text-secondary text-decoration-none"
                                    href="pages/passwords/passwords.php">
                                    Enter Bin
                                </a>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-money-bill-wave fa-2x text-secondary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-0 shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs fw-bold text-dark text-uppercase mb-1">
                                    Travel</div>
                                <button type="button" class="btn btn-link text-secondary text-decoration-none"
                                    data-bs-toggle="modal" data-bs-target="#travel">
                                    Enter Bin
                                </button>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-suitcase-rolling fa-2x text-secondary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-0 shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs fw-bold text-dark text-uppercase mb-1">
                                    Travel</div>
                                <a class="btn btn-link text-secondary text-decoration-none"
                                    href="pages/travel/travel_bins.php">
                                    Enter Bin
                                </a>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-money-bill-wave fa-2x text-secondary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-0 shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs fw-bold text-dark text-uppercase mb-1">
                                    Pets</div>
                                <button type="button" class="btn btn-link text-secondary text-decoration-none"
                                    data-bs-toggle="modal" data-bs-target="#pets">
                                    Enter Bin
                                </button>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-dog fa-2x text-secondary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-0 shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs fw-bold text-dark text-uppercase mb-1">
                                    Pets</div>
                                <a class="btn btn-link text-secondary text-decoration-none" href="pages/pets/pets.php">
                                    Enter Bin
                                </a>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-money-bill-wave fa-2x text-secondary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-0 shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs fw-bold text-dark text-uppercase mb-1">
                                    Ancestry</div>
                                <button type="button" class="btn btn-link text-secondary text-decoration-none"
                                    data-bs-toggle="modal" data-bs-target="#ancestry">
                                    Enter Bin
                                </button>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-people-line fa-2x text-secondary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-0 shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs fw-bold text-dark text-uppercase mb-1">
                                    Ancestry</div>
                                <a class="btn btn-link text-secondary text-decoration-none"
                                    href="pages/ancestry/ancestry.php">
                                    Enter Bin
                                </a>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-money-bill-wave fa-2x text-secondary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-0 shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs fw-bold text-dark text-uppercase mb-1">
                                    Important Documents</div>
                                <button type="button" class="btn btn-link text-secondary text-decoration-none"
                                    data-bs-toggle="modal" data-bs-target="#important_documents">
                                    Enter Bin
                                </button>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-scroll fa-2x text-secondary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-0 shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs fw-bold text-dark text-uppercase mb-1">
                                    Important Documents</div>
                                <a class="btn btn-link text-secondary text-decoration-none"
                                    href="pages/important_documents/important_documents_bins.php">
                                    Enter Bin
                                </a>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-money-bill-wave fa-2x text-secondary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-0 shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs fw-bold text-dark text-uppercase mb-1">
                                    My Beneficiary</div>
                                <button type="button" class="btn btn-link text-secondary text-decoration-none"
                                    data-bs-toggle="modal" data-bs-target="#beneficiary_information">
                                    Enter Bin
                                </button>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-people-roof fa-2x text-secondary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-0 shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs fw-bold text-dark text-uppercase mb-1">
                                    My Beneficiary</div>
                                <a class="btn btn-link text-secondary text-decoration-none"
                                    href="pages/beneficiary_information/beneficiary_information_bins.php">
                                    Enter Bin
                                </a>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-money-bill-wave fa-2x text-secondary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-0 shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs fw-bold text-dark text-uppercase mb-1">
                                    At Death</div>
                                <button type="button" class="btn btn-link text-secondary text-decoration-none"
                                    data-bs-toggle="modal" data-bs-target="#my_death">
                                    Enter Bin
                                </button>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-skull-crossbones fa-2x text-secondary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-0 shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs fw-bold text-dark text-uppercase mb-1">
                                    At Death</div>
                                <a class="btn btn-link text-secondary text-decoration-none"
                                    href="pages/at_death/death_bins.php">
                                    Enter Bin
                                </a>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-money-bill-wave fa-2x text-secondary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-0 shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs fw-bold text-dark text-uppercase mb-1">
                                    Crypto</div>
                                <button type="button" class="btn btn-link text-secondary text-decoration-none"
                                    data-bs-toggle="modal" data-bs-target="#crypto">
                                    Enter Bin
                                </button>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-skull-crossbones fa-2x text-secondary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-0 shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs fw-bold text-dark text-uppercase mb-1">
                                    Crypto</div>
                                <a class="btn btn-link text-secondary text-decoration-none"
                                    href="pages/crypto/crypto_bins.php">
                                    Enter Bin
                                </a>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-money-bill-wave fa-2x text-secondary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-0 shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs fw-bold text-dark text-uppercase mb-1">
                                    Additional Services</div>
                                <button type="button" class="btn btn-link text-secondary text-decoration-none"
                                    data-bs-toggle="modal" data-bs-target="#additional_services">
                                    Enter Bin
                                </button>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-skull-crossbones fa-2x text-secondary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-0 shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs fw-bold text-dark text-uppercase mb-1">
                                    Additional Services</div>
                                <a class="btn btn-link text-secondary text-decoration-none"
                                    href="pages/additional_services/additional_services.php">
                                    Enter Bin
                                </a>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-money-bill-wave fa-2x text-secondary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="personal_information" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Personal Information</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="index.php" method="POST">
                                <input type="password" name="personal_information_code" class="form-control mb-3"
                                    placeholder="Entry Code">
                                <button type="submit" class="btn btn-primary w-100"
                                    name="personal_information_bin">Enter
                                    Bin</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="medical_information" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Medical Information</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="#" method="POST">
                                <input type="password" name="medical_information_code" class="form-control mb-3"
                                    placeholder="Entry Code">
                                <button type="submit" class="btn btn-primary w-100" name="medical_information_bin">Enter
                                    Bin</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="crypto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Crypto</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="#" method="POST">
                                <input type="password" name="crypto_code" class="form-control mb-3"
                                    placeholder="Entry Code">
                                <button type="submit" class="btn btn-primary w-100" name="crypto_bin">Enter
                                    Bin</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="additional_services" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Additional Services</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="#" method="POST">
                                <input type="password" name="additional_services_code" class="form-control mb-3"
                                    placeholder="Entry Code">
                                <button type="submit" class="btn btn-primary w-100" name="additional_services_bin">Enter
                                    Bin</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="my_personal_arrangements" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">My Personal Arrangements</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="#" method="POST">
                                <input type="password" name="my_personal_arrangements_code" class="form-control mb-3"
                                    placeholder="Entry Code">
                                <button type="submit" class="btn btn-primary w-100"
                                    name="my_personal_arrangements_bin">Enter Bin</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="my_dependents" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">My Dependents</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="#" method="POST">
                                <input type="password" name="my_dependents_code" class="form-control mb-3"
                                    placeholder="Entry Code">
                                <button type="submit" class="btn btn-primary w-100" name="my_dependents_bin">Enter
                                    Bin</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="financial_information" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Financial Information</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="#" method="POST">
                                <input type="password" name="financial_information_code" class="form-control mb-3"
                                    placeholder="Entry Code">
                                <button type="submit" class="btn btn-primary w-100"
                                    name="financial_information_bin">Enter
                                    Bin</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="pets" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Pets</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="#" method="POST">
                                <input type="password" name="pets_code" class="form-control mb-3"
                                    placeholder="Entry Code">
                                <button type="submit" class="btn btn-primary w-100" name="pets_bin">Enter
                                    Bin</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="travel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Travel</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="#" method="POST">
                                <input type="password" name="travel_code" class="form-control mb-3"
                                    placeholder="Entry Code">
                                <button type="submit" class="btn btn-primary w-100" name="travel_bin">Enter
                                    Bin</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="ancestry" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Ancestry</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="#" method="POST">
                                <input type="password" name="ancestry_code" class="form-control mb-3"
                                    placeholder="Entry Code">
                                <button type="submit" class="btn btn-primary w-100" name="ancestry_bin">Enter
                                    Bin</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="business_information" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Business Information</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="#" method="POST">
                                <input type="password" name="business_information_code" class="form-control mb-3"
                                    placeholder="Entry Code">
                                <button type="submit" class="btn btn-primary w-100"
                                    name="business_information_bin">Enter
                                    Bin</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="passwords" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Passwords</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="#" method="POST">
                                <input type="password" name="passwords_code" class="form-control mb-3"
                                    placeholder="Entry Code">
                                <button type="submit" class="btn btn-primary w-100" name="passwords_bin">Enter
                                    Bin</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="tax" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tax</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="#" method="POST">
                                <input type="password" name="tax_code" class="form-control mb-3"
                                    placeholder="Entry Code">
                                <button type="submit" class="btn btn-primary w-100" name="tax_bin">Enter
                                    Bin</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="property" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Property</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="#" method="POST">
                                <input type="password" name="property_code" class="form-control mb-3"
                                    placeholder="Entry Code">
                                <button type="submit" class="btn btn-primary w-100" name="property_bin">Enter
                                    Bin</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="insurance" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Insurance</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="#" method="POST">
                                <input type="password" name="insurance_code" class="form-control mb-3"
                                    placeholder="Entry Code">
                                <button type="submit" class="btn btn-primary w-100" name="insurance_bin">Enter
                                    Bin</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="beneficiary_information" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">My Beneficiary</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="#" method="POST">
                                <input type="password" name="beneficiary_information_code" class="form-control mb-3"
                                    placeholder="Entry Code">
                                <button type="submit" class="btn btn-primary w-100"
                                    name="beneficiary_information_bin">Enter
                                    Bin</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="key_contacts" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Key Contacts</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="#" method="POST">
                                <input type="password" name="key_contacts_code" class="form-control mb-3"
                                    placeholder="Entry Code">
                                <button type="submit" class="btn btn-primary w-100" name="key_contacts_bin">Enter
                                    Bin</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="my_death" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Death</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="#" method="POST">
                                <input type="password" name="my_death_code" class="form-control mb-3"
                                    placeholder="Entry Code">
                                <button type="submit" class="btn btn-primary w-100" name="my_death_bin">Enter
                                    Bin</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="important_documents" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Important Documents</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="#" method="POST">
                                <input type="password" name="my_documents_code" class="form-control mb-3"
                                    placeholder="Entry Code">
                                <button type="submit" class="btn btn-primary w-100" name="my_documents_bin">Enter
                                    Bin</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <hr>

        <div class="row bins justify-content-center pt-3">

            <div class="col-xl-4 col-md-6 mb-4 d-flex justify-content-center">
                <div class="card border-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div id="generalqrcode" class="d-flex justify-content-center"></div>
                                <script>
                                    var qrcode = new QRCode("generalqrcode",
                                        "https://www.milb.com/player/landon-stephens-686677");
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <script src="scripts/script.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

</body>

</html>