<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="mainSignup">
        <div class="signUp">
            <div class="leftSignup">
                <div class="mainBrandLogo">
                    <img src="assets/companyLogo.png" alt="brandLogo" class="brandLogo">
                    <img src="assets/watermarkLogo.svg" alt="brandLogo Watermark" class="brandLogoWaterMark">
                </div>
            </div>
            <div class="rightSignup">
                <div class="step step-1">
                    <div class="signUpHeading">
                        <h3>Let’s Get You Started!</h3>
                        <span>The design will highlight your brand’s elegance and heritage while ensuring a smooth user
                            journey
                            for browsing collections.</span>
                    </div>
                    <div class="mainSignUpCredential">
                        <div class="signUpCredential">
                            <input type="text" placeholder=" " id="name" required>
                            <label for="name">Name</label>
                        </div>
                        <div class="signUpCredential">
                            <input type="text" placeholder=" " id="Company Name" required>
                            <label for="companyName">Company Name</label>
                        </div>
                        <div class="signUpCredential">
                            <input type="text" placeholder=" " id="phoneNumber" required>
                            <label for="phoneNumber">Phone No.</label>
                        </div>
                        <div class="signUpCredential">
                            <input type="text" placeholder=" " id="emailId" required>
                            <label for="emailId">Email ID</label>
                        </div>
                        <div class="checkbox-wrapper-46">
                            <input class="inp-cbx" id="cbx-46" type="checkbox" />
                            <label class="cbx" for="cbx-46"><span>
                                    <svg width="12px" height="10px" viewbox="0 0 12 10">
                                        <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                    </svg></span><span class="checkboxSpan">I have accept the <a href="">Terms &
                                        policies</a></span>
                            </label>
                        </div>
                        <div class="alreadyAccount">
                            <span>Already have an account? <a href="">Login</a></span>
                        </div>
                        <div class="signUpButtons">
                            <button type="button" class="sendOtpBtn next-step">Send OTP</button>
                            <button type="button" class="cancelBtn">Cancel</button>
                        </div>
                    </div>
                </div>
                <div class="step step-2">
                    <div class="signUpHeading">
                        <h3>Verify your mobile number </h3>
                        <span>The design will highlight your brand’s elegance and heritage while ensuring a smooth user
                            journey
                            for browsing collections.</span>
                    </div>
                    <div class="mainSignUpCredential">
                        <div class="signUpCredential">
                            <input type="number" placeholder=" " id="phoneNumber">
                            <label for="phoneNumber">Phone No.</label>
                        </div>
                        <div class="mainOtpForm">
                            <span class="enterOtpText">Enter OTP</span>
                            <form id="otp-form">
                                <input type="text" class="otp-input" maxlength="1">
                                <input type="text" class="otp-input" maxlength="1">
                                <input type="text" class="otp-input" maxlength="1">
                                <input type="text" class="otp-input" maxlength="1">
                            </form>
                        </div>
                        <div class="alreadyAccount">
                            <span>Didn’t get OTP? <a href="">Resend</a></span>
                        </div>
                        <div class="signUpButtons">
                            <button type="button" class="backBtn prev-step">Back</button>
                            <button type="button" class="sendOtpBtn next-step">Verify and proceed</button>
                        </div>
                    </div>
                </div>
                <div class="step step-3">
                    <div class="signUpHeading text-center">
                        <h3>Welcome</h3>
                        <span>The design will highlight your brand’s elegance and heritage while ensuring a smooth user
                            journey for browsing collections.</span>
                    </div>
                    <div class="mainSignUpCredential">
                        <div class="signUpCredential">
                            <select id="country" required>
                                <option value="" disabled selected>Your Country</option>
                                <option value="Afghanistan">Afghanistan</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
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
                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
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
                                <option value="Central African Republic">Central African Republic</option>
                                <option value="Chad">Chad</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Comoros">Comoros</option>
                                <option value="Congo, Democratic Republic of the">Congo, Democratic Republic of the
                                </option>
                                <option value="Congo, Republic of the">Congo, Republic of the</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Croatia">Croatia</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Cyprus">Cyprus</option>
                                <option value="Czech Republic">Czech Republic</option>
                                <option value="Denmark">Denmark</option>
                                <option value="Djibouti">Djibouti</option>
                                <option value="Dominica">Dominica</option>
                                <option value="Dominican Republic">Dominican Republic</option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="Egypt">Egypt</option>
                                <option value="El Salvador">El Salvador</option>
                                <option value="Equatorial Guinea">Equatorial Guinea</option>
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
                                <option value="Guinea-Bissau">Guinea-Bissau</option>
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
                                <option value="Korea, North">Korea, North</option>
                                <option value="Korea, South">Korea, South</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                <option value="Laos">Laos</option>
                                <option value="Latvia">Latvia</option>
                                <option value="Lebanon">Lebanon</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Libya">Libya</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Lithuania">Lithuania</option>
                                <option value="Luxembourg">Luxembourg</option>
                                <option value="Madagascar">Madagascar</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Maldives">Maldives</option>
                                <option value="Mali">Mali</option>
                                <option value="Malta">Malta</option>
                                <option value="Marshall Islands">Marshall Islands</option>
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
                                <option value="North Macedonia">North Macedonia</option>
                                <option value="Norway">Norway</option>
                                <option value="Oman">Oman</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Palau">Palau</option>
                                <option value="Panama">Panama</option>
                                <option value="Papua New Guinea">Papua New Guinea</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Peru">Peru</option>
                                <option value="Philippines">Philippines</option>
                                <option value="Poland">Poland</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Romania">Romania</option>
                                <option value="Russia">Russia</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                <option value="Saint Lucia">Saint Lucia</option>
                                <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines
                                </option>
                                <option value="Samoa">Samoa</option>
                                <option value="San Marino">San Marino</option>
                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Serbia">Serbia</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="Sierra Leone">Sierra Leone</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Slovakia">Slovakia</option>
                                <option value="Slovenia">Slovenia</option>
                                <option value="Solomon Islands">Solomon Islands</option>
                                <option value="Somalia">Somalia</option>
                                <option value="South Africa">South Africa</option>
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
                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                <option value="Tunisia">Tunisia</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Uganda">Uganda</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Emirates">United Arab Emirates</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States">United States</option>
                                <option value="Uruguay">Uruguay</option>
                                <option value="Uzbekistan">Uzbekistan</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Venezuela">Venezuela</option>
                                <option value="Vietnam">Vietnam</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabwe">Zimbabwe</option>
                            </select>
                        </div>
                        <div class="signUpCredential">
                            <select id="timezone" required>
                                <option value="" disabled selected>Time Zone</option>
                                <!-- Time zones will be dynamically populated based on country selection -->
                            </select>
                        </div>
                        <div class="signUpButtons mt-4">
                            <button type="button" class="backBtn prev-step">Back</button>
                            <button type="button" class="sendOtpBtn next-step">Next</button>
                        </div>
                    </div>
                </div>
                <div class="step step-4">
                    <div class="signUpHeading text-center">
                        <h3>Let’s set up your account</h3>
                        <span>The design will highlight your brand’s elegance and heritage while ensuring a smooth user
                            journey
                            for browsing collections.</span>
                    </div>
                    <div class="mainSignUpCredential">
                        <div class="signUpCredential">
                            <input type="text" placeholder=" " id="setUpName" required>
                            <label for="setUpName">Name</label>
                        </div>
                        <div class="signUpCredential">
                            <input type="email" placeholder=" " id="setUpEmail" required>
                            <label for="setUpEmail">Email</label>
                        </div>
                        <div class="signUpButtons">
                            <button type="button" class="backBtn prev-step">Back</button>
                            <button type="button" class="sendOtpBtn next-step">Next</button>
                        </div>
                    </div>
                </div>
                <div class="step step-5">
                    <div class="signUpHeading">
                        <h3>Setup your Organization</h3>
                        <span>The design will highlight your brand’s elegance and heritage while ensuring a smooth user
                            journey
                            for browsing collections.</span>
                    </div>
                    <div class="mainSignUpCredential row">
                        <div class="col-12">
                            <div class="signUpCredential">
                                <input type="text" placeholder=" " id="companyGSTNumber" required>
                                <label for="companyGSTNumber">Company GSTIN</label>
                            </div>
                        </div>
                        <div class="col-12 mt-4">
                            <div class="signUpCredential">
                                <input type="text" placeholder=" " id="companyAbbreviation" required>
                                <label for="companyName">Company Abbreviation</label>
                            </div>
                        </div>
                        <div class="col-6 mt-4">
                            <div class="signUpCredential">
                                <input type="text" placeholder=" " id="gstRate" required>
                                <label for="gstRate">GST Rate</label>
                            </div>
                        </div>
                        <div class="col-6 mt-4">
                            <div class="signUpCredential">
                                <input type="text" placeholder=" " id="financialYear" required>
                                <label for="financialYear">Financial Year</label>
                            </div>
                        </div>
                        <div class="signUpButtons mt-4">
                            <button type="button" class="backBtn prev-step">Back</button>
                            <button type="button" class="sendOtpBtn">Complete Setup</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="signupShape">
            <img src="assets/shape01.svg" alt="" class="signupShape01">
            <img src="assets/shape02.svg" alt="" class="signupShape02">
            <img src="assets/shape03.svg" alt="" class="signupShape03">
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>
        const otpForm = document.querySelector("#otp-form");
        const inputs = document.querySelectorAll(".otp-input");
        const verifyBtn = document.querySelector("#verify-btn");

        const isAllInputFilled = () => {
            return Array.from(inputs).every((item) => item.value);
        };

        const getOtpText = () => {
            let text = "";
            inputs.forEach((input) => {
                text += input.value;
            });
            return text;
        };

        const toggleFilledClass = (field) => {
            if (field.value) {
                field.classList.add("filled");
            } else {
                field.classList.remove("filled");
            }
        };

        otpForm.addEventListener("input", (e) => {
            const target = e.target;
            const value = target.value;
            console.log({ target, value });
            toggleFilledClass(target);
            if (target.nextElementSibling) {
                target.nextElementSibling.focus();
            }
        });

        inputs.forEach((input, currentIndex) => {
            // fill check
            toggleFilledClass(input);

            // paste event
            input.addEventListener("paste", (e) => {
                e.preventDefault();
                const text = e.clipboardData.getData("text");
                console.log(text);
                inputs.forEach((item, index) => {
                    if (index >= currentIndex && text[index - currentIndex]) {
                        item.focus();
                        item.value = text[index - currentIndex] || "";
                        toggleFilledClass(item);
                    }
                });
            });

            // backspace event
            input.addEventListener("keydown", (e) => {
                if (e.keyCode === 8) {
                    e.preventDefault();
                    input.value = "";
                    // console.log(input.value);
                    toggleFilledClass(input);
                    if (input.previousElementSibling) {
                        input.previousElementSibling.focus();
                    }
                } else {
                    if (input.value && input.nextElementSibling) {
                        input.nextElementSibling.focus();
                    }
                }
            });
        });


        var currentStep = 1;

        $('.rightSignup').find('.step').slice(1).hide();

        $(".next-step").click(function () {
            if (currentStep < 6) {
                $(".step-" + currentStep).addClass("animate__animated animate__fadeOutLeft");
                currentStep++;
                setTimeout(function () {
                    $(".step").removeClass("animate__animated animate__fadeOutLeft").hide();
                    $(".step-" + currentStep).show().addClass("animate__animated animate__fadeInRight");
                    // updateProgressBar();
                }, 500);
            }
        });

        $(".prev-step").click(function () {
            if (currentStep > 1) {
                $(".step-" + currentStep).addClass("animate__animated animate__fadeOutRight");
                currentStep--;
                setTimeout(function () {
                    $(".step").removeClass("animate__animated animate__fadeOutRight").hide();
                    $(".step-" + currentStep).show().addClass("animate__animated animate__fadeInLeft");
                    // updateProgressBar();
                }, 500);
            }
        });

        const countryToTimezonesMap = {
            'Afghanistan': ['Asia/Kabul'],
            'Albania': ['Europe/Tirane'],
            'Algeria': ['Africa/Algiers'],
            'Andorra': ['Europe/Andorra'],
            'Angola': ['Africa/Luanda'],
            'Antigua and Barbuda': ['America/Antigua'],
            'Argentina': ['America/Argentina/Buenos_Aires'],
            'Armenia': ['Asia/Yerevan'],
            'Australia': ['Australia/Sydney', 'Australia/Perth', 'Australia/Adelaide', 'Australia/Darwin', 'Australia/Brisbane', 'Australia/Hobart', 'Australia/Melbourne', 'Australia/Lord_Howe', 'Australia/Eucla'],
            'Austria': ['Europe/Vienna'],
            'Azerbaijan': ['Asia/Baku'],
            'Bahamas': ['America/Nassau'],
            'Bahrain': ['Asia/Bahrain'],
            'Bangladesh': ['Asia/Dhaka'],
            'Barbados': ['America/Barbados'],
            'Belarus': ['Europe/Minsk'],
            'Belgium': ['Europe/Brussels'],
            'Belize': ['America/Belize'],
            'Benin': ['Africa/Porto-Novo'],
            'Bhutan': ['Asia/Thimphu'],
            'Bolivia': ['America/La_Paz'],
            'Bosnia and Herzegovina': ['Europe/Sarajevo'],
            'Botswana': ['Africa/Gaborone'],
            'Brazil': ['America/Sao_Paulo', 'America/Manaus', 'America/Porto_Velho', 'America/Rio_Branco'],
            'Brunei': ['Asia/Brunei'],
            'Bulgaria': ['Europe/Sofia'],
            'Burkina Faso': ['Africa/Ouagadougou'],
            'Burundi': ['Africa/Gitega'],
            'Cabo Verde': ['Atlantic/Cape_Verde'],
            'Cambodia': ['Asia/Phnom_Penh'],
            'Cameroon': ['Africa/Douala'],
            'Canada': ['America/Toronto', 'America/Vancouver', 'America/Winnipeg', 'America/Edmonton', 'America/Halifax', 'America/St_Johns'],
            'Central African Republic': ['Africa/Bangui'],
            'Chad': ['Africa/Ndjamena'],
            'Chile': ['America/Santiago', 'Pacific/Easter'],
            'China': ['Asia/Shanghai'],
            'Colombia': ['America/Bogota'],
            'Comoros': ['Indian/Comoro'],
            'Congo, Democratic Republic of the': ['Africa/Kinshasa', 'Africa/Lubumbashi'],
            'Congo, Republic of the': ['Africa/Brazzaville'],
            'Costa Rica': ['America/Costa_Rica'],
            'Croatia': ['Europe/Zagreb'],
            'Cuba': ['America/Havana'],
            'Cyprus': ['Asia/Nicosia'],
            'Czech Republic': ['Europe/Prague'],
            'Denmark': ['Europe/Copenhagen', 'America/Nuuk', 'America/Thule'],
            'Djibouti': ['Africa/Djibouti'],
            'Dominica': ['America/Dominica'],
            'Dominican Republic': ['America/Santo_Domingo'],
            'Ecuador': ['America/Guayaquil', 'Pacific/Galapagos'],
            'Egypt': ['Africa/Cairo'],
            'El Salvador': ['America/El_Salvador'],
            'Equatorial Guinea': ['Africa/Malabo'],
            'Eritrea': ['Africa/Asmara'],
            'Estonia': ['Europe/Tallinn'],
            'Eswatini': ['Africa/Mbabane'],
            'Ethiopia': ['Africa/Addis_Ababa'],
            'Fiji': ['Pacific/Fiji'],
            'Finland': ['Europe/Helsinki'],
            'France': ['Europe/Paris', 'Pacific/Tahiti', 'America/Martinique', 'Indian/Reunion', 'Pacific/Noumea', 'Pacific/Wallis', 'America/Guadeloupe', 'America/Cayenne', 'Indian/Mayotte', 'America/St_Pierre', 'Indian/Kerguelen'],
            'Gabon': ['Africa/Libreville'],
            'Gambia': ['Africa/Banjul'],
            'Georgia': ['Asia/Tbilisi'],
            'Germany': ['Europe/Berlin'],
            'Ghana': ['Africa/Accra'],
            'Greece': ['Europe/Athens'],
            'Grenada': ['America/Grenada'],
            'Guatemala': ['America/Guatemala'],
            'Guinea': ['Africa/Conakry'],
            'Guinea-Bissau': ['Africa/Bissau'],
            'Guyana': ['America/Guyana'],
            'Haiti': ['America/Port-au-Prince'],
            'Honduras': ['America/Tegucigalpa'],
            'Hungary': ['Europe/Budapest'],
            'Iceland': ['Atlantic/Reykjavik'],
            'India': ['Asia/Kolkata'],
            'Indonesia': ['Asia/Jakarta', 'Asia/Makassar', 'Asia/Jayapura'],
            'Iran': ['Asia/Tehran'],
            'Iraq': ['Asia/Baghdad'],
            'Ireland': ['Europe/Dublin'],
            'Israel': ['Asia/Jerusalem'],
            'Italy': ['Europe/Rome'],
            'Jamaica': ['America/Jamaica'],
            'Japan': ['Asia/Tokyo'],
            'Jordan': ['Asia/Amman'],
            'Kazakhstan': ['Asia/Almaty', 'Asia/Aqtau'],
            'Kenya': ['Africa/Nairobi'],
            'Kiribati': ['Pacific/Tarawa', 'Pacific/Kiritimati', 'Pacific/Enderbury'],
            'Korea, North': ['Asia/Pyongyang'],
            'Korea, South': ['Asia/Seoul'],
            'Kuwait': ['Asia/Kuwait'],
            'Kyrgyzstan': ['Asia/Bishkek'],
            'Laos': ['Asia/Vientiane'],
            'Latvia': ['Europe/Riga'],
            'Lebanon': ['Asia/Beirut'],
            'Lesotho': ['Africa/Maseru'],
            'Liberia': ['Africa/Monrovia'],
            'Libya': ['Africa/Tripoli'],
            'Liechtenstein': ['Europe/Vaduz'],
            'Lithuania': ['Europe/Vilnius'],
            'Luxembourg': ['Europe/Luxembourg'],
            'Madagascar': ['Indian/Antananarivo'],
            'Malawi': ['Africa/Blantyre'],
            'Malaysia': ['Asia/Kuala_Lumpur'],
            'Maldives': ['Indian/Maldives'],
            'Mali': ['Africa/Bamako'],
            'Malta': ['Europe/Malta'],
            'Marshall Islands': ['Pacific/Majuro'],
            'Mauritania': ['Africa/Nouakchott'],
            'Mauritius': ['Indian/Mauritius'],
            'Mexico': ['America/Mexico_City', 'America/Tijuana', 'America/Cancun', 'America/Hermosillo'],
            'Micronesia': ['Pacific/Chuuk', 'Pacific/Pohnpei'],
            'Moldova': ['Europe/Chisinau'],
            'Monaco': ['Europe/Monaco'],
            'Mongolia': ['Asia/Ulaanbaatar', 'Asia/Hovd'],
            'Montenegro': ['Europe/Podgorica'],
            'Morocco': ['Africa/Casablanca'],
            'Mozambique': ['Africa/Maputo'],
            'Myanmar': ['Asia/Yangon'],
            'Namibia': ['Africa/Windhoek'],
            'Nauru': ['Pacific/Nauru'],
            'Nepal': ['Asia/Kathmandu'],
            'Netherlands': ['Europe/Amsterdam'],
            'New Zealand': ['Pacific/Auckland', 'Pacific/Chatham'],
            'Nicaragua': ['America/Managua'],
            'Niger': ['Africa/Niamey'],
            'Nigeria': ['Africa/Lagos'],
            'North Macedonia': ['Europe/Skopje'],
            'Norway': ['Europe/Oslo'],
            'Oman': ['Asia/Muscat'],
            'Pakistan': ['Asia/Karachi'],
            'Palau': ['Pacific/Palau'],
            'Panama': ['America/Panama'],
            'Papua New Guinea': ['Pacific/Port_Moresby'],
            'Paraguay': ['America/Asuncion'],
            'Peru': ['America/Lima'],
            'Philippines': ['Asia/Manila'],
            'Poland': ['Europe/Warsaw'],
            'Portugal': ['Europe/Lisbon', 'Atlantic/Azores'],
            'Qatar': ['Asia/Qatar'],
            'Romania': ['Europe/Bucharest'],
            'Russia': ['Europe/Moscow', 'Asia/Yekaterinburg', 'Asia/Novosibirsk', 'Asia/Krasnoyarsk', 'Asia/Irkutsk', 'Asia/Yakutsk', 'Asia/Vladivostok', 'Asia/Magadan', 'Asia/Kamchatka', 'Asia/Anadyr', 'Europe/Kaliningrad'],
            'Rwanda': ['Africa/Kigali'],
            'Saint Kitts and Nevis': ['America/St_Kitts'],
            'Saint Lucia': ['America/St_Lucia'],
            'Saint Vincent and the Grenadines': ['America/St_Vincent'],
            'Samoa': ['Pacific/Apia'],
            'San Marino': ['Europe/San_Marino'],
            'Sao Tome and Principe': ['Africa/Sao_Tome'],
            'Saudi Arabia': ['Asia/Riyadh'],
            'Senegal': ['Africa/Dakar'],
            'Serbia': ['Europe/Belgrade'],
            'Seychelles': ['Indian/Mahe'],
            'Sierra Leone': ['Africa/Freetown'],
            'Singapore': ['Asia/Singapore'],
            'Slovakia': ['Europe/Bratislava'],
            'Slovenia': ['Europe/Ljubljana'],
            'Solomon Islands': ['Pacific/Guadalcanal'],
            'Somalia': ['Africa/Mogadishu'],
            'South Africa': ['Africa/Johannesburg'],
            'South Sudan': ['Africa/Juba'],
            'Spain': ['Europe/Madrid', 'Africa/Ceuta'],
            'Sri Lanka': ['Asia/Colombo'],
            'Sudan': ['Africa/Khartoum'],
            'Suriname': ['America/Paramaribo'],
            'Sweden': ['Europe/Stockholm'],
            'Switzerland': ['Europe/Zurich'],
            'Syria': ['Asia/Damascus'],
            'Taiwan': ['Asia/Taipei'],
            'Tajikistan': ['Asia/Dushanbe'],
            'Tanzania': ['Africa/Dar_es_Salaam'],
            'Thailand': ['Asia/Bangkok'],
            'Timor-Leste': ['Asia/Dili'],
            'Togo': ['Africa/Lome'],
            'Tonga': ['Pacific/Tongatapu'],
            'Trinidad and Tobago': ['America/Port_of_Spain'],
            'Tunisia': ['Africa/Tunis'],
            'Turkey': ['Europe/Istanbul'],
            'Turkmenistan': ['Asia/Ashgabat'],
            'Tuvalu': ['Pacific/Funafuti'],
            'Uganda': ['Africa/Kampala'],
            'Ukraine': ['Europe/Kyiv'],
            'United Arab Emirates': ['Asia/Dubai'],
            'United Kingdom': ['Europe/London', 'America/Cayman', 'Atlantic/Bermuda', 'Pacific/Pitcairn', 'Indian/Chagos', 'Atlantic/Falkland', 'Atlantic/St_Helena', 'America/Anguilla', 'Europe/Gibraltar'],
            'United States': ['America/New_York', 'America/Chicago', 'America/Denver', 'America/Los_Angeles', 'America/Anchorage', 'Pacific/Honolulu', 'Pacific/Guam', 'Pacific/Pago_Pago', 'Pacific/Wake', 'America/Puerto_Rico', 'America/Adak'],
            'Uruguay': ['America/Montevideo'],
            'Uzbekistan': ['Asia/Tashkent'],
            'Vanuatu': ['Pacific/Efate'],
            'Venezuela': ['America/Caracas'],
            'Vietnam': ['Asia/Ho_Chi_Minh'],
            'Yemen': ['Asia/Aden'],
            'Zambia': ['Africa/Lusaka'],
            'Zimbabwe': ['Africa/Harare']
        };

        const countrySelect = document.getElementById('country');
        const timezoneSelect = document.getElementById('timezone');

        // Populate time zone dropdown based on selected country
        countrySelect.addEventListener('change', function () {
            const selectedCountry = this.value;
            const timezones = countryToTimezonesMap[selectedCountry] || [];

            // Clear existing options except the default
            timezoneSelect.innerHTML = '<option value="" disabled selected>選択してください</option>';

            // Add time zones for the selected country
            timezones.forEach(timezone => {
                const option = document.createElement('option');
                option.value = timezone;
                option.textContent = timezone;
                timezoneSelect.appendChild(option);
            });

            // Set default time zone if only one exists
            if (timezones.length === 1) {
                timezoneSelect.value = timezones[0];
            } else {
                timezoneSelect.value = '';
            }
        });
    </script>
</body>

</html>