<?php
include("../../utils/config.php");
include("../../form_handlers/session_handler.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property</title>

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

        <div class="mt-3 mb-3">
            <h1 class="h3 text-dark">Dashboard</h1>
        </div>

        <div class="row bins">

            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-0 shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs fw-bold text-dark text-uppercase mb-1">
                                    Real Estate</div>
                                <a class="btn btn-link text-secondary text-decoration-none" href="real_estate.php">
                                    Enter Bin
                                </a>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-user fa-2x text-secondary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-0 shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs fw-bold text-dark text-uppercase mb-1">
                                    Vehicles</div>
                                <a class="btn btn-link text-secondary text-decoration-none" href="vehicles.php">
                                    Enter Bin
                                </a>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-truck-medical fa-2x text-secondary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-0 shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs fw-bold text-dark text-uppercase mb-1">
                                    Hierlooms</div>
                                <a class="btn btn-link text-secondary text-decoration-none"
                                    href="hierlooms.php">
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

            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-0 shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs fw-bold text-dark text-uppercase mb-1">
                                    Storage Units</div>
                                <a class="btn btn-link text-secondary text-decoration-none"
                                    href="storage_units.php">
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

            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-0 shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs fw-bold text-dark text-uppercase mb-1">
                                    Other</div>
                                <a class="btn btn-link text-secondary text-decoration-none"
                                    href="other_property.php">
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

        </div>

    </div>

    <script src="scripts/script.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

</body>

</html>