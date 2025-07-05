<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>AIA Big Brothers Social Club</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />

    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta name="viewport" content="width=device-width" />

    <!--     Fonts and icons     -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous" />

    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet" />

    <!-- CSS Files -->
    <link href="{{asset('assets3/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets3/css/gsdk-bootstrap-wizard.css')}}" rel="stylesheet" />
</head>

<body>
    <div class="image-container set-full-height" style="background-image: url('assets3/img/wizard.jpg')">
        <!--   Big container   -->
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <div class="wizard-container">
                        <div class="card wizard-card" data-color="orange" id="wizardProfile">
                            <form id="memberForm" method="POST">
                                @csrf
                                <div class="wizard-header">
                                    <h3>
                                        <b>A.I.A </b>BIG BROTHERS<br />
                                        <small>Social Club Membership </small>
                                    </h3>
                                </div>

                                <div class="wizard-navigation">
                                    <ul>
                                        <li><a href="#about" data-toggle="tab">Personal Info</a></li>
                                        <li>
                                            <a href="#account" data-toggle="tab">Background and Interest</a>
                                        </li>
                                        <li>
                                            <a href="#address" data-toggle="tab">Declaration & Consent</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="tab-content">
                                    <div class="tab-pane" id="about">
                                        <div class="row">
                                            <h4 class="info-text">Basic Information</h4>
                                            <div class="col-sm-4 col-sm-offset-1">
                                                <div class="picture-container">
                                                    <div class="picture">
                                                        <img src="assets3/img/default-avatar.png" class="picture-src"
                                                            id="wizardPicturePreview" title="" />
                                                        <input type="file" id="wizard-picture" name="profile_pics"
                                                            required />
                                                    </div>
                                                    <h6>Choose Picture</h6>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>First Name </label>
                                                    <input name="firstname" type="text" class="form-control"
                                                        placeholder="Andrew..." />
                                                </div>
                                                <div class="form-group">
                                                    <label>Last Name</label>
                                                    <input name="lastname" type="text" class="form-control"
                                                        placeholder="Last Name..." required />
                                                </div>
                                            </div>
                                            <div class="row col-sm-10 col-sm-offset-1">
                                                <div class="col-sm-6 form-group">
                                                    <label>Email </label>
                                                    <input name="email" type="email" class="form-control"
                                                        placeholder="Email..." />
                                                </div>
                                                <div class="col-sm-6 form-group">
                                                    <label>Phone Number </label>
                                                    <input name="phone" type="number" class="form-control"
                                                        placeholder="Phone Numb..." required />
                                                </div>
                                            </div>
                                            <div class="row col-sm-10 col-sm-offset-1">
                                                <div class="col-sm-6 form-group">
                                                    <label>Date of Birth</label>
                                                    <input name="dob" type="date" class="form-control"
                                                        placeholder="Date of..." required />
                                                </div>
                                                <div class="col-sm-6 form-group">
                                                    <label>Marital Status:</label>
                                                    <select name="marital" id="" class="form-control" required>
                                                        <option hidden>Select Marital Status</option>
                                                        <option value="Single">Single</option>
                                                        <option value="Married">Married</option>
                                                        <option value="Divorced">Divorced</option>
                                                        <option value="Widowed">Widowed</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row col-sm-10 col-sm-offset-1">
                                                <div class="col-sm-6 form-group">
                                                    <label>Nationality:</label>
                                                    <select name="nationality" id="country" class="form-control"
                                                        required>
                                                        <option value="" hidden>Select a Country</option>
                                                        <option value="Afghanistan">Afghanistan</option>
                                                        <option value="Albania">Albania</option>
                                                        <option value="Algeria">Algeria</option>
                                                        <option value="Andorra">Andorra</option>
                                                        <option value="Angola">Angola</option>
                                                        <option value="Argentina">Argentina</option>
                                                        <option value="Armenia">Armenia</option>
                                                        <option value="Australia">Australia</option>
                                                        <option value="Austria">Austria</option>
                                                        <option value="Azerbaijan">Azerbaijan</option>
                                                        <option value="Bahamas">Bahamas</option>
                                                        <option value="Bahrain">Bahrain</option>
                                                        <option value="Bangladesh">Bangladesh</option>
                                                        <option value="Barbados">Barbados</option>
                                                        <option value="Belarus">Belarus</option>
                                                        <option value="Belgium">Belgium</option>
                                                        <option value="Belize">Belize</option>
                                                        <option value="Benin">Benin</option>
                                                        <option value="Bhutan">Bhutan</option>
                                                        <option value="Bolivia">Bolivia</option>
                                                        <option value="Bosnia and Herzegovina">
                                                            Bosnia and Herzegovina
                                                        </option>
                                                        <option value="Botswana">Botswana</option>
                                                        <option value="Brazil">Brazil</option>
                                                        <option value="Brunei">Brunei</option>
                                                        <option value="Bulgaria">Bulgaria</option>
                                                        <option value="Burkina Faso">Burkina Faso</option>
                                                        <option value="Burundi">Burundi</option>
                                                        <option value="Cabo Verde">Cabo Verde</option>
                                                        <option value="Cambodia">Cambodia</option>
                                                        <option value="Cameroon">Cameroon</option>
                                                        <option value="Canada">Canada</option>
                                                        <option value="Central African Republic">
                                                            Central African Republic
                                                        </option>
                                                        <option value="Chad">Chad</option>
                                                        <option value="Chile">Chile</option>
                                                        <option value="China">China</option>
                                                        <option value="Colombia">Colombia</option>
                                                        <option value="Comoros">Comoros</option>
                                                        <option value="Congo">Congo</option>
                                                        <option value="Costa Rica">Costa Rica</option>
                                                        <option value="Croatia">Croatia</option>
                                                        <option value="Cuba">Cuba</option>
                                                        <option value="Cyprus">Cyprus</option>
                                                        <option value="Czech Republic">
                                                            Czech Republic
                                                        </option>
                                                        <option value="Denmark">Denmark</option>
                                                        <option value="Djibouti">Djibouti</option>
                                                        <option value="Dominica">Dominica</option>
                                                        <option value="Dominican Republic">
                                                            Dominican Republic
                                                        </option>
                                                        <option value="Ecuador">Ecuador</option>
                                                        <option value="Egypt">Egypt</option>
                                                        <option value="El Salvador">El Salvador</option>
                                                        <option value="Equatorial Guinea">
                                                            Equatorial Guinea
                                                        </option>
                                                        <option value="Eritrea">Eritrea</option>
                                                        <option value="Estonia">Estonia</option>
                                                        <option value="Eswatini">Eswatini</option>
                                                        <option value="Ethiopia">Ethiopia</option>
                                                        <option value="Fiji">Fiji</option>
                                                        <option value="Finland">Finland</option>
                                                        <option value="France">France</option>
                                                        <option value="Gabon">Gabon</option>
                                                        <option value="Gambia">Gambia</option>
                                                        <option value="Georgia">Georgia</option>
                                                        <option value="Germany">Germany</option>
                                                        <option value="Ghana">Ghana</option>
                                                        <option value="Greece">Greece</option>
                                                        <option value="Grenada">Grenada</option>
                                                        <option value="Guatemala">Guatemala</option>
                                                        <option value="Guinea">Guinea</option>
                                                        <option value="Guinea-Bissau">
                                                            Guinea-Bissau
                                                        </option>
                                                        <option value="Guyana">Guyana</option>
                                                        <option value="Haiti">Haiti</option>
                                                        <option value="Honduras">Honduras</option>
                                                        <option value="Hungary">Hungary</option>
                                                        <option value="Iceland">Iceland</option>
                                                        <option value="India">India</option>
                                                        <option value="Indonesia">Indonesia</option>
                                                        <option value="Iran">Iran</option>
                                                        <option value="Iraq">Iraq</option>
                                                        <option value="Ireland">Ireland</option>
                                                        <option value="Israel">Israel</option>
                                                        <option value="Italy">Italy</option>
                                                        <option value="Jamaica">Jamaica</option>
                                                        <option value="Japan">Japan</option>
                                                        <option value="Jordan">Jordan</option>
                                                        <option value="Kazakhstan">Kazakhstan</option>
                                                        <option value="Kenya">Kenya</option>
                                                        <option value="Kiribati">Kiribati</option>
                                                        <option value="Kuwait">Kuwait</option>
                                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                        <option value="Laos">Laos</option>
                                                        <option value="Latvia">Latvia</option>
                                                        <option value="Lebanon">Lebanon</option>
                                                        <option value="Lesotho">Lesotho</option>
                                                        <option value="Liberia">Liberia</option>
                                                        <option value="Libya">Libya</option>
                                                        <option value="Liechtenstein">
                                                            Liechtenstein
                                                        </option>
                                                        <option value="Lithuania">Lithuania</option>
                                                        <option value="Luxembourg">Luxembourg</option>
                                                        <option value="Madagascar">Madagascar</option>
                                                        <option value="Malawi">Malawi</option>
                                                        <option value="Malaysia">Malaysia</option>
                                                        <option value="Maldives">Maldives</option>
                                                        <option value="Mali">Mali</option>
                                                        <option value="Malta">Malta</option>
                                                        <option value="Marshall Islands">
                                                            Marshall Islands
                                                        </option>
                                                        <option value="Mauritania">Mauritania</option>
                                                        <option value="Mauritius">Mauritius</option>
                                                        <option value="Mexico">Mexico</option>
                                                        <option value="Micronesia">Micronesia</option>
                                                        <option value="Moldova">Moldova</option>
                                                        <option value="Monaco">Monaco</option>
                                                        <option value="Mongolia">Mongolia</option>
                                                        <option value="Montenegro">Montenegro</option>
                                                        <option value="Morocco">Morocco</option>
                                                        <option value="Mozambique">Mozambique</option>
                                                        <option value="Myanmar">Myanmar</option>
                                                        <option value="Namibia">Namibia</option>
                                                        <option value="Nauru">Nauru</option>
                                                        <option value="Nepal">Nepal</option>
                                                        <option value="Netherlands">Netherlands</option>
                                                        <option value="New Zealand">New Zealand</option>
                                                        <option value="Nicaragua">Nicaragua</option>
                                                        <option value="Niger">Niger</option>
                                                        <option value="Nigeria">Nigeria</option>
                                                        <option value="North Korea">North Korea</option>
                                                        <option value="North Macedonia">
                                                            North Macedonia
                                                        </option>
                                                        <option value="Norway">Norway</option>
                                                        <option value="Oman">Oman</option>
                                                        <option value="Pakistan">Pakistan</option>
                                                        <option value="Palau">Palau</option>
                                                        <option value="Panama">Panama</option>
                                                        <option value="Papua New Guinea">
                                                            Papua New Guinea
                                                        </option>
                                                        <option value="Paraguay">Paraguay</option>
                                                        <option value="Peru">Peru</option>
                                                        <option value="Philippines">Philippines</option>
                                                        <option value="Poland">Poland</option>
                                                        <option value="Portugal">Portugal</option>
                                                        <option value="Qatar">Qatar</option>
                                                        <option value="Romania">Romania</option>
                                                        <option value="Russia">Russia</option>
                                                        <option value="Rwanda">Rwanda</option>
                                                        <option value="Saint Kitts and Nevis">
                                                            Saint Kitts and Nevis
                                                        </option>
                                                        <option value="Saint Lucia">Saint Lucia</option>
                                                        <option value="Saint Vincent and the Grenadines">
                                                            Saint Vincent and the Grenadines
                                                        </option>
                                                        <option value="Samoa">Samoa</option>
                                                        <option value="San Marino">San Marino</option>
                                                        <option value="Sao Tome and Principe">
                                                            Sao Tome and Principe
                                                        </option>
                                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                                        <option value="Senegal">Senegal</option>
                                                        <option value="Serbia">Serbia</option>
                                                        <option value="Seychelles">Seychelles</option>
                                                        <option value="Sierra Leone">Sierra Leone</option>
                                                        <option value="Singapore">Singapore</option>
                                                        <option value="Slovakia">Slovakia</option>
                                                        <option value="Slovenia">Slovenia</option>
                                                        <option value="Solomon Islands">
                                                            Solomon Islands
                                                        </option>
                                                        <option value="Somalia">Somalia</option>
                                                        <option value="South Africa">South Africa</option>
                                                        <option value="South Korea">South Korea</option>
                                                        <option value="South Sudan">South Sudan</option>
                                                        <option value="Spain">Spain</option>
                                                        <option value="Sri Lanka">Sri Lanka</option>
                                                        <option value="Sudan">Sudan</option>
                                                        <option value="Suriname">Suriname</option>
                                                        <option value="Sweden">Sweden</option>
                                                        <option value="Switzerland">Switzerland</option>
                                                        <option value="Syria">Syria</option>
                                                        <option value="Taiwan">Taiwan</option>
                                                        <option value="Tajikistan">Tajikistan</option>
                                                        <option value="Tanzania">Tanzania</option>
                                                        <option value="Thailand">Thailand</option>
                                                        <option value="Timor-Leste">Timor-Leste</option>
                                                        <option value="Togo">Togo</option>
                                                        <option value="Tonga">Tonga</option>
                                                        <option value="Trinidad and Tobago">
                                                            Trinidad and Tobago
                                                        </option>
                                                        <option value="Tunisia">Tunisia</option>
                                                        <option value="Turkey">Turkey</option>
                                                        <option value="Turkmenistan">Turkmenistan</option>
                                                        <option value="Tuvalu">Tuvalu</option>
                                                        <option value="Uganda">Uganda</option>
                                                        <option value="Ukraine">Ukraine</option>
                                                        <option value="United Arab Emirates">
                                                            United Arab Emirates
                                                        </option>
                                                        <option value="United Kingdom">
                                                            United Kingdom
                                                        </option>
                                                        <option value="United States">
                                                            United States
                                                        </option>
                                                        <option value="Uruguay">Uruguay</option>
                                                        <option value="Uzbekistan">Uzbekistan</option>
                                                        <option value="Vanuatu">Vanuatu</option>
                                                        <option value="Vatican City">Vatican City</option>
                                                        <option value="Venezuela">Venezuela</option>
                                                        <option value="Vietnam">Vietnam</option>
                                                        <option value="Yemen">Yemen</option>
                                                        <option value="Zambia">Zambia</option>
                                                        <option value="Zimbabwe">Zimbabwe</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6 form-group">
                                                    <label>Place of Birth:</label>
                                                    <input type="text" class="form-control" name="pob"
                                                        placeholder="Place of..." required />
                                                </div>
                                            </div>
                                            <div class="row col-sm-10 col-sm-offset-1">
                                                <div class="col-sm-6 form-group">
                                                    <label>City:</label>
                                                    <input name="city" type="text" class="form-control"
                                                        placeholder="City..." required />
                                                </div>
                                                <div class="col-sm-6 form-group">
                                                    <label>State: </label>
                                                    <input name="state" type="text" class="form-control"
                                                        placeholder="State..." required />
                                                </div>
                                            </div>
                                            <div class="row col-sm-10 col-sm-offset-1">
                                                <div class="col-sm-6 form-group">
                                                    <label>Country:</label>
                                                    <select name="country" id="country" class="form-control"
                                                        required>
                                                        <option value="" hidden>Select a country</option>
                                                        <option value="Afghanistan">Afghanistan</option>
                                                        <option value="Albania">Albania</option>
                                                        <option value="Algeria">Algeria</option>
                                                        <option value="Andorra">Andorra</option>
                                                        <option value="Angola">Angola</option>
                                                        <option value="Argentina">Argentina</option>
                                                        <option value="Armenia">Armenia</option>
                                                        <option value="Australia">Australia</option>
                                                        <option value="Austria">Austria</option>
                                                        <option value="Azerbaijan">Azerbaijan</option>
                                                        <option value="Bahamas">Bahamas</option>
                                                        <option value="Bahrain">Bahrain</option>
                                                        <option value="Bangladesh">Bangladesh</option>
                                                        <option value="Barbados">Barbados</option>
                                                        <option value="Belarus">Belarus</option>
                                                        <option value="Belgium">Belgium</option>
                                                        <option value="Belize">Belize</option>
                                                        <option value="Benin">Benin</option>
                                                        <option value="Bhutan">Bhutan</option>
                                                        <option value="Bolivia">Bolivia</option>
                                                        <option value="Bosnia and Herzegovina">
                                                            Bosnia and Herzegovina
                                                        </option>
                                                        <option value="Botswana">Botswana</option>
                                                        <option value="Brazil">Brazil</option>
                                                        <option value="Brunei">Brunei</option>
                                                        <option value="Bulgaria">Bulgaria</option>
                                                        <option value="Burkina Faso">Burkina Faso</option>
                                                        <option value="Burundi">Burundi</option>
                                                        <option value="Cabo Verde">Cabo Verde</option>
                                                        <option value="Cambodia">Cambodia</option>
                                                        <option value="Cameroon">Cameroon</option>
                                                        <option value="Canada">Canada</option>
                                                        <option value="Central African Republic">
                                                            Central African Republic
                                                        </option>
                                                        <option value="Chad">Chad</option>
                                                        <option value="Chile">Chile</option>
                                                        <option value="China">China</option>
                                                        <option value="Colombia">Colombia</option>
                                                        <option value="Comoros">Comoros</option>
                                                        <option value="Congo">Congo</option>
                                                        <option value="Costa Rica">Costa Rica</option>
                                                        <option value="Croatia">Croatia</option>
                                                        <option value="Cuba">Cuba</option>
                                                        <option value="Cyprus">Cyprus</option>
                                                        <option value="Czech Republic">
                                                            Czech Republic
                                                        </option>
                                                        <option value="Denmark">Denmark</option>
                                                        <option value="Djibouti">Djibouti</option>
                                                        <option value="Dominica">Dominica</option>
                                                        <option value="Dominican Republic">
                                                            Dominican Republic
                                                        </option>
                                                        <option value="Ecuador">Ecuador</option>
                                                        <option value="Egypt">Egypt</option>
                                                        <option value="El Salvador">El Salvador</option>
                                                        <option value="Equatorial Guinea">
                                                            Equatorial Guinea
                                                        </option>
                                                        <option value="Eritrea">Eritrea</option>
                                                        <option value="Estonia">Estonia</option>
                                                        <option value="Eswatini">Eswatini</option>
                                                        <option value="Ethiopia">Ethiopia</option>
                                                        <option value="Fiji">Fiji</option>
                                                        <option value="Finland">Finland</option>
                                                        <option value="France">France</option>
                                                        <option value="Gabon">Gabon</option>
                                                        <option value="Gambia">Gambia</option>
                                                        <option value="Georgia">Georgia</option>
                                                        <option value="Germany">Germany</option>
                                                        <option value="Ghana">Ghana</option>
                                                        <option value="Greece">Greece</option>
                                                        <option value="Grenada">Grenada</option>
                                                        <option value="Guatemala">Guatemala</option>
                                                        <option value="Guinea">Guinea</option>
                                                        <option value="Guinea-Bissau">
                                                            Guinea-Bissau
                                                        </option>
                                                        <option value="Guyana">Guyana</option>
                                                        <option value="Haiti">Haiti</option>
                                                        <option value="Honduras">Honduras</option>
                                                        <option value="Hungary">Hungary</option>
                                                        <option value="Iceland">Iceland</option>
                                                        <option value="India">India</option>
                                                        <option value="Indonesia">Indonesia</option>
                                                        <option value="Iran">Iran</option>
                                                        <option value="Iraq">Iraq</option>
                                                        <option value="Ireland">Ireland</option>
                                                        <option value="Israel">Israel</option>
                                                        <option value="Italy">Italy</option>
                                                        <option value="Jamaica">Jamaica</option>
                                                        <option value="Japan">Japan</option>
                                                        <option value="Jordan">Jordan</option>
                                                        <option value="Kazakhstan">Kazakhstan</option>
                                                        <option value="Kenya">Kenya</option>
                                                        <option value="Kiribati">Kiribati</option>
                                                        <option value="Kuwait">Kuwait</option>
                                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                        <option value="Laos">Laos</option>
                                                        <option value="Latvia">Latvia</option>
                                                        <option value="Lebanon">Lebanon</option>
                                                        <option value="Lesotho">Lesotho</option>
                                                        <option value="Liberia">Liberia</option>
                                                        <option value="Libya">Libya</option>
                                                        <option value="Liechtenstein">
                                                            Liechtenstein
                                                        </option>
                                                        <option value="Lithuania">Lithuania</option>
                                                        <option value="Luxembourg">Luxembourg</option>
                                                        <option value="Madagascar">Madagascar</option>
                                                        <option value="Malawi">Malawi</option>
                                                        <option value="Malaysia">Malaysia</option>
                                                        <option value="Maldives">Maldives</option>
                                                        <option value="Mali">Mali</option>
                                                        <option value="Malta">Malta</option>
                                                        <option value="Marshall Islands">
                                                            Marshall Islands
                                                        </option>
                                                        <option value="Mauritania">Mauritania</option>
                                                        <option value="Mauritius">Mauritius</option>
                                                        <option value="Mexico">Mexico</option>
                                                        <option value="Micronesia">Micronesia</option>
                                                        <option value="Moldova">Moldova</option>
                                                        <option value="Monaco">Monaco</option>
                                                        <option value="Mongolia">Mongolia</option>
                                                        <option value="Montenegro">Montenegro</option>
                                                        <option value="Morocco">Morocco</option>
                                                        <option value="Mozambique">Mozambique</option>
                                                        <option value="Myanmar">Myanmar</option>
                                                        <option value="Namibia">Namibia</option>
                                                        <option value="Nauru">Nauru</option>
                                                        <option value="Nepal">Nepal</option>
                                                        <option value="Netherlands">Netherlands</option>
                                                        <option value="New Zealand">New Zealand</option>
                                                        <option value="Nicaragua">Nicaragua</option>
                                                        <option value="Niger">Niger</option>
                                                        <option value="Nigeria">Nigeria</option>
                                                        <option value="North Korea">North Korea</option>
                                                        <option value="North Macedonia">
                                                            North Macedonia
                                                        </option>
                                                        <option value="Norway">Norway</option>
                                                        <option value="Oman">Oman</option>
                                                        <option value="Pakistan">Pakistan</option>
                                                        <option value="Palau">Palau</option>
                                                        <option value="Panama">Panama</option>
                                                        <option value="Papua New Guinea">
                                                            Papua New Guinea
                                                        </option>
                                                        <option value="Paraguay">Paraguay</option>
                                                        <option value="Peru">Peru</option>
                                                        <option value="Philippines">Philippines</option>
                                                        <option value="Poland">Poland</option>
                                                        <option value="Portugal">Portugal</option>
                                                        <option value="Qatar">Qatar</option>
                                                        <option value="Romania">Romania</option>
                                                        <option value="Russia">Russia</option>
                                                        <option value="Rwanda">Rwanda</option>
                                                        <option value="Saint Kitts and Nevis">
                                                            Saint Kitts and Nevis
                                                        </option>
                                                        <option value="Saint Lucia">Saint Lucia</option>
                                                        <option value="Saint Vincent and the Grenadines">
                                                            Saint Vincent and the Grenadines
                                                        </option>
                                                        <option value="Samoa">Samoa</option>
                                                        <option value="San Marino">San Marino</option>
                                                        <option value="Sao Tome and Principe">
                                                            Sao Tome and Principe
                                                        </option>
                                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                                        <option value="Senegal">Senegal</option>
                                                        <option value="Serbia">Serbia</option>
                                                        <option value="Seychelles">Seychelles</option>
                                                        <option value="Sierra Leone">Sierra Leone</option>
                                                        <option value="Singapore">Singapore</option>
                                                        <option value="Slovakia">Slovakia</option>
                                                        <option value="Slovenia">Slovenia</option>
                                                        <option value="Solomon Islands">
                                                            Solomon Islands
                                                        </option>
                                                        <option value="Somalia">Somalia</option>
                                                        <option value="South Africa">South Africa</option>
                                                        <option value="South Korea">South Korea</option>
                                                        <option value="South Sudan">South Sudan</option>
                                                        <option value="Spain">Spain</option>
                                                        <option value="Sri Lanka">Sri Lanka</option>
                                                        <option value="Sudan">Sudan</option>
                                                        <option value="Suriname">Suriname</option>
                                                        <option value="Sweden">Sweden</option>
                                                        <option value="Switzerland">Switzerland</option>
                                                        <option value="Syria">Syria</option>
                                                        <option value="Taiwan">Taiwan</option>
                                                        <option value="Tajikistan">Tajikistan</option>
                                                        <option value="Tanzania">Tanzania</option>
                                                        <option value="Thailand">Thailand</option>
                                                        <option value="Timor-Leste">Timor-Leste</option>
                                                        <option value="Togo">Togo</option>
                                                        <option value="Tonga">Tonga</option>
                                                        <option value="Trinidad and Tobago">
                                                            Trinidad and Tobago
                                                        </option>
                                                        <option value="Tunisia">Tunisia</option>
                                                        <option value="Turkey">Turkey</option>
                                                        <option value="Turkmenistan">Turkmenistan</option>
                                                        <option value="Tuvalu">Tuvalu</option>
                                                        <option value="Uganda">Uganda</option>
                                                        <option value="Ukraine">Ukraine</option>
                                                        <option value="United Arab Emirates">
                                                            United Arab Emirates
                                                        </option>
                                                        <option value="United Kingdom">
                                                            United Kingdom
                                                        </option>
                                                        <option value="United States">
                                                            United States
                                                        </option>
                                                        <option value="Uruguay">Uruguay</option>
                                                        <option value="Uzbekistan">Uzbekistan</option>
                                                        <option value="Vanuatu">Vanuatu</option>
                                                        <option value="Vatican City">Vatican City</option>
                                                        <option value="Venezuela">Venezuela</option>
                                                        <option value="Vietnam">Vietnam</option>
                                                        <option value="Yemen">Yemen</option>
                                                        <option value="Zambia">Zambia</option>
                                                        <option value="Zimbabwe">Zimbabwe</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6 form-group">
                                                    <label>Current Residential Address:</label>
                                                    <input type="text" class="form-control" name="address"
                                                        placeholder="Address..." required />
                                                </div>
                                            </div>
                                            <div class="row col-sm-10 col-sm-offset-1">
                                                <div class="col-sm-6 form-group">
                                                    <label>Occupation | Profession: </label>
                                                    <input name="profession" type="text" class="form-control"
                                                        placeholder="Occupation..." required />
                                                </div>
                                                <div class="col-sm-6 form-group">
                                                    <label>Employer | Business Name:</label>
                                                    <input name="business" type="text" class="form-control"
                                                        placeholder="Business Name..." required />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="account">
                                        <div class="col-sm-10 col-sm-offset-1">
                                            <h6 class="info-text">
                                                Please tell us a little about yourself and why you're
                                                interested in joining.
                                            </h6>
                                        </div>
                                        <div class="">
                                            <div class="col-sm-10 col-sm-offset-1" style="margin-top: 1rem">
                                                <label>* Are you from A.I.A Community:</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="from_aia"
                                                        id="radioDefault1" value="Yes" required />
                                                    <label class="form-check-label" for="radioDefault1">
                                                        Yes
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="from_aia"
                                                        id="radioDefault2" value="No" required />
                                                    <label class="form-check-label" for="radioDefault2">
                                                        No
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-10 col-sm-offset-1" style="margin-top: 1rem">
                                                <label>* Briefly describe your interests, hobbies, or
                                                    community involvement:</label>
                                                <textarea name="hobbies" id="" cols="30" rows="5" class="form-control" required></textarea>
                                            </div>
                                            <div class="col-sm-10 col-sm-offset-1 mt-4 mb-4">
                                                <label>* Why are you interested in becoming a member of
                                                    A.I.A. Big Brothers Social Club? What do you hope to
                                                    gain or contribute?
                                                </label>
                                                <textarea name="interest" id="" cols="30" rows="5" class="form-control" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="address">
                                        <div class="col-sm-10 col-sm-offset-1">
                                            <h6 class="info-text">
                                                Please read carefully and tick the appropriate boxes.
                                            </h6>
                                        </div>
                                        <div class="">
                                            <div class="col-sm-10 col-sm-offset-1" style="margin-top: 1rem">
                                                <label><b>* Have you ever been convicted of a criminal
                                                        offense?:</b></label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="convicted"
                                                        value="Yes" required />
                                                    <label class="form-check-label" for="radioDefault1">
                                                        Yes
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="convicted"
                                                        value="No" required />
                                                    <label class="form-check-label" for="radioDefault2">
                                                        No
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-10 col-sm-offset-1" style="margin-top: 1rem">
                                                <label><b>* Medical Conditions/Allergies:</b> Do you have
                                                    any medical conditions or allergies the club should
                                                    be aware of in case of an emergency? (This
                                                    information will be kept confidential.)</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="medical"
                                                        value="Yes" required />
                                                    <label class="form-check-label" for="radioDefault1">
                                                        Yes
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="medical"
                                                        value="No" required />
                                                    <label class="form-check-label" for="radioDefault2">
                                                        No
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-10 col-sm-offset-1" style="margin-top: 1rem">
                                                <label><b>* Character/Behavioral Standards:</b> I
                                                    understand that membership in A.I.A. Big Brothers
                                                    Social Club requires adherence to high standards of
                                                    conduct, integrity, and respect for others. I agree
                                                    to uphold the values and principles of the club and
                                                    engage in activities that promote its positive
                                                    image.</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="character"
                                                        value="I Agree" required />
                                                    <label class="form-check-label" for="radioDefault1">
                                                        I Agree
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-10 col-sm-offset-1" style="margin-top: 1rem">
                                                <label><b>* Confidentiality:</b> I understand that certain
                                                    club discussions or information shared amongst
                                                    members may be confidential, and I agree to maintain
                                                    this confidentiality.</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="confidentiality" value="I Agree" required />
                                                    <label class="form-check-label" for="radioDefault1">
                                                        I Agree
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-10 col-sm-offset-1" style="margin-top: 1rem">
                                                <label><b>* Waiver of Liability:</b> I acknowledge that
                                                    participation in A.I.A. Big Brothers Social Club
                                                    activities is voluntary, and I agree to assume all
                                                    risks associated with my participation. I release
                                                    the A.I.A. Big Brothers Social Club, its officers,
                                                    and members from any liability for injury, loss, or
                                                    damage incurred during club activities.</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="liability"
                                                        value="I Agree" required />
                                                    <label class="form-check-label" for="radioDefault1">
                                                        I Agree
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-10 col-sm-offset-1" style="margin-top: 1rem">
                                                <label><b>* Declaration:</b> I declare that the
                                                    information provided in this application is true and
                                                    correct to the best of my knowledge and belief. I
                                                    understand that any false statement may lead to the
                                                    rejection of my application or termination of my
                                                    membership. I agree to abide by the Constitution,
                                                    Bye-Laws, and decisions of the A.I.A. Big Brothers
                                                    Social Club.</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="declaration" value="I Agree" required />
                                                    <label class="form-check-label" for="radioDefault1">
                                                        I Agree
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wizard-footer height-wizard">
                                    <div class="pull-right">
                                        <input type="button" class="btn btn-next btn-fill btn-warning btn-wd btn-sm"
                                            name="next" value="Next" />
                                        <input type="submit"
                                            class="btn btn-finish btn-fill btn-warning btn-wd btn-sm" name="finish"
                                            value="Submit" />
                                    </div>

                                    <div class="pull-left">
                                        <input type="button"
                                            class="btn btn-previous btn-fill btn-default btn-wd btn-sm"
                                            name="previous" value="Previous" />
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- wizard container -->
                </div>
            </div>
            <!-- end row -->
        </div>
        <!--  big container -->

        <div class="footer">
            <div class="container">
                <a href="{{ route('user.index') }}"> Go Back Home </a>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#memberForm").on("submit", function(e) {
                e.preventDefault();

                let formData = new FormData(this);

                $.ajax({
                    url: "/become-a-member",
                    type: "POST",
                    data: formData,
                    processData: false,
                    contentType: false,
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                    },
                    success: function(response) {
                        if (response && response.status) {
                            toastr.success(
                                response.message + " (ID: " + response.member_id + ")"
                            );
                            $("#memberForm")[0].reset();
                            window.location.reload();
                        } else {
                            toastr.warning("Unexpected response from server.");
                        }
                    },
                    error: function(xhr) {
                        if (
                            xhr.status === 422 &&
                            xhr.responseJSON &&
                            xhr.responseJSON.errors
                        ) {
                            // Laravel validation errors
                            $.each(xhr.responseJSON.errors, function(key, value) {
                                toastr.error(value[0]);
                            });
                        } else if (xhr.responseJSON && xhr.responseJSON.message) {
                            toastr.error(xhr.responseJSON.message);
                        } else {
                            toastr.error("An unknown error occurred.");
                        }
                    },
                });
            });
        });
    </script>
</body>

<!--   Core JS Files   -->
<script src="{{asset('assets3/js/jquery-2.2.4.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets3/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets3/js/jquery.bootstrap.wizard.js')}}" type="text/javascript"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="{{asset('assets3/js/gsdk-bootstrap-wizard.js')}}"></script>
<script src="{{asset('assets3/js/jquery.validate.min.js')}}"></script>

</html>
