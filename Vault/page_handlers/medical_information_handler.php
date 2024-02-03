<?php

$error_array = [];

date_default_timezone_set('America/New_York');

if (isset($_POST['medical_information_btn'])) {

  $user_id = $user['id'];

  // need to validate fields TO DO

  $medical_advocate = $_POST['medical_advocate'];
  $blood_type = $_POST['blood_type'];
  $primary_care_physician = $_POST['primary_care_physician'];
  $primary_care_physician_number = $_POST['primary_care_physician_number'];
  $preferred_hospital = $_POST['preferred_hospital'];
  $preferred_hospital_address = $_POST['preferred_hospital_address'];
  $preferred_pharmacy = $_POST['preferred_pharmacy'];
  $preferred_pharmacy_number = $_POST['preferred_pharmacy_number'];
  $preferred_pharmacy_address = $_POST['preferred_pharmacy_address'];
  $family_health_history = $_POST['family_health_history'];
  $organ_donation = $_POST['organ_donation'];

  $medical_conditions = $_POST['medical_conditions'];
  $medications = $_POST['medications'];
  $allergies = $_POST['allergies'];

  $date = date('Y-m-d H:i:s');

  // update fields TO DO

  $query = mysqli_query($conn, "INSERT INTO medical_information VALUES ('$user_id', '$medical_advocate', '$blood_type', '$primary_care_physician', 
  '$primary_care_physician_number', '$preferred_hospital', '$preferred_hospital_address', '$preferred_pharmacy', 
  '$preferred_pharmacy_number', '$preferred_pharmacy_address', '$family_health_history', '$organ_donation', '$date')");

  $medical_conditions_result = array_unique($medical_conditions);

  foreach ($medical_conditions_result as $medical_condition) {
    if (!empty($medical_condition)) {
      $medical_condition_query = mysqli_query($conn, "INSERT INTO medical_conditions VALUES ('$user_id', 
    '$medical_condition')");
    }
  }

  $medications_result = array_unique($medications);

  foreach ($medications_result as $medication) {
    if (!empty($medication)) {
      $medication_query = mysqli_query($conn, "INSERT INTO medications VALUES ('$user_id', 
    '$medication')");
    }
  }

  $allergies_result = array_unique($allergies);

  foreach ($allergies_result as $allergy) {
    if (!empty($allergy)) {
      $allergy_query = mysqli_query($conn, "INSERT INTO allergies VALUES ('$user_id', 
    '$allergy')");
    }
  }

  array_push($error_array, '<div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
        Record Saved!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>');

}

if (isset($_POST['update_medical_information_btn'])) {

  $user_id = $user['id'];

  // need to validate fields TO DO

  $medical_advocate = $_POST['medical_advocate'];
  $blood_type = $_POST['blood_type'];
  $primary_care_physician = $_POST['primary_care_physician'];
  $primary_care_physician_number = $_POST['primary_care_physician_number'];
  $preferred_hospital = $_POST['preferred_hospital'];
  $preferred_hospital_address = $_POST['preferred_hospital_address'];
  $preferred_pharmacy = $_POST['preferred_pharmacy'];
  $preferred_pharmacy_number = $_POST['preferred_pharmacy_number'];
  $preferred_pharmacy_address = $_POST['preferred_pharmacy_address'];
  $family_health_history = $_POST['family_health_history'];
  $organ_donation = $_POST['organ_donation'];

  $medical_conditions = $_POST['medical_conditions'];
  $medications = $_POST['medications'];
  $allergies = $_POST['allergies'];

  $date = date('Y-m-d H:i:s');

  // update fields TO DO

  $query = mysqli_query($conn, "UPDATE medical_information SET medical_advocate='$medical_advocate', blood_type='$blood_type', primary_care_physician='$primary_care_physician', 
  primary_care_physician_number='$primary_care_physician_number', preferred_hospital='$preferred_hospital', preferred_hospital_address='$preferred_hospital_address', preferred_pharmacy='$preferred_pharmacy', 
  preferred_pharmacy_number='$preferred_pharmacy_number', preferred_pharmacy_address='$preferred_pharmacy_address', family_health_history='$family_health_history', organ_donation='$organ_donation' WHERE id='$user_id'");

  $delete_curr_medical_conditions_query = mysqli_query($conn, "DELETE FROM medical_conditions WHERE id='$user_id'");

  $check_curr_medical_conditions_query = mysqli_query($conn, "SELECT medical_condition FROM medical_conditions WHERE id='$user_id'");

  $medical_conditions_result = array_unique($medical_conditions);

  foreach ($medical_conditions_result as $medical_condition) {
    if (mysqli_num_rows($check_curr_medical_conditions_query) == 0) {
      if (!empty($medical_condition)) {
        $medical_condition_query = mysqli_query($conn, "INSERT INTO medical_conditions VALUES ('$user_id', 
    '$medical_condition')");
      }
    }
  }

  $delete_curr_medications_query = mysqli_query($conn, "DELETE FROM medications WHERE id='$user_id'");

  $check_curr_medications_query = mysqli_query($conn, "SELECT medication FROM medications WHERE id='$user_id'");

  $medications_result = array_unique($medications);

  foreach ($medications_result as $medication) {
    if (mysqli_num_rows($check_curr_medications_query) == 0) {
      if (!empty($medication)) {
        $medication_query = mysqli_query($conn, "INSERT INTO medications VALUES ('$user_id', 
    '$medication')");
      }
    }
  }

  $delete_curr_allergies_query = mysqli_query($conn, "DELETE FROM allergies WHERE id='$user_id'");

  $check_curr_allergies_query = mysqli_query($conn, "SELECT allergy FROM allergies WHERE id='$user_id'");

  $allergies_result = array_unique($allergies);

  foreach ($allergies_result as $allergy) {
    if (mysqli_num_rows($check_curr_allergies_query) == 0) {
      if (!empty($allergy)) {
        $allergy_query = mysqli_query($conn, "INSERT INTO allergies VALUES ('$user_id', 
    '$allergy')");
      }
    }
  }

  array_push($error_array, '<div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
        Record Saved!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>');

}

?>