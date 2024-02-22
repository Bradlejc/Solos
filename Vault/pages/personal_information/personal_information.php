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
    <title>Personal Information</title>

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
                    <h1 class="fw-bold">Personal Information</h1>
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
                        <label for="floatingInput">Full Legal Name</label>
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
                        <label for="floatingInput">Birth Place</label>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="form-floating">
                        <input type="text" name="address" class="form-control shadow-none" id="floatingInput">
                        <label for="floatingInput">Address</label>
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
                    <select name="education" class="form-select w-100 h-100 shadow-none" placeholder="Education">
                        <option disabled selected>Education</option>
                        <option value="No formal education">No formal education</option>
                        <option value="Primary education">Primary education</option>
                        <option value="Secondary education">Secondary education or high school</option>
                        <option value="GED">GED</option>
                        <option value="Vocational qualification">Vocational qualification</option>
                        <option value="Bachelor's degree">Bachelor's degree</option>
                        <option value="Master's degree">Master's degree</option>
                        <option value="Doctorate or higher">Doctorate or higher</option>
                    </select>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="form-floating">
                        <input type="text" name="occupation" class="form-control shadow-none" id="floatingInput">
                        <label for="floatingInput">Occupation</label>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <select name="citizenship" class="form-select w-100 h-100 shadow-none" placeholder="Citizenship">
                        <option disabled selected>Citizenship</option>
                        <option value='afghan'>Afghan</option>
                        <option value='albanian'>Albanian</option>
                        <option value='algerian'>Algerian</option>
                        <option value='american'>American</option>
                        <option value='andorran'>Andorran</option>
                        <option value='angolan'>Angolan</option>
                        <option value='anguillan'>Anguillan</option>
                        <option value='citizen-of-antigua-and-barbuda'>Citizen of Antigua and Barbuda</option>
                        <option value='argentine'>Argentine</option>
                        <option value='armenianaustralian'>ArmenianAustralian</option>
                        <option value='austrian'>Austrian</option>
                        <option value='azerbaijani'>Azerbaijani</option>
                        <option value='bahamian'>Bahamian</option>
                        <option value='bahraini'>Bahraini</option>
                        <option value='bangladeshi'>Bangladeshi</option>
                        <option value='barbadian'>Barbadian</option>
                        <option value='belarusian'>Belarusian</option>
                        <option value='belgian'>Belgian</option>
                        <option value='belizean'>Belizean</option>
                        <option value='beninese'>Beninese</option>
                        <option value='bermudian'>Bermudian</option>
                        <option value='bhutanese'>Bhutanese</option>
                        <option value='bolivian'>Bolivian</option>
                        <option value='citizen-of-bosnia-and-herzegovina'>Citizen of Bosnia and Herzegovina</option>
                        <option value='botswanan'>Botswanan</option>
                        <option value='brazilian'>Brazilian</option>
                        <option value='british'>British</option>
                        <option value='british-virgin-islander'>British Virgin Islander</option>
                        <option value='bruneian'>Bruneian</option>
                        <option value='bulgarian'>Bulgarian</option>
                        <option value='burkinan'>Burkinan</option>
                        <option value='burmese'>Burmese</option>
                        <option value='burundian'>Burundian</option>
                        <option value='cambodian'>Cambodian</option>
                        <option value='cameroonian'>Cameroonian</option>
                        <option value='canadian'>Canadian</option>
                        <option value='cape-verdean'>Cape Verdean</option>
                        <option value='cayman-islander'>Cayman Islander</option>
                        <option value='central-african'>Central African</option>
                        <option value='chadian'>Chadian</option>
                        <option value='chilean'>Chilean</option>
                        <option value='chinese'>Chinese</option>
                        <option value='colombian'>Colombian</option>
                        <option value='comoran'>Comoran</option>
                        <option value='congolese-(congo)'>Congolese (Congo)</option>
                        <option value='congolese-(drc)'>Congolese (DRC)</option>
                        <option value='cook-islander'>Cook Islander</option>
                        <option value='costa-rican'>Costa Rican</option>
                        <option value='croatian'>Croatian</option>
                        <option value='cuban'>Cuban</option>
                        <option value='cymraes'>Cymraes</option>
                        <option value='cymro'>Cymro</option>
                        <option value='cypriot'>Cypriot</option>
                        <option value='czech'>Czech</option>
                        <option value='danish'>Danish</option>
                        <option value='djiboutian'>Djiboutian</option>
                        <option value='dominican'>Dominican</option>
                        <option value='citizen-of-the-dominican-republic'>Citizen of the Dominican Republic</option>
                        <option value='dutch'>Dutch</option>
                        <option value='east-timorese'>East Timorese</option>
                        <option value='ecuadorean'>Ecuadorean</option>
                        <option value='egyptian'>Egyptian</option>
                        <option value='emirati'>Emirati</option>
                        <option value='english'>English</option>
                        <option value='equatorial-guinean'>Equatorial Guinean</option>
                        <option value='eritrean'>Eritrean</option>
                        <option value='estonian'>Estonian</option>
                        <option value='ethiopian'>Ethiopian</option>
                        <option value='faroese'>Faroese</option>
                        <option value='fijian'>Fijian</option>
                        <option value='filipino'>Filipino</option>
                        <option value='finnish'>Finnish</option>
                        <option value='french'>French</option>
                        <option value='gabonese'>Gabonese</option>
                        <option value='gambian'>Gambian</option>
                        <option value='georgian'>Georgian</option>
                        <option value='german'>German</option>
                        <option value='ghanaian'>Ghanaian</option>
                        <option value='gibraltarian'>Gibraltarian</option>
                        <option value='greek'>Greek</option>
                        <option value='greenlandic'>Greenlandic</option>
                        <option value='grenadian'>Grenadian</option>
                        <option value='guamanian'>Guamanian</option>
                        <option value='guatemalan'>Guatemalan</option>
                        <option value='citizen-of-guinea-bissau'>Citizen of Guinea-Bissau</option>
                        <option value='guinean'>Guinean</option>
                        <option value='guyanese'>Guyanese</option>
                        <option value='haitian'>Haitian</option>
                        <option value='honduran'>Honduran</option>
                        <option value='hong-konger'>Hong Konger</option>
                        <option value='hungarian'>Hungarian</option>
                        <option value='icelandic'>Icelandic</option>
                        <option value='indian'>Indian</option>
                        <option value='indonesian'>Indonesian</option>
                        <option value='iranian'>Iranian</option>
                        <option value='iraqi'>Iraqi</option>
                        <option value='irish'>Irish</option>
                        <option value='israeli'>Israeli</option>
                        <option value='italian'>Italian</option>
                        <option value='ivorian'>Ivorian</option>
                        <option value='jamaican'>Jamaican</option>
                        <option value='japanese'>Japanese</option>
                        <option value='jordanian'>Jordanian</option>
                        <option value='kazakh'>Kazakh</option>
                        <option value='kenyan'>Kenyan</option>
                        <option value='kittitian'>Kittitian</option>
                        <option value='citizen-of-kiribati'>Citizen of Kiribati</option>
                        <option value='kosovan'>Kosovan</option>
                        <option value='kuwaiti'>Kuwaiti</option>
                        <option value='kyrgyz'>Kyrgyz</option>
                        <option value='lao'>Lao</option>
                        <option value='latvian'>Latvian</option>
                        <option value='lebanese'>Lebanese</option>
                        <option value='liberian'>Liberian</option>
                        <option value='libyan'>Libyan</option>
                        <option value='liechtenstein-citizen'>Liechtenstein citizen</option>
                        <option value='lithuanian'>Lithuanian</option>
                        <option value='luxembourger'>Luxembourger</option>
                        <option value='macanese'>Macanese</option>
                        <option value='macedonian'>Macedonian</option>
                        <option value='malagasy'>Malagasy</option>
                        <option value='malawian'>Malawian</option>
                        <option value='malaysian'>Malaysian</option>
                        <option value='maldivian'>Maldivian</option>
                        <option value='malian'>Malian</option>
                        <option value='maltese'>Maltese</option>
                        <option value='marshallese'>Marshallese</option>
                        <option value='martiniquais'>Martiniquais</option>
                        <option value='mauritanian'>Mauritanian</option>
                        <option value='mauritian'>Mauritian</option>
                        <option value='mexican'>Mexican</option>
                        <option value='micronesian'>Micronesian</option>
                        <option value='moldovan'>Moldovan</option>
                        <option value='monegasque'>Monegasque</option>
                        <option value='mongolian'>Mongolian</option>
                        <option value='montenegrin'>Montenegrin</option>
                        <option value='montserratian'>Montserratian</option>
                        <option value='moroccan'>Moroccan</option>
                        <option value='mosotho'>Mosotho</option>
                        <option value='mozambican'>Mozambican</option>
                        <option value='namibian'>Namibian</option>
                        <option value='nauruan'>Nauruan</option>
                        <option value='nepalese'>Nepalese</option>
                        <option value='new-zealander'>New Zealander</option>
                        <option value='nicaraguan'>Nicaraguan</option>
                        <option value='nigerian'>Nigerian</option>
                        <option value='nigerien'>Nigerien</option>
                        <option value='niuean'>Niuean</option>
                        <option value='north-korean'>North Korean</option>
                        <option value='northern-irish'>Northern Irish</option>
                        <option value='norwegian'>Norwegian</option>
                        <option value='omani'>Omani</option>
                        <option value='pakistani'>Pakistani</option>
                        <option value='palauan'>Palauan</option>
                        <option value='palestinian'>Palestinian</option>
                        <option value='panamanian'>Panamanian</option>
                        <option value='papua-new-guinean'>Papua New Guinean</option>
                        <option value='paraguayan'>Paraguayan</option>
                        <option value='peruvian'>Peruvian</option>
                        <option value='pitcairn-islander'>Pitcairn Islander</option>
                        <option value='polish'>Polish</option>
                        <option value='portuguese'>Portuguese</option>
                        <option value='prydeinig'>Prydeinig</option>
                        <option value='puerto-rican'>Puerto Rican</option>
                        <option value='qatari'>Qatari</option>
                        <option value='romanian'>Romanian</option>
                        <option value='russian'>Russian</option>
                        <option value='rwandan'>Rwandan</option>
                        <option value='salvadorean'>Salvadorean</option>
                        <option value='sammarinese'>Sammarinese</option>
                        <option value='samoan'>Samoan</option>
                        <option value='sao-tomean'>Sao Tomean</option>
                        <option value='saudi-arabian'>Saudi Arabian</option>
                        <option value='scottish'>Scottish</option>
                        <option value='senegalese'>Senegalese</option>
                        <option value='serbian'>Serbian</option>
                        <option value='citizen-of-seychelles'>Citizen of Seychelles</option>
                        <option value='sierra-leonean'>Sierra Leonean</option>
                        <option value='singaporean'>Singaporean</option>
                        <option value='slovak'>Slovak</option>
                        <option value='slovenian'>Slovenian</option>
                        <option value='solomon-islander'>Solomon Islander</option>
                        <option value='somali'>Somali</option>
                        <option value='south-african'>South African</option>
                        <option value='south-korean'>South Korean</option>
                        <option value='south-sudanese'>South Sudanese</option>
                        <option value='spanish'>Spanish</option>
                        <option value='sri-lankan'>Sri Lankan</option>
                        <option value='st-helenian'>St Helenian</option>
                        <option value='st-lucian'>St Lucian</option>
                        <option value='stateless'>Stateless</option>
                        <option value='sudanese'>Sudanese</option>
                        <option value='surinamese'>Surinamese</option>
                        <option value='swazi'>Swazi</option>
                        <option value='swedish'>Swedish</option>
                        <option value='swiss'>Swiss</option>
                        <option value='syrian'>Syrian</option>
                        <option value='taiwanese'>Taiwanese</option>
                        <option value='tajik'>Tajik</option>
                        <option value='tanzanian'>Tanzanian</option>
                        <option value='thai'>Thai</option>
                        <option value='togolese'>Togolese</option>
                        <option value='tongan'>Tongan</option>
                        <option value='trinidadian'>Trinidadian</option>
                        <option value='tristanian'>Tristanian</option>
                        <option value='tunisian'>Tunisian</option>
                        <option value='turkish'>Turkish</option>
                        <option value='turkmen'>Turkmen</option>
                        <option value='turks-and-caicos-islander'>Turks and Caicos Islander</option>
                        <option value='tuvaluan'>Tuvaluan</option>
                        <option value='ugandan'>Ugandan</option>
                        <option value='ukrainian'>Ukrainian</option>
                        <option value='uruguayan'>Uruguayan</option>
                        <option value='uzbek'>Uzbek</option>
                        <option value='vatican-citizen'>Vatican citizen</option>
                        <option value='citizen-of-vanuatu'>Citizen of Vanuatu</option>
                        <option value='venezuelan'>Venezuelan</option>
                        <option value='vietnamese'>Vietnamese</option>
                        <option value='vincentian'>Vincentian</option>
                        <option value='wallisian'>Wallisian</option>
                        <option value='welsh'>Welsh</option>
                        <option value='yemeni'>Yemeni</option>
                        <option value='zambian'>Zambian</option>
                        <option value='zimbabwean'>Zimbabwean</option>
                    </select>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="form-floating">
                        <input type="text" name="spouse_other" class="form-control shadow-none" id="floatingInput">
                        <label for="floatingInput">Spouse/Other Name</label>
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
                        <label for="floatingInput">Password To Email</label>
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