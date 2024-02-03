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

        <form action="update_medical_information_medical.php" method="POST">
            <div class="row g-3 py-3">
                <div class="col-9">
                    <h1 class="fw-bold">Update Information</h1>
                </div>
                <div class="col-3">
                    <input type="submit" name="update_medical_information_btn" class="btn btn-primary w-100"
                        value="Update">
                </div>
            </div>

            <div class="row g-3">

                <div class="col-md-6 col-lg-3">
                    <div class="form-floating">
                        <input type="text" class="form-control shadow-none" name="medical_advocate" id="floatingInput"
                            value="<?php echo $medical_information_user['medical_advocate']; ?>">
                        <label for="floatingInput">Medical Advocate (POA)</label>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <select name="blood_type" class="form-select w-100 h-100 shadow-none" placeholder="Blood Type">
                        <?php if (!empty($medical_information_user['blood_type'])) {
                            echo '<option selected value="' . $medical_information_user["blood_type"] . '">' . ucwords($medical_information_user["blood_type"]) . '</option>';
                        } else {
                            echo '<option disabled selected>Blood Type</option>';
                        } ?>
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
                        <input type="text" id="condition" name="medical_conditions[]" class="form-control shadow-none"
                            placeholder="Medical Conditions">
                        <button class="btn btn-primary add_medical_condition_btn">+</button>
                    </div>
                </div>

                <?php
                while ($medical_conditions = mysqli_fetch_assoc($check_medical_conditions_query)) {
                    foreach ($medical_conditions as $medical_condition) {
                        echo '
                    <div class="col-md-6 col-lg-3 remove_medical_condition_item">
                    <div class="input-group h-100">
                        <input type="text" name="medical_conditions[]" class="form-control shadow-none" placeholder="Medical Conditions" value="' . $medical_condition . '">
                        <button class="btn btn-danger remove_medical_condition_btn">-</button>
                    </div>
                    </div>';
                    }
                }
                ?>

                <div class="col-md-6 col-lg-3 show_medication_item">
                    <div class="input-group h-100">
                        <input type="text" class="form-control shadow-none" name="medications[]"
                            placeholder="Medications">
                        <button class="btn btn-primary add_medication_btn">+</button>
                    </div>
                </div>

                <?php
                while ($medications = mysqli_fetch_assoc($check_medications_query)) {
                    foreach ($medications as $medication) {
                        echo '
                    <div class="col-md-6 col-lg-3 remove_medication_item">
                    <div class="input-group h-100">
                        <input type="text" name="medications[]" class="form-control shadow-none" placeholder="Medications" value="' . $medication . '">
                        <button class="btn btn-danger remove_medication_btn">-</button>
                    </div>
                    </div>';
                    }
                }
                ?>

                <div class="col-md-6 col-lg-3 show_allergy_item">
                    <div class="input-group h-100">
                        <input type="text" class="form-control shadow-none" name="allergies[]" placeholder="Allergies">
                        <button class="btn btn-primary add_allergy_btn">+</button>
                    </div>
                </div>

                <?php
                while ($allergies = mysqli_fetch_assoc($check_allergies_query)) {
                    foreach ($allergies as $allergy) {
                        echo '
                    <div class="col-md-6 col-lg-3 remove_allergy_item">
                    <div class="input-group h-100">
                        <input type="text" name="allergies[]" class="form-control shadow-none" placeholder="Allergies" value="' . $allergy . '">
                        <button class="btn btn-danger remove_allergy_btn">-</button>
                    </div>
                    </div>';
                    }
                }
                ?>

                <div class="col-md-6 col-lg-3">
                    <div class="form-floating">
                        <input type="text" class="form-control shadow-none" name="primary_care_physician"
                            id="floatingInput"
                            value="<?php echo $medical_information_user['primary_care_physician']; ?>">
                        <label for="floatingInput">Primary Care Physician</label>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="form-floating">
                        <input type="text" class="form-control shadow-none" name="primary_care_physician_number"
                            id="floatingInput"
                            value="<?php echo $medical_information_user['primary_care_physician_number']; ?>">
                        <label for="floatingInput">Phone Number</label>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="form-floating">
                        <input type="text" class="form-control shadow-none" name="preferred_hospital" id="floatingInput"
                            value="<?php echo $medical_information_user['preferred_hospital']; ?>">
                        <label for="floatingInput">Preferred Hospital</label>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="form-floating">
                        <input type="text" class="form-control shadow-none" name="preferred_hospital_address"
                            id="floatingInput"
                            value="<?php echo $medical_information_user['preferred_hospital_address']; ?>">
                        <label for="floatingInput">Address</label>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="form-floating">
                        <input type="text" class="form-control shadow-none" name="preferred_pharmacy" id="floatingInput"
                            value="<?php echo $medical_information_user['preferred_pharmacy']; ?>">
                        <label for="floatingInput">Preferred Pharmacy</label>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="form-floating">
                        <input type="text" class="form-control shadow-none" name="preferred_pharmacy_number"
                            id="floatingInput"
                            value="<?php echo $medical_information_user['preferred_pharmacy_number']; ?>">
                        <label for="floatingInput">Phone Number</label>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="form-floating">
                        <input type="text" class="form-control shadow-none" name="preferred_pharmacy_address"
                            id="floatingInput"
                            value="<?php echo $medical_information_user['preferred_pharmacy_address']; ?>">
                        <label for="floatingInput">Address</label>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="form-floating">
                        <input type="text" class="form-control shadow-none" name="family_health_history"
                            id="floatingInput"
                            value="<?php echo $medical_information_user['family_health_history']; ?>">
                        <label for="floatingInput">Family Health History</label>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-center">
                    <h6 class="px-5">Organ Donor</h6>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="organ_donation" id="inlineRadio1" value="Yes"
                            <?php if ($medical_information_user['organ_donation'] == 'Yes') {
                                echo "checked";
                            } ?> >
                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="organ_donation" id="inlineRadio2" value="No"
                        <?php if ($medical_information_user['organ_donation'] == 'No') {
                                echo "checked";
                            } ?> >
                        <label class="form-check-label" for="inlineRadio2">No</label>
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