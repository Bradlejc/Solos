<?php

$error_array = [];

date_default_timezone_set('America/New_York');

if (isset($_POST['personal_information_btn'])) {

  $user_id = $user['id'];

  // need to validate fields TO DO

  $full_legal_name = $_POST['full_legal_name'];
  $maiden_name = $_POST['maiden_name'];
  $DOB = $_POST['dob'];
  $place_of_birth = $_POST['place_of_birth'];
  $ssn = $_POST['ssn'];
  $address = $_POST['address'];
  $passport_number = $_POST['passport_number'];
  $drivers_license_number = $_POST['drivers_license_number'];
  $po_box_number = $_POST['po_box_number'];
  $church_affiliation = $_POST['church_affiliation'];
  $military_service = $_POST['military_service'];
  $education = $_POST['education'];
  $occupation = $_POST['occupation'];
  $citizenship = $_POST['citizenship'];
  $spouse_other = $_POST['spouse_other'];
  $phone_pin_code = $_POST['phone_pin_code'];
  $email_address = $_POST['email_address'];
  $email_password = $_POST['email_password'];

  $parents = $_POST['parents'];
  $siblings = $_POST['siblings'];

  $date = date('Y-m-d H:i:s');

  // update fields TO DO

  $query = mysqli_query($conn, "INSERT INTO personal_information VALUES ('$user_id', 
      '$full_legal_name', '$maiden_name', '$DOB', '$place_of_birth', '$ssn', '$address', '$passport_number',
      '$drivers_license_number', '$po_box_number', '$church_affiliation', 
      '$military_service', '$education', '$occupation', '$citizenship', '$spouse_other', '$phone_pin_code', '$email_address', '$email_password', '$date')");

  $parent_result = array_unique($parents);

  foreach ($parent_result as $parent) {
    if (!empty($parent)) {
      $parent_query = mysqli_query($conn, "INSERT INTO parents VALUES ('$user_id', 
      '$parent')");
    }
  }

  $sibling_result = array_unique($siblings);

  foreach ($sibling_result as $sibling) {
    if (!empty($sibling)) {
      $sibling_query = mysqli_query($conn, "INSERT INTO siblings VALUES ('$user_id', 
      '$sibling')");
    }
  }

  array_push($error_array, '<div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
        Record Saved!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>');

}

if (isset($_POST['update_personal_information_btn'])) {

  $user_id = $user['id'];

  // need to validate fields TO DO

  $full_legal_name = $_POST['full_legal_name'];
  $maiden_name = $_POST['maiden_name'];
  $DOB = $_POST['dob'];
  $place_of_birth = $_POST['place_of_birth'];
  $ssn = $_POST['ssn'];
  $address = $_POST['address'];
  $passport_number = $_POST['passport_number'];
  $drivers_license_number = $_POST['drivers_license_number'];
  $po_box_number = $_POST['po_box_number'];
  $parents = $_POST['parents'];
  $siblings = $_POST['siblings'];
  $church_affiliation = $_POST['church_affiliation'];
  $military_service = $_POST['military_service'];
  $education = $_POST['education'];
  $occupation = $_POST['occupation'];
  $citizenship = $_POST['citizenship_information'];
  $spouse_other = $_POST['spouse_other'];
  $phone_pin_code = $_POST['phone_pin_code'];
  $email_address = $_POST['email_address'];
  $email_password = $_POST['email_password'];

  // TO DO: Add all fields to update statement
  $query = mysqli_query($conn, "UPDATE personal_information SET 
      legal_name='$full_legal_name', maiden_name='$maiden_name', education='$education', occupation='$occupation', citizenship_information='$citizenship', place_of_birth='$place_of_birth' WHERE id='$user_id'");

  $delete_curr_parents_query = mysqli_query($conn, "DELETE FROM parents WHERE id='$user_id'");

  $check_curr_parents_query = mysqli_query($conn, "SELECT parent_name FROM parents WHERE id='$user_id'");

  $unique_parent = array_unique($parents);

  foreach ($unique_parent as $parent) {
    // inserts only the first time
    if (mysqli_num_rows($check_curr_parents_query) == 0) {
      if (!empty($parent)) {
        $parent_query = mysqli_query($conn, "INSERT INTO parents VALUES ('$user_id', 
          '$parent')");
      }
    }
  }

  $delete_curr_sibings_query = mysqli_query($conn, "DELETE FROM siblings WHERE id='$user_id'");

  $check_curr_siblings_query = mysqli_query($conn, "SELECT sibling_name FROM siblings WHERE id='$user_id'");

  $unique_sibling = array_unique($siblings);

  foreach ($unique_sibling as $sibling) {
    // inserts only the first time
    if (mysqli_num_rows($check_curr_siblings_query) == 0) {
      if (!empty($sibling)) {
        $sibling_query = mysqli_query($conn, "INSERT INTO siblings VALUES ('$user_id', 
          '$sibling')");
      }
    }
  }

  array_push($error_array, '<div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
        Record Saved!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>');

}

?>