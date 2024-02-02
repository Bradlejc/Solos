$(document).ready(function () {
    $(".add_parent_btn").click(function (e) {
        e.preventDefault();
        $(".show_parent_item").after(`
        <div class="col-md-6 col-lg-3 remove_parent_item">
        <div class="input-group h-100">
            <input type="text" name="parents[]" class="form-control shadow-none" placeholder="Add parent">
            <button class="btn btn-danger remove_parent_btn">-</button>
        </div>
        </div>
    `);
    });

    $(document).on('click', '.remove_parent_btn', function (e) {
        e.preventDefault();
        let row_item = $(this).parent().parent();
        $(row_item).remove();
    });

    $(".add_sibling_btn").click(function (e) {
        e.preventDefault();
        $(".show_sibling_item").after(`
        <div class="col-md-6 col-lg-3 remove_sibling_item">
        <div class="input-group h-100">
            <input type="text" name="siblings[]" class="form-control shadow-none" placeholder="Add sibling">
            <button class="btn btn-danger remove_sibling_btn">-</button>
        </div>
        </div>
    `);
    });

    $(document).on('click', '.remove_sibling_btn', function (e) {
        e.preventDefault();
        let row_item = $(this).parent().parent();
        $(row_item).remove();
    });

    $(".add_medical_condition_btn").click(function (e) {
        e.preventDefault();
        $(".show_medical_condition_item").after(`
        <div class="col-md-6 col-lg-3 remove_medical_condition_item">
        <div class="input-group h-100">
            <input type="text" name="medical_conditions[]" class="form-control shadow-none" placeholder="Add medical condition">
            <button class="btn btn-danger remove_medical_condition_btn">-</button>
        </div>
        </div>
    `);
    });

    $(document).on('click', '.remove_medical_condition_btn', function (e) {
        e.preventDefault();
        let row_item = $(this).parent().parent();
        $(row_item).remove();
    });

    $(".add_medication_btn").click(function (e) {
        e.preventDefault();
        $(".show_medication_item").after(`
        <div class="col-md-6 col-lg-3 remove_medication_item">
        <div class="input-group h-100">
            <input type="text" name="medications[]" class="form-control shadow-none" placeholder="Add medication">
            <button class="btn btn-danger remove_medication_btn">-</button>
        </div>
        </div>
    `);
    });

    $(document).on('click', '.remove_medication_btn', function (e) {
        e.preventDefault();
        let row_item = $(this).parent().parent();
        $(row_item).remove();
    });

    $(".add_allergy_btn").click(function (e) {
        e.preventDefault();
        $(".show_allergy_item").after(`
        <div class="col-md-6 col-lg-3 remove_allergy_item">
        <div class="input-group h-100">
            <input type="text" name="allergies[]" class="form-control shadow-none" placeholder="Add allergy">
            <button class="btn btn-danger remove_allergy_btn">-</button>
        </div>
        </div>
    `);
    });

    $(document).on('click', '.remove_allergy_btn', function (e) {
        e.preventDefault();
        let row_item = $(this).parent().parent();
        $(row_item).remove();
    });

    $(".add_notification_btn").click(function (e) {
        e.preventDefault();
        $(".show_notification_item").after(`
        <div class="row g-3 remove_notification_item">
            <div class="col-md-4 col-lg-4">
                <div class="form-floating">
                    <input type="text" class="form-control shadow-none" name="Name[]" id="floatingInput"
                        placeholder="Name">
                    <label for="floatingInput">Name</label>
                </div>
            </div>

            <div class="col-md-4 col-lg-4">
                <div class="form-floating">
                    <input type="text" class="form-control shadow-none" name="Phone[]" id="floatingInput"
                        placeholder="Phone">
                    <label for="floatingInput">Phone</label>
                </div>
            </div>

            <div class="col-md-4 col-lg-4">
                <div class="form-floating">
                    <input type="text" class="form-control shadow-none" name="Details[]" id="floatingInput"
                        placeholder="Details">
                    <label for="floatingInput">Details</label>
                </div>
            </div>

        <div class="col-md-4 col-lg-4 mx-auto pb-3">
            <div class="form-floating">
                <button type="button"
                    class="btn btn-danger text-center w-100 remove_notification_btn">Remove <i class="fa-solid fa-minus"></i></button>
            </div>
        </div>
    </div>
    `);
    });

    $(document).on('click', '.remove_notification_btn', function (e) {
        e.preventDefault();
        let row_item = $(this).parent().parent().parent();
        $(row_item).remove();
    });

    $('.personal_information_bins').hide().fadeIn(500);

    $('.bins').hide().fadeIn(500);

    $(".add_lifeinsurance_btn").click(function (e) {
        e.preventDefault();
        $(".new_lifeinsurance").after(`
        <hr>
        <div class="row g-3 remove_lifeinsurance">
        <div class="col-md-6 col-lg-3">
            <div class="form-floating">
                <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                <label for="floatingInput">Type of Policy</label>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="form-floating">
                <input type="text" name="maiden_name" class="form-control shadow-none" id="floatingInput">
                <label for="floatingInput">Account Number</label>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="form-floating">
                <input type="text" name="dob" class="form-control shadow-none" id="floatingInput">
                <label for="floatingInput">Contacts</label>
            </div>
        </div>

        <div class=" col-md-6 col-lg-3">
            <div class="form-floating">
                <input type="text" name="place_of_birth" class="form-control shadow-none" id="floatingInput">
                <label for="floatingInput">Amount</label>
            </div>
        </div>

        <div class=" col-md-6 col-lg-3">
            <div class="form-floating">
                <input type="text" name="ssn" class="form-control shadow-none" id="floatingInput">
                <label for="floatingInput">Beneficiary</label>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="form-floating">
                <input type="text" name="address" class="form-control shadow-none" id="floatingInput">
                <label for="floatingInput">Notes</label>
            </div>
        </div>

    </div>
    `);
    });

    $(".add_socialsecurity_btn").click(function (e) {
        e.preventDefault();
        $(".new_socialsecurity").after(`
        <hr>
        <div class="row g-3 remove_socialsecurity">
            <div class="col-md-6 col-lg-3">
            <div class="form-floating">
                <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                <label for="floatingInput">Beneficiary</label>
            </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="form-floating">
                    <input type="text" name="maiden_name" class="form-control shadow-none" id="floatingInput">
                    <label for="floatingInput">Account Number</label>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="form-floating">
                    <input type="text" name="dob" class="form-control shadow-none" id="floatingInput">
                    <label for="floatingInput">Contacts</label>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="form-floating">
                    <input type="text" name="address" class="form-control shadow-none" id="floatingInput">
                    <label for="floatingInput">Notes</label>
                </div>
            </div>
        </div>
    `);
    });

    $(".add_employeebenefits_btn").click(function (e) {
        e.preventDefault();
        $(".new_employeebenefits").after(`
        <hr>
        <div class="row g-3 remove_employeebenefits">
            <div class="col-md-6 col-lg-3">
            <div class="form-floating">
                <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                <label for="floatingInput">Beneficiary</label>
            </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="form-floating">
                    <input type="text" name="maiden_name" class="form-control shadow-none" id="floatingInput">
                    <label for="floatingInput">Account Number</label>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="form-floating">
                    <input type="text" name="dob" class="form-control shadow-none" id="floatingInput">
                    <label for="floatingInput">Contacts</label>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="form-floating">
                    <input type="text" name="address" class="form-control shadow-none" id="floatingInput">
                    <label for="floatingInput">Notes</label>
                </div>
            </div>
        </div>
    `);
    });

    $(".add_retirement_btn").click(function (e) {
        e.preventDefault();
        $(".new_retirement").after(`
        <hr>
        <div class="row g-3 remove_retirement">
            <div class="col-md-6 col-lg-3">
            <div class="form-floating">
                <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                <label for="floatingInput">Beneficiary</label>
            </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="form-floating">
                    <input type="text" name="maiden_name" class="form-control shadow-none" id="floatingInput">
                    <label for="floatingInput">Account Number</label>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="form-floating">
                    <input type="text" name="dob" class="form-control shadow-none" id="floatingInput">
                    <label for="floatingInput">Contacts</label>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="form-floating">
                    <input type="text" name="address" class="form-control shadow-none" id="floatingInput">
                    <label for="floatingInput">Notes</label>
                </div>
            </div>
        </div>
    `);
    });

    $(".add_veteransbenefit_btn").click(function (e) {
        e.preventDefault();
        $(".new_veteransbenefit").after(`
        <hr>
        <div class="row g-3 remove_veteransbenefit">
            <div class="col-md-6 col-lg-3">
            <div class="form-floating">
                <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                <label for="floatingInput">Beneficiary</label>
            </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="form-floating">
                    <input type="text" name="maiden_name" class="form-control shadow-none" id="floatingInput">
                    <label for="floatingInput">Account Number</label>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="form-floating">
                    <input type="text" name="dob" class="form-control shadow-none" id="floatingInput">
                    <label for="floatingInput">Contacts</label>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="form-floating">
                    <input type="text" name="address" class="form-control shadow-none" id="floatingInput">
                    <label for="floatingInput">Notes</label>
                </div>
            </div>
        </div>
    `);
    });

    $(".add_attorney_btn").click(function (e) {
        e.preventDefault();
        $(".last_attorney").after(`

        <div class="col-md-6 col-lg-4">
            <div class="form-floating">
                <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                <label for="floatingInput">Attorney</label>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="form-floating">
                <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                <label for="floatingInput">Attorney Number</label>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="form-floating">
                <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                <label for="floatingInput">Attorney Email</label>
            </div>
        </div>
    `);
    });

    $(".add_accountant_btn").click(function (e) {
        e.preventDefault();
        $(".last_accountant").after(`
        <div class="col-md-6 col-lg-4">
            <div class="form-floating">
                <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                <label for="floatingInput">Accountant</label>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="form-floating">
                <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                <label for="floatingInput">Accountant Number</label>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="form-floating">
                <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                <label for="floatingInput">Accountant Email</label>
            </div>
        </div>
    `);
    });

    $(".add_taxpreparer_btn").click(function (e) {
        e.preventDefault();
        $(".last_taxpreparer").after(`
        <div class="col-md-6 col-lg-4">
            <div class="form-floating">
                <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                <label for="floatingInput">Tax Preparer</label>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="form-floating">
                <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                <label for="floatingInput">Tax Preparer Number</label>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="form-floating">
                <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                <label for="floatingInput">Tax Preparer Email</label>
            </div>
        </div>
    `);
    });

    $(".add_financialadvisor_btn").click(function (e) {
        e.preventDefault();
        $(".last_financialadvisor").after(`
        <div class="col-md-6 col-lg-4">
            <div class="form-floating">
                <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                <label for="floatingInput">Financial Advisor</label>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="form-floating">
                <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                <label for="floatingInput">Financial Advisor Number</label>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="form-floating">
                <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                <label for="floatingInput">Financial Advisor Email</label>
            </div>
        </div>
    `);
    });

    $(".add_insuranceagent_btn").click(function (e) {
        e.preventDefault();
        $(".last_insuranceagent").after(`
        <div class="col-md-6 col-lg-4">
            <div class="form-floating">
                <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                <label for="floatingInput">Insurance Agent</label>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="form-floating">
                <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                <label for="floatingInput">Insurance Agent Number</label>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="form-floating">
                <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                <label for="floatingInput">Insurance Agent Email</label>
            </div>
        </div>
    `);
    });

    $(".add_realestate_btn").click(function (e) {
        e.preventDefault();
        $(".new_realestate").after(`
        <hr>
        <div class="row g-3">
        <div class="col-md-6 col-lg-3">
        <div class="form-floating">
            <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
            <label for="floatingInput">Address</label>
        </div>
    </div>

    <div class="col-md-6 col-lg-3">
        <div class="form-floating">
            <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
            <label for="floatingInput">Co-owners</label>
        </div>
    </div>

    <div class="col-md-6 col-lg-3">
        <div class="form-floating">
            <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
            <label for="floatingInput">Home Security Company</label>
        </div>
    </div>

    <div class="col-md-6 col-lg-3">
        <div class="form-floating">
            <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
            <label for="floatingInput">Home Security Number</label>
        </div>
    </div>

    <div class="col-md-6 col-lg-3">
        <div class="form-floating">
            <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
            <label for="floatingInput">Legal Documents</label>
        </div>
    </div>

    <div class="col-md-6 col-lg-3">
        <div class="form-floating">
            <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
            <label for="floatingInput">Keys</label>
        </div>
    </div>
    </div>
    `);
    });

    $(".add_vehicle_btn").click(function (e) {
        e.preventDefault();
        $(".new_vehicle").after(`
        <hr>
        <div class="row g-3">
        <div class="col-md-6 col-lg-3">
            <div class="form-floating">
                <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                <label for="floatingInput">Year</label>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="form-floating">
                <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                <label for="floatingInput">Make</label>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="form-floating">
                <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                <label for="floatingInput">Model</label>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="form-floating">
                <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                <label for="floatingInput">VIN</label>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="form-floating">
                <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                <label for="floatingInput">Key Location</label>
            </div>
        </div>
    </div>
    `);
    });

    $(".add_hierloom_btn").click(function (e) {
        e.preventDefault();
        $(".new_hierloom").after(`
        <hr>
        <div class="row g-3">
        <div class="col-md-6 col-lg-3">
            <div class="form-floating">
                <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                <label for="floatingInput">Item</label>
            </div>
        </div>
    
        <div class="col-md-6 col-lg-3">
            <div class="form-floating">
                <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                <label for="floatingInput">Location</label>
            </div>
        </div>
    </div>
    `);
    });

    $(".add_other_btn").click(function (e) {
        e.preventDefault();
        $(".new_other").after(`
        <hr>
        <div class="row g-3">
        <div class="col-md-6 col-lg-3">
            <div class="form-floating">
                <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                <label for="floatingInput">Item</label>
            </div>
        </div>
    </div>
    `);
    });

    $(".add_storageunit_btn").click(function (e) {
        e.preventDefault();
        $(".new_storageunit").after(`
        <hr>
        <div class="row g-3">
        <div class="col-md-6 col-lg-3">
            <div class="form-floating">
                <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                <label for="floatingInput">Company</label>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="form-floating">
                <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                <label for="floatingInput">Address</label>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="form-floating">
                <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                <label for="floatingInput">Keys/Bin Number</label>
            </div>
        </div>
    </div>
    `);
    });

    $(".add_pet_btn").click(function (e) {
        e.preventDefault();
        $(".new_pet").after(`
        <hr>
        <div class="row g-3">
        <div class="col-md-6 col-lg-3">
            <div class="form-floating">
                <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                <label for="floatingInput">Pet Name</label>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="form-floating">
                <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                <label for="floatingInput">Breed</label>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="form-floating">
                <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                <label for="floatingInput">Age</label>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="form-floating">
                <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                <label for="floatingInput">Health Conditions</label>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="form-floating">
                <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                <label for="floatingInput">Vet Name</label>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="form-floating">
                <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                <label for="floatingInput">Vet Number</label>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="form-floating">
                <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                <label for="floatingInput">Pet Policy</label>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="form-floating">
                <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                <label for="floatingInput">Pet Policy Number</label>
            </div>
        </div>

        <div class="row g-3 mt-3">
        <div class="col-md-6 col-lg-3">
            <label for="formFile" class="form-label"><strong>Upload Picture</strong></label>
            <input class="form-control" type="file" id="formFile">
        </div>
        </div>

    </div>

    `);
    });

    $(".add_airline_btn").click(function (e) {
        e.preventDefault();
        $(".new_airline").after(`
        <hr>
        <div class="row g-3">
        <div class="col-md-6 col-lg-3">
            <div class="form-floating">
                <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                <label for="floatingInput">Airline Name</label>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="form-floating">
                <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                <label for="floatingInput">Name of Owner</label>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="form-floating">
                <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                <label for="floatingInput">Username</label>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="form-floating">
                <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                <label for="floatingInput">Password</label>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="form-floating">
                <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                <label for="floatingInput">Skymile Number</label>
            </div>
        </div>
    </div>
    `);
    });

    $(".add_hotel_btn").click(function (e) {
        e.preventDefault();
        $(".new_hotel").after(`
        <hr>
        <div class="row g-3">
        <div class="col-md-6 col-lg-3">
            <div class="form-floating">
                <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                <label for="floatingInput">Hotel Name</label>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="form-floating">
                <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                <label for="floatingInput">Name of Owner</label>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="form-floating">
                <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                <label for="floatingInput">Username</label>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="form-floating">
                <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                <label for="floatingInput">Password</label>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="form-floating">
                <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                <label for="floatingInput">Member Number</label>
            </div>
        </div>
    </div>
    `);
    });

    $(".add_ancestor_btn").click(function (e) {
        e.preventDefault();
        $(".new_ancestor").after(`
        <hr>
        <div class="row g-3">
        <div class="col-md-6 col-lg-3">
            <div class="form-floating">
                <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                <label for="floatingInput">Name</label>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="form-floating">
                <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                <label for="floatingInput">Relation</label>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="form-floating">
                <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                <label for="floatingInput">Address</label>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="form-floating">
                <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                <label for="floatingInput">City</label>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="form-floating">
                <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                <label for="floatingInput">State</label>
            </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-center">
            <label for="formFile" class="form-label"><strong>Family Tree</strong></label>
            <input class="form-control" type="file" id="formFile">
        </div>
    </div>
    `);
    });

    $(".add_personal_insurance_btn").click(function (e) {
        e.preventDefault();
        $(".new_personal_insurance").after(`
        <hr>
        <div class="row g-3">
        <div class="col-md-6 col-lg-3">
        <select name="blood_type" class="form-select w-100 h-100 shadow-none" placeholder="Policy Type">
            <option disabled selected>Policy Type</option>
            <option value="O Positive">Life</option>
            <option value="O Negative">LTC</option>
            <option value="A Positive">Disability</option>
            <option value="A Negative">Property</option>
            <option value="B Positive">Pet</option>
            <option value="B Negative">Rental</option>
            <option value="AB Positive">Auto</option>
            <option value="AB Negative">Homeowners</option>
            <option value="AB Negative">Health</option>
            <option value="AB Negative">Dental</option>
            <option value="AB Negative">Vision</option>
        </select>
    </div>

    <div class="col-md-6 col-lg-3">
        <div class="form-floating">
            <input type="text" class="form-control shadow-none" name="primary_care_physician"
                id="floatingInput" placeholder="Primary Care Physician">
            <label for="floatingInput">Insurance Agent Name</label>
        </div>
    </div>

    <div class="col-md-6 col-lg-3">
        <div class="form-floating">
            <input type="text" class="form-control shadow-none" name="primary_care_physician"
                id="floatingInput" placeholder="Primary Care Physician">
            <label for="floatingInput">Email</label>
        </div>
    </div>

    <div class="col-md-6 col-lg-3">
        <div class="form-floating">
            <input type="text" class="form-control shadow-none" name="primary_care_physician"
                id="floatingInput" placeholder="Primary Care Physician">
            <label for="floatingInput">Phone Number</label>
        </div>
    </div>
    </div>
    `);
    });

    $(".add_medical_insurance_btn").click(function (e) {
        e.preventDefault();
        $(".new_medical_insurance").after(`
        <hr>
        <div class="row g-3">
        <div class="col-md-6 col-lg-3">
        <select name="blood_type" class="form-select w-100 h-100 shadow-none" placeholder="Policy Type">
            <option disabled selected>Policy Type</option>
            <option value="O Positive">Buy Sell</option>
            <option value="O Negative">Liability</option>
            <option value="A Positive">Key Man</option>
            <option value="A Negative">Property</option>
            <option value="B Positive">E & O</option>
        </select>
    </div>

    <div class="col-md-6 col-lg-3">
        <div class="form-floating">
            <input type="text" class="form-control shadow-none" name="primary_care_physician"
                id="floatingInput" placeholder="Primary Care Physician">
            <label for="floatingInput">Insurance Agent Name</label>
        </div>
    </div>

    <div class="col-md-6 col-lg-3">
        <div class="form-floating">
            <input type="text" class="form-control shadow-none" name="primary_care_physician"
                id="floatingInput" placeholder="Primary Care Physician">
            <label for="floatingInput">Email</label>
        </div>
    </div>

    <div class="col-md-6 col-lg-3">
        <div class="form-floating">
            <input type="text" class="form-control shadow-none" name="primary_care_physician"
                id="floatingInput" placeholder="Primary Care Physician">
            <label for="floatingInput">Phone Number</label>
        </div>
    </div>

    <div class="col-md-6 col-lg-3">
        <div class="form-floating">
            <input type="text" class="form-control shadow-none" name="primary_care_physician"
                id="floatingInput" placeholder="Primary Care Physician">
            <label for="floatingInput">Policy Number</label>
        </div>
    </div>

    <div class="col-md-6 col-lg-3">
        <div class="form-floating">
            <input type="text" class="form-control shadow-none" name="primary_care_physician"
                id="floatingInput" placeholder="Primary Care Physician">
            <label for="floatingInput">Description</label>
        </div>
    </div>
    </div>
    `);
    });

    $(".add_personal_tax_btn").click(function (e) {
        e.preventDefault();
        $(".new_personal_tax").after(`
        <hr>
        <div class="row g-3">
        <div class="col-md-6 col-lg-3">
        <div class="form-floating">
            <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
            <label for="floatingInput">Description</label>
        </div>
    </div>

    <div class="col-md-6 col-lg-3">
        <div class="form-floating">
            <select id="date-dropdown" class="form-select w-100 h-100 shadow-none" placeholder="Tax Year">
                <option value="" hidden>Tax Year</option>
            </select>
        </div>
    </div>
    </div>
    `);
    });

    $(".add_business_tax_btn").click(function (e) {
        e.preventDefault();
        $(".new_business_tax").after(`
        <hr>
        <div class="row g-3">
        <div class="col-md-6 col-lg-3">
        <div class="form-floating">
            <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
            <label for="floatingInput">Description</label>
        </div>
    </div>

    <div class="col-md-6 col-lg-3">
        <div class="form-floating">
            <select id="date-dropdown" class="form-select w-100 h-100 shadow-none" placeholder="Tax Year">
                <option value="" hidden>Tax Year</option>
            </select>
        </div>
    </div>
    </div>
    `);
    });

    $(".add_password_btn").click(function (e) {
        e.preventDefault();
        $(".new_password").after(`
        <hr>
        <div class="row g-3 remove_employeebenefits">
            <div class="col-md-6 col-lg-3">
            <div class="form-floating">
                <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                <label for="floatingInput">Description</label>
            </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="form-floating">
                    <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                    <label for="floatingInput">Email</label>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="form-floating">
                    <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                    <label for="floatingInput">Username</label>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="form-floating">
                    <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                    <label for="floatingInput">Password</label>
                </div>
            </div>
        </div>
    `);
    });

    $(".add_wish_btn").click(function (e) {
        e.preventDefault();
        $(".new_wish").after(`
        <hr>
        <div class="row g-3">
        <div class="col-md-6 col-lg-6">
        <div class="form-floating">
            <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
            <label for="floatingInput">What else I would like</label>
        </div>
    </div>
    </div>
    `);
    });

    $(".add_lastwords_btn").click(function (e) {
        e.preventDefault();
        $(".new_lastwords").append(`
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-0 shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs fw-bold text-dark text-uppercase mb-1">
                                Recipient 
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fa-solid fa-note-sticky fa-2x text-secondary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    `);
    });

    $(".add_newpassword_btn").click(function (e) {
        e.preventDefault();
        $(".new_password").after(`
        <hr>
        <div class="row g-3">
        <div class="col-md-6 col-lg-3">
        <div class="form-floating">
            <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
            <label for="floatingInput">Description</label>
        </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="form-floating">
                <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                <label for="floatingInput">Email</label>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="form-floating">
                <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                <label for="floatingInput">Username</label>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="form-floating">
                <input type="text" name="full_legal_name" class="form-control shadow-none" id="floatingInput">
                <label for="floatingInput">Password</label>
            </div>
        </div>
        </div>
    `);
    });

    $(".add_healthcondition_btn").click(function (e) {
        e.preventDefault();
        $(".show_healthcondition_item").after(`
        <div class="col-md-6 col-lg-3 remove_healthcondition_item">
        <div class="input-group h-100">
            <input type="text" name="healthconditions[]" class="form-control shadow-none" placeholder="Add health condition">
            <button class="btn btn-danger remove_healthcondition_btn">-</button>
        </div>
        </div>
    `);
    });

    $(document).on('click', '.remove_medication_btn', function (e) {
        e.preventDefault();
        let row_item = $(this).parent().parent();
        $(row_item).remove();
    });

});

