@extends('layouts.admin')

@section('Title', 'Members')

@section('content')
    <div class="col-md-12">
        <h4 class="pb-3">Members Setup</h4>
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                    type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                    Members List
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
                    type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                    Add Member
                </button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"
                tabindex="0">
                <div class="col-md-12 bg-white p-3">
                    <h5 class="pb-3">All Members</h5>
                    <table class="table table-striped" class="tableContainer">
                        <thead>
                            <tr>
                                <th>AIA ID</th>
                                <th>FirstName</th>
                                <th>LastName</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="tableBody">
                            @forelse ($members as $member)
                                <tr id="tableRow-{{ $member->id }}">
                                    <td>{{ $member->member_id }}</td>
                                    <td>{{ $member->firstname }}</td>
                                    <td>{{ $member->lastname }}</td>
                                    <td>{{ $member->email }}</td>
                                    <td>+234-{{ $member->phone }}</td>
                                    <td>{{ $member->status }}</td>
                                    <td>
                                        <a href="{{ route('members.show', $member->id) }}"
                                            class="badge bg-dark fs-6 edit-btn">
                                            <i class="ri-edit-box-line"></i>
                                        </a>
                                        <span class="badge bg-danger fs-6 delete-btn" data-id="{{ $member->id }}">
                                            <i class="ri-delete-bin-line"></i>
                                        </span>
                                    </td>
                                </tr>
                            @empty
                                <tr class="no-record">
                                    <td colspan="7">No Records Found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
                tabindex="0">
                <ul class="nav nav-tabs" id="formTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="personal-tab" data-bs-toggle="tab" data-bs-target="#personal"
                            type="button" role="tab">
                            Personal Info
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"
                            type="button" role="tab">
                            Background & Interest
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="account-tab" data-bs-toggle="tab" data-bs-target="#account"
                            type="button" role="tab">
                            Declaration & Consent
                        </button>
                    </li>
                </ul>
                <div class="tab-content bg-white" id="pills-tabContent">
                    <form class="tab-content border border-top-0 p-4" id="createMember" method="post">
                        <div class="tab-pane fade show active" id="personal" role="tabpanel">
                            <div class="col-md-12 bg-white p-3">
                                <div class="row">

                                    <div class="col-md-4 col-sm-6 mt-4">
                                        <div class="form-group">
                                            <label class="form-label">First Name
                                            </label>
                                            <input name="firstname" type="text" class="form-control"
                                                placeholder="Andrew..." required />
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 mt-4">
                                        <div class="form-group">
                                            <label class="form-label">Last Name</label>
                                            <input name="lastname" type="text" class="form-control"
                                                placeholder="Last Name..." required />
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 mt-4">
                                        <div class="form-group">
                                            <label class="form-label">Email </label>
                                            <input name="email" type="email" class="form-control"
                                                placeholder="Email..." required />
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 mt-4">
                                        <div class="form-group">
                                            <label class="form-label">Phone Number
                                            </label>
                                            <input name="phone" type="number" class="form-control"
                                                placeholder="Phone Numb..." required />
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 mt-4">
                                        <div class="form-group">
                                            <label class="form-label">Date of Birth</label>
                                            <input name="dob" type="date" class="form-control"
                                                placeholder="Date of..." required />
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 mt-4">
                                        <div class="form-group">
                                            <label class="form-label">Marital Status:</label>
                                            <select name="marital" id="" class="form-control" required>
                                                <option hidden>
                                                    Select Marital Status
                                                </option>
                                                <option value="Single">Single</option>
                                                <option value="Married">Married</option>
                                                <option value="Divorced">
                                                    Divorced
                                                </option>
                                                <option value="Widowed">Widowed</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 mt-4">
                                        <div class="form-group">
                                            <label class="form-label">Nationality:</label>
                                            <select name="nationality" id="country" class="form-control" required>
                                                <option value="" hidden>
                                                    Select a Country
                                                </option>
                                                <option value="Afghanistan">
                                                    Afghanistan
                                                </option>
                                                <option value="Albania">Albania</option>
                                                <option value="Algeria">Algeria</option>
                                                <option value="Andorra">Andorra</option>
                                                <option value="Angola">Angola</option>
                                                <option value="Argentina">
                                                    Argentina
                                                </option>
                                                <option value="Armenia">Armenia</option>
                                                <option value="Australia">
                                                    Australia
                                                </option>
                                                <option value="Austria">Austria</option>
                                                <option value="Azerbaijan">
                                                    Azerbaijan
                                                </option>
                                                <option value="Bahamas">Bahamas</option>
                                                <option value="Bahrain">Bahrain</option>
                                                <option value="Bangladesh">
                                                    Bangladesh
                                                </option>
                                                <option value="Barbados">
                                                    Barbados
                                                </option>
                                                <option value="Belarus">Belarus</option>
                                                <option value="Belgium">Belgium</option>
                                                <option value="Belize">Belize</option>
                                                <option value="Benin">Benin</option>
                                                <option value="Bhutan">Bhutan</option>
                                                <option value="Bolivia">Bolivia</option>
                                                <option value="Bosnia and Herzegovina">
                                                    Bosnia and Herzegovina
                                                </option>
                                                <option value="Botswana">
                                                    Botswana
                                                </option>
                                                <option value="Brazil">Brazil</option>
                                                <option value="Brunei">Brunei</option>
                                                <option value="Bulgaria">
                                                    Bulgaria
                                                </option>
                                                <option value="Burkina Faso">
                                                    Burkina Faso
                                                </option>
                                                <option value="Burundi">Burundi</option>
                                                <option value="Cabo Verde">
                                                    Cabo Verde
                                                </option>
                                                <option value="Cambodia">
                                                    Cambodia
                                                </option>
                                                <option value="Cameroon">
                                                    Cameroon
                                                </option>
                                                <option value="Canada">Canada</option>
                                                <option value="Central African Republic">
                                                    Central African Republic
                                                </option>
                                                <option value="Chad">Chad</option>
                                                <option value="Chile">Chile</option>
                                                <option value="China">China</option>
                                                <option value="Colombia">
                                                    Colombia
                                                </option>
                                                <option value="Comoros">Comoros</option>
                                                <option value="Congo">Congo</option>
                                                <option value="Costa Rica">
                                                    Costa Rica
                                                </option>
                                                <option value="Croatia">Croatia</option>
                                                <option value="Cuba">Cuba</option>
                                                <option value="Cyprus">Cyprus</option>
                                                <option value="Czech Republic">
                                                    Czech Republic
                                                </option>
                                                <option value="Denmark">Denmark</option>
                                                <option value="Djibouti">
                                                    Djibouti
                                                </option>
                                                <option value="Dominica">
                                                    Dominica
                                                </option>
                                                <option value="Dominican Republic">
                                                    Dominican Republic
                                                </option>
                                                <option value="Ecuador">Ecuador</option>
                                                <option value="Egypt">Egypt</option>
                                                <option value="El Salvador">
                                                    El Salvador
                                                </option>
                                                <option value="Equatorial Guinea">
                                                    Equatorial Guinea
                                                </option>
                                                <option value="Eritrea">Eritrea</option>
                                                <option value="Estonia">Estonia</option>
                                                <option value="Eswatini">
                                                    Eswatini
                                                </option>
                                                <option value="Ethiopia">
                                                    Ethiopia
                                                </option>
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
                                                <option value="Guatemala">
                                                    Guatemala
                                                </option>
                                                <option value="Guinea">Guinea</option>
                                                <option value="Guinea-Bissau">
                                                    Guinea-Bissau
                                                </option>
                                                <option value="Guyana">Guyana</option>
                                                <option value="Haiti">Haiti</option>
                                                <option value="Honduras">
                                                    Honduras
                                                </option>
                                                <option value="Hungary">Hungary</option>
                                                <option value="Iceland">Iceland</option>
                                                <option value="India">India</option>
                                                <option value="Indonesia">
                                                    Indonesia
                                                </option>
                                                <option value="Iran">Iran</option>
                                                <option value="Iraq">Iraq</option>
                                                <option value="Ireland">Ireland</option>
                                                <option value="Israel">Israel</option>
                                                <option value="Italy">Italy</option>
                                                <option value="Jamaica">Jamaica</option>
                                                <option value="Japan">Japan</option>
                                                <option value="Jordan">Jordan</option>
                                                <option value="Kazakhstan">
                                                    Kazakhstan
                                                </option>
                                                <option value="Kenya">Kenya</option>
                                                <option value="Kiribati">
                                                    Kiribati
                                                </option>
                                                <option value="Kuwait">Kuwait</option>
                                                <option value="Kyrgyzstan">
                                                    Kyrgyzstan
                                                </option>
                                                <option value="Laos">Laos</option>
                                                <option value="Latvia">Latvia</option>
                                                <option value="Lebanon">Lebanon</option>
                                                <option value="Lesotho">Lesotho</option>
                                                <option value="Liberia">Liberia</option>
                                                <option value="Libya">Libya</option>
                                                <option value="Liechtenstein">
                                                    Liechtenstein
                                                </option>
                                                <option value="Lithuania">
                                                    Lithuania
                                                </option>
                                                <option value="Luxembourg">
                                                    Luxembourg
                                                </option>
                                                <option value="Madagascar">
                                                    Madagascar
                                                </option>
                                                <option value="Malawi">Malawi</option>
                                                <option value="Malaysia">
                                                    Malaysia
                                                </option>
                                                <option value="Maldives">
                                                    Maldives
                                                </option>
                                                <option value="Mali">Mali</option>
                                                <option value="Malta">Malta</option>
                                                <option value="Marshall Islands">
                                                    Marshall Islands
                                                </option>
                                                <option value="Mauritania">
                                                    Mauritania
                                                </option>
                                                <option value="Mauritius">
                                                    Mauritius
                                                </option>
                                                <option value="Mexico">Mexico</option>
                                                <option value="Micronesia">
                                                    Micronesia
                                                </option>
                                                <option value="Moldova">Moldova</option>
                                                <option value="Monaco">Monaco</option>
                                                <option value="Mongolia">
                                                    Mongolia
                                                </option>
                                                <option value="Montenegro">
                                                    Montenegro
                                                </option>
                                                <option value="Morocco">Morocco</option>
                                                <option value="Mozambique">
                                                    Mozambique
                                                </option>
                                                <option value="Myanmar">Myanmar</option>
                                                <option value="Namibia">Namibia</option>
                                                <option value="Nauru">Nauru</option>
                                                <option value="Nepal">Nepal</option>
                                                <option value="Netherlands">
                                                    Netherlands
                                                </option>
                                                <option value="New Zealand">
                                                    New Zealand
                                                </option>
                                                <option value="Nicaragua">
                                                    Nicaragua
                                                </option>
                                                <option value="Niger">Niger</option>
                                                <option value="Nigeria">Nigeria</option>
                                                <option value="North Korea">
                                                    North Korea
                                                </option>
                                                <option value="North Macedonia">
                                                    North Macedonia
                                                </option>
                                                <option value="Norway">Norway</option>
                                                <option value="Oman">Oman</option>
                                                <option value="Pakistan">
                                                    Pakistan
                                                </option>
                                                <option value="Palau">Palau</option>
                                                <option value="Panama">Panama</option>
                                                <option value="Papua New Guinea">
                                                    Papua New Guinea
                                                </option>
                                                <option value="Paraguay">
                                                    Paraguay
                                                </option>
                                                <option value="Peru">Peru</option>
                                                <option value="Philippines">
                                                    Philippines
                                                </option>
                                                <option value="Poland">Poland</option>
                                                <option value="Portugal">
                                                    Portugal
                                                </option>
                                                <option value="Qatar">Qatar</option>
                                                <option value="Romania">Romania</option>
                                                <option value="Russia">Russia</option>
                                                <option value="Rwanda">Rwanda</option>
                                                <option value="Saint Kitts and Nevis">
                                                    Saint Kitts and Nevis
                                                </option>
                                                <option value="Saint Lucia">
                                                    Saint Lucia
                                                </option>
                                                <option value="Saint Vincent and the Grenadines">
                                                    Saint Vincent and the Grenadines
                                                </option>
                                                <option value="Samoa">Samoa</option>
                                                <option value="San Marino">
                                                    San Marino
                                                </option>
                                                <option value="Sao Tome and Principe">
                                                    Sao Tome and Principe
                                                </option>
                                                <option value="Saudi Arabia">
                                                    Saudi Arabia
                                                </option>
                                                <option value="Senegal">Senegal</option>
                                                <option value="Serbia">Serbia</option>
                                                <option value="Seychelles">
                                                    Seychelles
                                                </option>
                                                <option value="Sierra Leone">
                                                    Sierra Leone
                                                </option>
                                                <option value="Singapore">
                                                    Singapore
                                                </option>
                                                <option value="Slovakia">
                                                    Slovakia
                                                </option>
                                                <option value="Slovenia">
                                                    Slovenia
                                                </option>
                                                <option value="Solomon Islands">
                                                    Solomon Islands
                                                </option>
                                                <option value="Somalia">Somalia</option>
                                                <option value="South Africa">
                                                    South Africa
                                                </option>
                                                <option value="South Korea">
                                                    South Korea
                                                </option>
                                                <option value="South Sudan">
                                                    South Sudan
                                                </option>
                                                <option value="Spain">Spain</option>
                                                <option value="Sri Lanka">
                                                    Sri Lanka
                                                </option>
                                                <option value="Sudan">Sudan</option>
                                                <option value="Suriname">
                                                    Suriname
                                                </option>
                                                <option value="Sweden">Sweden</option>
                                                <option value="Switzerland">
                                                    Switzerland
                                                </option>
                                                <option value="Syria">Syria</option>
                                                <option value="Taiwan">Taiwan</option>
                                                <option value="Tajikistan">
                                                    Tajikistan
                                                </option>
                                                <option value="Tanzania">
                                                    Tanzania
                                                </option>
                                                <option value="Thailand">
                                                    Thailand
                                                </option>
                                                <option value="Timor-Leste">
                                                    Timor-Leste
                                                </option>
                                                <option value="Togo">Togo</option>
                                                <option value="Tonga">Tonga</option>
                                                <option value="Trinidad and Tobago">
                                                    Trinidad and Tobago
                                                </option>
                                                <option value="Tunisia">Tunisia</option>
                                                <option value="Turkey">Turkey</option>
                                                <option value="Turkmenistan">
                                                    Turkmenistan
                                                </option>
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
                                                <option value="Uzbekistan">
                                                    Uzbekistan
                                                </option>
                                                <option value="Vanuatu">Vanuatu</option>
                                                <option value="Vatican City">
                                                    Vatican City
                                                </option>
                                                <option value="Venezuela">
                                                    Venezuela
                                                </option>
                                                <option value="Vietnam">Vietnam</option>
                                                <option value="Yemen">Yemen</option>
                                                <option value="Zambia">Zambia</option>
                                                <option value="Zimbabwe">
                                                    Zimbabwe
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 mt-4">
                                        <div class="form-group">
                                            <label class="form-label">Place of Birth:</label>
                                            <input type="text" class="form-control" name="pob"
                                                placeholder="Place of..." required />
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 mt-4">
                                        <div class="form-group">
                                            <label class="form-label">City:</label>
                                            <input name="city" type="text" class="form-control"
                                                placeholder="City..." required />
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 mt-4">
                                        <div class="form-group">
                                            <label class="form-label">State: </label>
                                            <input name="state" type="text" class="form-control"
                                                placeholder="State..." required />
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 mt-4">
                                        <div class="form-group">
                                            <label class="form-label">Country:</label>
                                            <select name="country" id="country" class="form-control" required>
                                                <option value="" hidden>
                                                    Select a country
                                                </option>
                                                <option value="Afghanistan">
                                                    Afghanistan
                                                </option>
                                                <option value="Albania">Albania</option>
                                                <option value="Algeria">Algeria</option>
                                                <option value="Andorra">Andorra</option>
                                                <option value="Angola">Angola</option>
                                                <option value="Argentina">
                                                    Argentina
                                                </option>
                                                <option value="Armenia">Armenia</option>
                                                <option value="Australia">
                                                    Australia
                                                </option>
                                                <option value="Austria">Austria</option>
                                                <option value="Azerbaijan">
                                                    Azerbaijan
                                                </option>
                                                <option value="Bahamas">Bahamas</option>
                                                <option value="Bahrain">Bahrain</option>
                                                <option value="Bangladesh">
                                                    Bangladesh
                                                </option>
                                                <option value="Barbados">
                                                    Barbados
                                                </option>
                                                <option value="Belarus">Belarus</option>
                                                <option value="Belgium">Belgium</option>
                                                <option value="Belize">Belize</option>
                                                <option value="Benin">Benin</option>
                                                <option value="Bhutan">Bhutan</option>
                                                <option value="Bolivia">Bolivia</option>
                                                <option value="Bosnia and Herzegovina">
                                                    Bosnia and Herzegovina
                                                </option>
                                                <option value="Botswana">
                                                    Botswana
                                                </option>
                                                <option value="Brazil">Brazil</option>
                                                <option value="Brunei">Brunei</option>
                                                <option value="Bulgaria">
                                                    Bulgaria
                                                </option>
                                                <option value="Burkina Faso">
                                                    Burkina Faso
                                                </option>
                                                <option value="Burundi">Burundi</option>
                                                <option value="Cabo Verde">
                                                    Cabo Verde
                                                </option>
                                                <option value="Cambodia">
                                                    Cambodia
                                                </option>
                                                <option value="Cameroon">
                                                    Cameroon
                                                </option>
                                                <option value="Canada">Canada</option>
                                                <option value="Central African Republic">
                                                    Central African Republic
                                                </option>
                                                <option value="Chad">Chad</option>
                                                <option value="Chile">Chile</option>
                                                <option value="China">China</option>
                                                <option value="Colombia">
                                                    Colombia
                                                </option>
                                                <option value="Comoros">Comoros</option>
                                                <option value="Congo">Congo</option>
                                                <option value="Costa Rica">
                                                    Costa Rica
                                                </option>
                                                <option value="Croatia">Croatia</option>
                                                <option value="Cuba">Cuba</option>
                                                <option value="Cyprus">Cyprus</option>
                                                <option value="Czech Republic">
                                                    Czech Republic
                                                </option>
                                                <option value="Denmark">Denmark</option>
                                                <option value="Djibouti">
                                                    Djibouti
                                                </option>
                                                <option value="Dominica">
                                                    Dominica
                                                </option>
                                                <option value="Dominican Republic">
                                                    Dominican Republic
                                                </option>
                                                <option value="Ecuador">Ecuador</option>
                                                <option value="Egypt">Egypt</option>
                                                <option value="El Salvador">
                                                    El Salvador
                                                </option>
                                                <option value="Equatorial Guinea">
                                                    Equatorial Guinea
                                                </option>
                                                <option value="Eritrea">Eritrea</option>
                                                <option value="Estonia">Estonia</option>
                                                <option value="Eswatini">
                                                    Eswatini
                                                </option>
                                                <option value="Ethiopia">
                                                    Ethiopia
                                                </option>
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
                                                <option value="Guatemala">
                                                    Guatemala
                                                </option>
                                                <option value="Guinea">Guinea</option>
                                                <option value="Guinea-Bissau">
                                                    Guinea-Bissau
                                                </option>
                                                <option value="Guyana">Guyana</option>
                                                <option value="Haiti">Haiti</option>
                                                <option value="Honduras">
                                                    Honduras
                                                </option>
                                                <option value="Hungary">Hungary</option>
                                                <option value="Iceland">Iceland</option>
                                                <option value="India">India</option>
                                                <option value="Indonesia">
                                                    Indonesia
                                                </option>
                                                <option value="Iran">Iran</option>
                                                <option value="Iraq">Iraq</option>
                                                <option value="Ireland">Ireland</option>
                                                <option value="Israel">Israel</option>
                                                <option value="Italy">Italy</option>
                                                <option value="Jamaica">Jamaica</option>
                                                <option value="Japan">Japan</option>
                                                <option value="Jordan">Jordan</option>
                                                <option value="Kazakhstan">
                                                    Kazakhstan
                                                </option>
                                                <option value="Kenya">Kenya</option>
                                                <option value="Kiribati">
                                                    Kiribati
                                                </option>
                                                <option value="Kuwait">Kuwait</option>
                                                <option value="Kyrgyzstan">
                                                    Kyrgyzstan
                                                </option>
                                                <option value="Laos">Laos</option>
                                                <option value="Latvia">Latvia</option>
                                                <option value="Lebanon">Lebanon</option>
                                                <option value="Lesotho">Lesotho</option>
                                                <option value="Liberia">Liberia</option>
                                                <option value="Libya">Libya</option>
                                                <option value="Liechtenstein">
                                                    Liechtenstein
                                                </option>
                                                <option value="Lithuania">
                                                    Lithuania
                                                </option>
                                                <option value="Luxembourg">
                                                    Luxembourg
                                                </option>
                                                <option value="Madagascar">
                                                    Madagascar
                                                </option>
                                                <option value="Malawi">Malawi</option>
                                                <option value="Malaysia">
                                                    Malaysia
                                                </option>
                                                <option value="Maldives">
                                                    Maldives
                                                </option>
                                                <option value="Mali">Mali</option>
                                                <option value="Malta">Malta</option>
                                                <option value="Marshall Islands">
                                                    Marshall Islands
                                                </option>
                                                <option value="Mauritania">
                                                    Mauritania
                                                </option>
                                                <option value="Mauritius">
                                                    Mauritius
                                                </option>
                                                <option value="Mexico">Mexico</option>
                                                <option value="Micronesia">
                                                    Micronesia
                                                </option>
                                                <option value="Moldova">Moldova</option>
                                                <option value="Monaco">Monaco</option>
                                                <option value="Mongolia">
                                                    Mongolia
                                                </option>
                                                <option value="Montenegro">
                                                    Montenegro
                                                </option>
                                                <option value="Morocco">Morocco</option>
                                                <option value="Mozambique">
                                                    Mozambique
                                                </option>
                                                <option value="Myanmar">Myanmar</option>
                                                <option value="Namibia">Namibia</option>
                                                <option value="Nauru">Nauru</option>
                                                <option value="Nepal">Nepal</option>
                                                <option value="Netherlands">
                                                    Netherlands
                                                </option>
                                                <option value="New Zealand">
                                                    New Zealand
                                                </option>
                                                <option value="Nicaragua">
                                                    Nicaragua
                                                </option>
                                                <option value="Niger">Niger</option>
                                                <option value="Nigeria">Nigeria</option>
                                                <option value="North Korea">
                                                    North Korea
                                                </option>
                                                <option value="North Macedonia">
                                                    North Macedonia
                                                </option>
                                                <option value="Norway">Norway</option>
                                                <option value="Oman">Oman</option>
                                                <option value="Pakistan">
                                                    Pakistan
                                                </option>
                                                <option value="Palau">Palau</option>
                                                <option value="Panama">Panama</option>
                                                <option value="Papua New Guinea">
                                                    Papua New Guinea
                                                </option>
                                                <option value="Paraguay">
                                                    Paraguay
                                                </option>
                                                <option value="Peru">Peru</option>
                                                <option value="Philippines">
                                                    Philippines
                                                </option>
                                                <option value="Poland">Poland</option>
                                                <option value="Portugal">
                                                    Portugal
                                                </option>
                                                <option value="Qatar">Qatar</option>
                                                <option value="Romania">Romania</option>
                                                <option value="Russia">Russia</option>
                                                <option value="Rwanda">Rwanda</option>
                                                <option value="Saint Kitts and Nevis">
                                                    Saint Kitts and Nevis
                                                </option>
                                                <option value="Saint Lucia">
                                                    Saint Lucia
                                                </option>
                                                <option value="Saint Vincent and the Grenadines">
                                                    Saint Vincent and the Grenadines
                                                </option>
                                                <option value="Samoa">Samoa</option>
                                                <option value="San Marino">
                                                    San Marino
                                                </option>
                                                <option value="Sao Tome and Principe">
                                                    Sao Tome and Principe
                                                </option>
                                                <option value="Saudi Arabia">
                                                    Saudi Arabia
                                                </option>
                                                <option value="Senegal">Senegal</option>
                                                <option value="Serbia">Serbia</option>
                                                <option value="Seychelles">
                                                    Seychelles
                                                </option>
                                                <option value="Sierra Leone">
                                                    Sierra Leone
                                                </option>
                                                <option value="Singapore">
                                                    Singapore
                                                </option>
                                                <option value="Slovakia">
                                                    Slovakia
                                                </option>
                                                <option value="Slovenia">
                                                    Slovenia
                                                </option>
                                                <option value="Solomon Islands">
                                                    Solomon Islands
                                                </option>
                                                <option value="Somalia">Somalia</option>
                                                <option value="South Africa">
                                                    South Africa
                                                </option>
                                                <option value="South Korea">
                                                    South Korea
                                                </option>
                                                <option value="South Sudan">
                                                    South Sudan
                                                </option>
                                                <option value="Spain">Spain</option>
                                                <option value="Sri Lanka">
                                                    Sri Lanka
                                                </option>
                                                <option value="Sudan">Sudan</option>
                                                <option value="Suriname">
                                                    Suriname
                                                </option>
                                                <option value="Sweden">Sweden</option>
                                                <option value="Switzerland">
                                                    Switzerland
                                                </option>
                                                <option value="Syria">Syria</option>
                                                <option value="Taiwan">Taiwan</option>
                                                <option value="Tajikistan">
                                                    Tajikistan
                                                </option>
                                                <option value="Tanzania">
                                                    Tanzania
                                                </option>
                                                <option value="Thailand">
                                                    Thailand
                                                </option>
                                                <option value="Timor-Leste">
                                                    Timor-Leste
                                                </option>
                                                <option value="Togo">Togo</option>
                                                <option value="Tonga">Tonga</option>
                                                <option value="Trinidad and Tobago">
                                                    Trinidad and Tobago
                                                </option>
                                                <option value="Tunisia">Tunisia</option>
                                                <option value="Turkey">Turkey</option>
                                                <option value="Turkmenistan">
                                                    Turkmenistan
                                                </option>
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
                                                <option value="Uzbekistan">
                                                    Uzbekistan
                                                </option>
                                                <option value="Vanuatu">Vanuatu</option>
                                                <option value="Vatican City">
                                                    Vatican City
                                                </option>
                                                <option value="Venezuela">
                                                    Venezuela
                                                </option>
                                                <option value="Vietnam">Vietnam</option>
                                                <option value="Yemen">Yemen</option>
                                                <option value="Zambia">Zambia</option>
                                                <option value="Zimbabwe">
                                                    Zimbabwe
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 mt-4">
                                        <div class="form-group">
                                            <label class="form-label">Current Residential Address:</label>
                                            <input type="text" class="form-control" name="address"
                                                placeholder="Address..." required />
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 mt-4">
                                        <div class="form-group">
                                            <label class="form-label">Occupation | Profession:
                                            </label>
                                            <input name="profession" type="text" class="form-control"
                                                placeholder="Occupation..." required />
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 mt-4">
                                        <div class="form-group">
                                            <label class="form-label">Employer | Business Name:</label>
                                            <input name="business" type="text" class="form-control"
                                                placeholder="Business Name..." required />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="contact" role="tabpanel">
                            <div class="col-md-12 bg-white p-3">
                                <h6 class="pb-3">
                                    Please tell us a little about yourself and why
                                    you're interested in joining.
                                </h6>
                                <div class="">
                                    <div class="col-md-10 col-sm-10 border p-3">
                                        <label class="form-label">* Are you from A.I.A Community:</label>
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
                                    <div class="col-md-10 col-sm-10 border p-3 mt-3">
                                        <label class="form-label">* Briefly describe your interests, hobbies,
                                            or community involvement:</label>
                                        <textarea name="hobbies" id="" cols="30" rows="5" class="form-control" required></textarea>
                                    </div>
                                    <div class="col-md-10 col-sm-10 border p-3 mt-3">
                                        <label class="form-label">* Why are you interested in becoming a
                                            member of A.I.A. Big Brothers Social Club?
                                            What do you hope to gain or contribute?
                                        </label>
                                        <textarea name="interest" id="" cols="30" rows="5" class="form-control" required></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="account" role="tabpanel">
                            <div class="col-md-12 bg-white p-3">
                                <h6 class="pb-3">
                                    Please read carefully and tick the appropriate
                                    boxes.
                                </h6>
                                <div class="d-flex justify-content-around flex-wrap gap-3">
                                    <div class="col-sm-5 border p-3" style="margin-top: 1rem">
                                        <label class="form-label"><b>* Have you ever been convicted of a
                                                criminal offense?:</b></label>
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
                                    <div class="col-sm-5 border p-3" style="margin-top: 1rem">
                                        <label class="form-label"><b>* Medical Conditions/Allergies:</b>
                                            <br />
                                            Do you have any medical conditions or
                                            allergies the club should be aware of in
                                            case of an emergency? (This information will
                                            be kept confidential.)</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="medical" value="Yes"
                                                required />
                                            <label class="form-check-label" for="radioDefault1">
                                                Yes
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="medical" value="No"
                                                required />
                                            <label class="form-check-label" for="radioDefault2">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 border p-3" style="margin-top: 1rem">
                                        <label class="form-label"><b>* Character/Behavioral Standards:</b>
                                            <br />
                                            understand that membership in A.I.A. Big
                                            Brothers Social Club requires adherence to
                                            high standards of conduct, integrity, and
                                            respect for others. I agree to uphold the
                                            values and principles of the club and engage
                                            in activities that promote its positive
                                            image.</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="character"
                                                value="I Agree" required />
                                            <label class="form-check-label" for="radioDefault1">
                                                I Agree
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 border p-3" style="margin-top: 1rem">
                                        <label class="form-label"><b>* Confidentiality:</b> <br />
                                            I understand that certain club discussions
                                            or information shared amongst members may be
                                            confidential, and I agree to maintain this
                                            confidentiality.</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="confidentiality"
                                                value="I Agree" required />
                                            <label class="form-check-label" for="radioDefault1">
                                                I Agree
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 border p-3" style="margin-top: 1rem">
                                        <label class="form-label"><b>* Waiver of Liability:</b> I acknowledge
                                            that participation in A.I.A. Big Brothers
                                            Social Club activities is voluntary, and I
                                            agree to assume all risks associated with my
                                            participation. I release the A.I.A. Big
                                            Brothers Social Club, its officers, and
                                            members from any liability for injury, loss,
                                            or damage incurred during club
                                            activities.</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="liability"
                                                value="I Agree" required />
                                            <label class="form-check-label" for="radioDefault1">
                                                I Agree
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 border p-3" style="margin-top: 1rem">
                                        <label class="form-label"><b>* Declaration:</b> <br />
                                            I declare that the information provided in
                                            this application is true and correct to the
                                            best of my knowledge and belief. I
                                            understand that any false statement may lead
                                            to the rejection of my application or
                                            termination of my membership. I agree to
                                            abide by the Constitution, Bye-Laws, and
                                            decisions of the A.I.A. Big Brothers Social
                                            Club.</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="declaration"
                                                value="I Agree" required />
                                            <label class="form-check-label" for="radioDefault1">
                                                I Agree
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 mt-4 w-20 border">
                            <button class="btn btn-warning w-100" type="submit">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/Js/operations.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            handleFormSubmit('#createMember', '/members', 'POST', 'Members Created Successfully', function(
                newData) {
                const tbody = document.querySelector('#tableBody');
                const row = document.createElement('tr');
                row.id = `tableRow-${newData.id}`;

                row.innerHTML = `
                            <td>${newData.member_id}</td>
                            <td>${newData.firstname}</td>
                            <td>${newData.lastname}</td>
                            <td>${newData.email}</td>
                            <td>${newData.phone}</td>
                            <td>${newData.status}</td>
                            <td>
                            <span class="badge bg-dark fs-6 edit-btn" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="${newData.id}">
                                    <i class="ri-edit-box-line"></i>
                                </span>
                                <span class="badge bg-danger fs-6 delete-btn" data-id="${newData.id}">
                                    <i class="ri-delete-bin-line"></i>
                                </span>
                            </td>
                        `;
                tbody.appendChild(row);
            });

            handleDeleteButtons('#tableBody', '/members', 'tableRow-', 'Member Deleted Successfully');
        });
    </script>

@endsection
