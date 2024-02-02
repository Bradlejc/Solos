<?php

$error_array = [];

$user_id = $user['id'];

if (isset($_POST["personal_information_bin"])) {
    $key = $_POST["personal_information_code"];

    if ($key == '1234') {
        $check_database_query = mysqli_query($conn, "SELECT * FROM personal_information WHERE id='$user_id'");
        $check_records_query = mysqli_num_rows($check_database_query);

        if ($check_records_query == 1) {
            header('Location: pages/personal_information/personal_information_bins.php');
        } else {
            header('Location: pages/personal_information/personal_information.php');
        }
    } else {
        array_push($error_array, '<div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
        Code was incorrect!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>');
    }
}

if (isset($_POST["medical_information_bin"])) {
    $key = $_POST["medical_information_code"];

    if ($key == '1234') {
        header('Location: pages/medical_information_bins.php');
    } else {
        array_push($error_array, '<div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
        Code was incorrect!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>');
    }
}

if (isset($_POST["who_to_notify_bin"])) {
    $key = $_POST["who_to_notify_code"];

    if ($key == '1234') {
        header('Location: pages/who_to_notify.php');
    }
}

if (isset($_POST["my_personal_arrangements_bin"])) {
    $key = $_POST["my_personal_arrangements_code"];

    if ($key == '1234') {
        header('Location: pages/my_personal_arrangements.php');
    }
}

if (isset($_POST["my_dependents_bin"])) {
    $key = $_POST["my_dependents_code"];

    if ($key == '1234') {
        header('Location: pages/my_dependents_bins.php');
    }
}

if (isset($_POST["property_bin"])) {
    $key = $_POST["property_code"];

    if ($key == '1234') {
        header('Location: pages/property_bin.php');
    }
}

if (isset($_POST["financial_information_bin"])) {
    $key = $_POST["financial_information_code"];

    if ($key == '1234') {
        header('Location: pages/financial_information_bins.php');
    }
}

if (isset($_POST["business_information_bin"])) {
    $key = $_POST["business_information_code"];

    if ($key == '1234') {
        header('Location: pages/business_information.php');
    }
}

if (isset($_POST["beneficiary_information_bin"])) {
    $key = $_POST["beneficiary_information_code"];

    if ($key == '1234') {
        header('Location: pages/beneficiary_information_bins.php');
    }
}

if (isset($_POST["key_contacts_bin"])) {
    $key = $_POST["key_contacts_code"];

    if ($key == '1234') {
        header('Location: pages/key_contacts.php');
    }
}

if (isset($_POST["my_personal_wishes_bin"])) {
    $key = $_POST["my_personal_wishes_code"];

    if ($key == '1234') {
        header('Location: my_personal_wishes.php');
    }
}

if (isset($_POST["last_words_bin"])) {
    $key = $_POST["last_words_code"];

    if ($key == '1234') {
        header('Location: last_words.php');
    }
}

if (isset($_POST["my_death_bin"])) {
    $key = $_POST["my_death_code"];

    if ($key == '1234') {
        header('Location: pages/death_bins.php');
    }
}

if (isset($_POST["my_documents_bin"])) {
    $key = $_POST["my_documents_code"];

    if ($key == '1234') {
        header('Location: pages/important_documents_bins.php');
    }
}

if (isset($_POST["pets_bin"])) {
    $key = $_POST["pets_code"];

    if ($key == '1234') {
        header('Location: pages/pets.php');
    }
}

if (isset($_POST["travel_bin"])) {
    $key = $_POST["travel_code"];

    if ($key == '1234') {
        header('Location: pages/travel_bins.php');
    }
}

if (isset($_POST["ancestry_bin"])) {
    $key = $_POST["ancestry_code"];

    if ($key == '1234') {
        header('Location: pages/ancestry.php');
    }
}

if (isset($_POST["tax_bin"])) {
    $key = $_POST["tax_code"];

    if ($key == '1234') {
        header('Location: pages/tax_bins.php');
    }
}

if (isset($_POST["insurance_bin"])) {
    $key = $_POST["insurance_code"];

    if ($key == '1234') {
        header('Location: pages/insurance_bins.php');
    }
}

if (isset($_POST["passwords_bin"])) {
    $key = $_POST["passwords_code"];

    if ($key == '1234') {
        header('Location: pages/passwords.php');
    }
}

if (isset($_POST["additional_services_bin"])) {
    $key = $_POST["additional_services_code"];

    if ($key == '1234') {
        header('Location: pages/additional_services.php');
    }
}

if (isset($_POST["crypto_bin"])) {
    $key = $_POST["crypto_code"];

    if ($key == '1234') {
        header('Location: pages/crypto_bins.php');
    }
}

