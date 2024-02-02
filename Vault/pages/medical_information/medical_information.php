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
    <title>Medical Information</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link href='https://clinicaltables.nlm.nih.gov/autocomplete-lhc-versions/17.0.2/autocomplete-lhc.min.css'
        rel="stylesheet">
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
                            <li><a class="dropdown-item" href="#">Logout</a></li>
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

        <form action="medical_information.php" method="POST">
            <div class="row g-3 py-3">
                <div class="col-9">
                    <h1 class="fw-bold">Medical Information</h1>
                </div>
                <div class="col-3">
                    <input type="submit" name="medical_information_btn" class="btn btn-primary w-100" value="Save">
                </div>
            </div>

            <div class="row g-3">

                <div class="col-md-6 col-lg-3">
                    <div class="form-floating">
                        <input type="text" class="form-control shadow-none" name="medical_advocate" id="floatingInput">
                        <label for="floatingInput">Medical Advocate (POA)</label>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <select name="blood_type" class="form-select w-100 h-100 shadow-none" placeholder="Blood Type">
                        <option disabled selected>Blood Type</option>
                        <option value="O Positive">O Positive</option>
                        <option value="O Negative">O Negative</option>
                        <option value="A Positive">A Positive</option>
                        <option value="A Negative">A Negative</option>
                        <option value="B Positive">B Positive</option>
                        <option value="B Negative">B Negative</option>
                        <option value="AB Positive">AB Positive</option>
                        <option value="AB Negative">AB Negative</option>
                    </select>
                </div>

                <div class="col-md-6 col-lg-3 show_medical_condition_item">
                    <div class="input-group h-100">
                        <input type="text" id="condition" placeholder="Condition">
                        <button class="btn btn-primary add_medical_condition_btn">+</button>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 show_medication_item">
                    <div class="input-group h-100">
                        <input type="text" class="form-control shadow-none" name="medications[]"
                            placeholder="Medications">
                        <button class="btn btn-primary add_medication_btn">+</button>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 show_allergy_item">
                    <div class="input-group h-100">
                        <input type="text" class="form-control shadow-none" name="allergies[]" placeholder="Allergies">
                        <button class="btn btn-primary add_allergy_btn">+</button>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="form-floating">
                        <input type="text" class="form-control shadow-none" name="primary_care_physician"
                            id="floatingInput">
                        <label for="floatingInput">Primary Care Physician</label>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="form-floating">
                        <input type="text" class="form-control shadow-none" name="primary_care_physician_number"
                            id="floatingInput">
                        <label for="floatingInput">Phone Number</label>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="form-floating">
                        <input type="text" class="form-control shadow-none" name="preferred_hospital"
                            id="floatingInput">
                        <label for="floatingInput">Preferred Hospital</label>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="form-floating">
                        <input type="text" class="form-control shadow-none" name="preferred_hospital_address"
                            id="floatingInput">
                        <label for="floatingInput">Address</label>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="form-floating">
                        <input type="text" class="form-control shadow-none" name="preferred_pharmacy"
                            id="floatingInput">
                        <label for="floatingInput">Preferred Pharmacy</label>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="form-floating">
                        <input type="text" class="form-control shadow-none" name="preferred_pharmacy_number"
                            id="floatingInput">
                        <label for="floatingInput">Phone Number</label>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="form-floating">
                        <input type="text" class="form-control shadow-none" name="preferred_pharmacy_address"
                            id="floatingInput">
                        <label for="floatingInput">Address</label>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="form-floating">
                        <input type="text" class="form-control shadow-none" name="family_health_history"
                            id="floatingInput">
                        <label for="floatingInput">Family Health History</label>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-center">
                    <h6 class="px-5">Organ Donor</h6>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="organ_donation" id="inlineRadio1"
                            value="Yes">
                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="organ_donation" id="inlineRadio2" value="No">
                        <label class="form-check-label" for="inlineRadio2">No</label>
                    </div>
                </div>

            </div>
        </form>
    </div>

    <!-- https://clinicaltables.nlm.nih.gov/apidoc/rxterms/v3/doc.html -->

    <script src="../../scripts/script.js"></script>

    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
    <script src='https://clinicaltables.nlm.nih.gov/autocomplete-lhc-versions/17.0.2/autocomplete-lhc.min.js'></script>

    <script>
        new Def.Autocompleter.Search('condition',
            'https://clinicaltables.nlm.nih.gov/api/conditions/v3/search');
    </script>

    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

</body>

</html>