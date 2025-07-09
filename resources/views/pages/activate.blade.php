@extends('layouts.admin')

@section('Title', 'Update Members Record')

@section('content')

    <div class="col-md-12">
        <h4 class="pb-3">Update Member Account</h4>

        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link bg-primary text-white" href="{{ route('members.index') }}">
                    Members List
                </a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"
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
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="activate-tab" data-bs-toggle="tab" data-bs-target="#activate"
                            type="button" role="tab">
                            Activate
                        </button>
                    </li>
                </ul>
                <div class="tab-content bg-white" id="pills-tabContent">
                    <form class="tab-content border border-top-0 p-4" action="{{ route('members.update', $member->id) }}"
                        method="post" id="myForm">
                        @csrf
                        @method('put')
                        <div class="tab-pane fade show active" id="personal" role="tabpanel">
                            <div class="col-md-12 bg-white p-3">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6 mt-4">
                                        <div class="form-group">
                                            <label class="form-label">First Name
                                            </label>
                                            <input name="firstname" type="text" class="form-control"
                                                value="{{ $member->firstname }}" required />
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 mt-4">
                                        <div class="form-group">
                                            <label class="form-label">Last Name</label>
                                            <input name="lastname" type="text" class="form-control"
                                                value="{{ $member->lastname }}" required />
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 mt-4">
                                        <div class="form-group">
                                            <label class="form-label">Email </label>
                                            <input name="email" type="email" class="form-control"
                                                value={{ $member->email }} required readonly />
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 mt-4">
                                        <div class="form-group">
                                            <label class="form-label">Phone Number
                                            </label>
                                            <input name="phone" type="number" class="form-control"
                                                value="{{ $member->phone }}" required />
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 mt-4">
                                        <div class="form-group">
                                            <label class="form-label">Date of Birth</label>
                                            <input name="dob" type="date" class="form-control"
                                                value="{{ $member->dob }}" required />
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 mt-4">
                                        <div class="form-group">
                                            <label class="form-label">Marital Status:</label>
                                            <select name="marital" class="form-control" required>
                                                <option value="Single"
                                                    {{ $member->marital === 'Single' ? 'selected' : '' }}>Single</option>
                                                <option value="Married"
                                                    {{ $member->marital === 'Married' ? 'selected' : '' }}>Married</option>
                                                <option value="Divorced"
                                                    {{ $member->marital === 'Divorced' ? 'selected' : '' }}>Divorced
                                                </option>
                                                <option value="Widowed"
                                                    {{ $member->marital === 'Widowed' ? 'selected' : '' }}>Widowed</option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 mt-4">
                                        @php
                                            $countries = [
                                                'Afghanistan',
                                                'Albania',
                                                'Algeria',
                                                'Andorra',
                                                'Angola',
                                                'Argentina',
                                                'Armenia',
                                                'Australia',
                                                'Austria',
                                                'Azerbaijan',
                                                'Bahamas',
                                                'Bahrain',
                                                'Bangladesh',
                                                'Barbados',
                                                'Belarus',
                                                'Belgium',
                                                'Belize',
                                                'Benin',
                                                'Bhutan',
                                                'Bolivia',
                                                'Bosnia and Herzegovina',
                                                'Botswana',
                                                'Brazil',
                                                'Brunei',
                                                'Bulgaria',
                                                'Burkina Faso',
                                                'Burundi',
                                                'Cabo Verde',
                                                'Cambodia',
                                                'Cameroon',
                                                'Canada',
                                                'Central African Republic',
                                                'Chad',
                                                'Chile',
                                                'China',
                                                'Colombia',
                                                'Comoros',
                                                'Congo',
                                                'Costa Rica',
                                                'Croatia',
                                                'Cuba',
                                                'Cyprus',
                                                'Czech Republic',
                                                'Denmark',
                                                'Djibouti',
                                                'Dominica',
                                                'Dominican Republic',
                                                'Ecuador',
                                                'Egypt',
                                                'El Salvador',
                                                'Equatorial Guinea',
                                                'Eritrea',
                                                'Estonia',
                                                'Eswatini',
                                                'Ethiopia',
                                                'Fiji',
                                                'Finland',
                                                'France',
                                                'Gabon',
                                                'Gambia',
                                                'Georgia',
                                                'Germany',
                                                'Ghana',
                                                'Greece',
                                                'Grenada',
                                                'Guatemala',
                                                'Guinea',
                                                'Guinea-Bissau',
                                                'Guyana',
                                                'Haiti',
                                                'Honduras',
                                                'Hungary',
                                                'Iceland',
                                                'India',
                                                'Indonesia',
                                                'Iran',
                                                'Iraq',
                                                'Ireland',
                                                'Israel',
                                                'Italy',
                                                'Jamaica',
                                                'Japan',
                                                'Jordan',
                                                'Kazakhstan',
                                                'Kenya',
                                                'Kiribati',
                                                'Kuwait',
                                                'Kyrgyzstan',
                                                'Laos',
                                                'Latvia',
                                                'Lebanon',
                                                'Lesotho',
                                                'Liberia',
                                                'Libya',
                                                'Liechtenstein',
                                                'Lithuania',
                                                'Luxembourg',
                                                'Madagascar',
                                                'Malawi',
                                                'Malaysia',
                                                'Maldives',
                                                'Mali',
                                                'Malta',
                                                'Marshall Islands',
                                                'Mauritania',
                                                'Mauritius',
                                                'Mexico',
                                                'Micronesia',
                                                'Moldova',
                                                'Monaco',
                                                'Mongolia',
                                                'Montenegro',
                                                'Morocco',
                                                'Mozambique',
                                                'Myanmar',
                                                'Namibia',
                                                'Nauru',
                                                'Nepal',
                                                'Netherlands',
                                                'New Zealand',
                                                'Nicaragua',
                                                'Niger',
                                                'Nigeria',
                                                'North Korea',
                                                'North Macedonia',
                                                'Norway',
                                                'Oman',
                                                'Pakistan',
                                                'Palau',
                                                'Panama',
                                                'Papua New Guinea',
                                                'Paraguay',
                                                'Peru',
                                                'Philippines',
                                                'Poland',
                                                'Portugal',
                                                'Qatar',
                                                'Romania',
                                                'Russia',
                                                'Rwanda',
                                                'Saint Kitts and Nevis',
                                                'Saint Lucia',
                                                'Saint Vincent and the Grenadines',
                                                'Samoa',
                                                'San Marino',
                                                'Sao Tome and Principe',
                                                'Saudi Arabia',
                                                'Senegal',
                                                'Serbia',
                                                'Seychelles',
                                                'Sierra Leone',
                                                'Singapore',
                                                'Slovakia',
                                                'Slovenia',
                                                'Solomon Islands',
                                                'Somalia',
                                                'South Africa',
                                                'South Korea',
                                                'South Sudan',
                                                'Spain',
                                                'Sri Lanka',
                                                'Sudan',
                                                'Suriname',
                                                'Sweden',
                                                'Switzerland',
                                                'Syria',
                                                'Taiwan',
                                                'Tajikistan',
                                                'Tanzania',
                                                'Thailand',
                                                'Timor-Leste',
                                                'Togo',
                                                'Tonga',
                                                'Trinidad and Tobago',
                                                'Tunisia',
                                                'Turkey',
                                                'Turkmenistan',
                                                'Tuvalu',
                                                'Uganda',
                                                'Ukraine',
                                                'United Arab Emirates',
                                                'United Kingdom',
                                                'United States',
                                                'Uruguay',
                                                'Uzbekistan',
                                                'Vanuatu',
                                                'Vatican City',
                                                'Venezuela',
                                                'Vietnam',
                                                'Yemen',
                                                'Zambia',
                                                'Zimbabwe',
                                            ];
                                        @endphp

                                        <div class="form-group">
                                            <label class="form-label">Nationality:</label>
                                            <select name="nationality" class="form-control" required>
                                                <option value="" hidden>Select a Country</option>
                                                @foreach ($countries as $country)
                                                    <option value="{{ $country }}"
                                                        {{ $member->nationality === $country ? 'selected' : '' }}>
                                                        {{ $country }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 mt-4">
                                        <div class="form-group">
                                            <label class="form-label">Place of Birth:</label>
                                            <input type="text" class="form-control" name="pob"
                                                value="{{ $member->pob }}" required />
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 mt-4">
                                        <div class="form-group">
                                            <label class="form-label">City:</label>
                                            <input name="city" type="text" class="form-control"
                                                value="{{ $member->pob }}" required />
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 mt-4">
                                        <div class="form-group">
                                            <label class="form-label">State: </label>
                                            <input name="state" type="text" class="form-control"
                                                value="{{ $member->state }}" required />
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 mt-4">
                                        <div class="form-group">
                                            <label class="form-label">Country:</label>
                                            <select name="country" id="country" class="form-control" required>
                                                @foreach ($countries as $country)
                                                    <option value="{{ $country }}"
                                                        {{ $member->country === $country ? 'selected' : '' }}>
                                                        {{ $country }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 mt-4">
                                        <div class="form-group">
                                            <label class="form-label">Current Residential Address:</label>
                                            <input type="text" class="form-control" name="address"
                                                value="{{ $member->address }}" required />
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 mt-4">
                                        <div class="form-group">
                                            <label class="form-label">Occupation | Profession:
                                            </label>
                                            <input name="profession" type="text" class="form-control"
                                                value="{{ $member->profession }}" required />
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 mt-4">
                                        <div class="form-group">
                                            <label class="form-label">Employer | Business Name:</label>
                                            <input name="business" type="text" class="form-control"
                                                value="{{ $member->business }}" required />
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
                                                id="radioDefault1" value="Yes"
                                                {{ $member->from_aia === 'Yes' ? 'checked' : '' }} required />
                                            <label class="form-check-label" for="radioDefault1">
                                                Yes
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="from_aia"
                                                id="radioDefault2" value="No"
                                                {{ $member->from_aia === 'No' ? 'checked' : '' }} required />
                                            <label class="form-check-label" for="radioDefault2">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-10 col-sm-10 border p-3 mt-3">
                                        <label class="form-label">* Briefly describe your interests, hobbies,
                                            or community involvement:</label>
                                        <textarea name="hobbies" id="" cols="30" rows="5" class="form-control" required>{{ $member->hobbies }} </textarea>
                                    </div>
                                    <div class="col-md-10 col-sm-10 border p-3 mt-3">
                                        <label class="form-label">* Why are you interested in becoming a
                                            member of A.I.A. Big Brothers Social Club?
                                            What do you hope to gain or contribute?
                                        </label>
                                        <textarea name="interest" id="" cols="30" rows="5" class="form-control" required>{{ $member->interest }}</textarea>
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
                                                value="Yes" {{ $member->convicted === 'Yes' ? 'checked' : '' }}
                                                required />
                                            <label class="form-check-label" for="radioDefault1">
                                                Yes
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="convicted"
                                                value="{{ $member->convicted === 'No' ? 'checked' : '' }}" required />
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
                                                {{ $member->medical === 'Yes' ? 'checked' : '' }} required />
                                            <label class="form-check-label" for="radioDefault1">
                                                Yes
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="medical" value="No"
                                                {{ $member->medical === 'No' ? 'checked' : '' }} required />
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
                                                value="I Agree" {{ $member->character === 'I Agree' ? 'checked' : '' }}
                                                required />
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
                                                value="I Agree"
                                                {{ $member->confidentiality === 'I Agree' ? 'checked' : '' }} required />
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
                                                value="I Agree" {{ $member->liability === 'I Agree' ? 'checked' : '' }}
                                                required />
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
                                                value="I Agree" {{ $member->declaration === 'I Agree' ? 'checked' : '' }}
                                                required />
                                            <label class="form-check-label" for="radioDefault1">
                                                I Agree
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="activate" role="tabpanel">
                            <div class="col-md-12 bg-white p-3">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Activate Member</label>
                                        <select name="status" class="form-control" value="">
                                            <option value="Pending" {{ $member->status === 'Pending' ? 'selected' : '' }}>
                                                Pending</option>
                                            <option value="Rejected"
                                                {{ $member->status === 'Rejected' ? 'selected' : '' }}>Rejected</option>
                                            <option value="Approved"
                                                {{ $member->status === 'Approved' ? 'selected' : '' }}>Approved</option>
                                            <option value="Deactivated"
                                                {{ $member->status === 'Deactivated' ? 'selected' : '' }}>Deactivated
                                            </option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Approved By</label>
                                        <select name="official_name" id="" class="form-control">
                                            <option hidden selected>
                                                Select Official
                                            </option>
                                            @foreach ($officials as $official)
                                                <option value="{{ $official->id }}">
                                                    {{ $official->firstname . ' ' . $official->lastname }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Date of Activation</label>
                                        <input type="date" value="{{ $member->date_approved }}" class="form-control"
                                            name="date_approved">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 mt-4 w-20 border">
                            <button class="btn btn-warning w-100" type="submit" id="submitBtn">
                                Update Member
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/Js/operations.js') }}"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            document.getElementById("myForm").addEventListener("submit", function() {
                const btn = document.getElementById("submitBtn");
                btn.disabled = true;
                btn.innerHTML = 'Please wait... <span class="spinner-border spinner-border-sm"></span>';
            });

        })
    </script>
@endsection
