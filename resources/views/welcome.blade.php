@include("partials.mainheader", [$title])   
<div class="container mx-auto min-h-[34rem]">
    <div class="flex justify-center items-center h-[25rem] md:h-[50rem]">
        <form>
            <div class="flex justify-center">
                <select id="country" name="country" class="flex-shrink-0 z-10 h-[70%] w-[15%] inline-flex items-center py-4 px-4 text-md font-medium text-left text-gray-500 bg-gray-100 border border-gray-300 rounded-l-lg hover:bg-gray-200 focus:ring-2 focus:outline-none focus:ring-indigo-700 scrollbar-thin scrollbar-thumb-gray-900 scrollbar-track-gray-100">
                    <option disabled selected>Country</option>
                    <option value="AF">Afghanistan</option>
                    <option value="AX">Aland Islands</option>
                    <option value="AL">Albania</option>
                    <option value="DZ">Algeria</option>
                    <option value="AS">American Samoa</option>
                    <option value="AD">Andorra</option>
                    <option value="AO">Angola</option>
                    <option value="AI">Anguilla</option>
                    <option value="AQ">Antarctica</option>
                    <option value="AG">Antigua and Barbuda</option>
                    <option value="AR">Argentina</option>
                    <option value="AM">Armenia</option>
                    <option value="AW">Aruba</option>
                    <option value="AU">Australia</option>
                    <option value="AT">Austria</option>
                    <option value="AZ">Azerbaijan</option>
                    <option value="BS">Bahamas</option>
                    <option value="BH">Bahrain</option>
                    <option value="BD">Bangladesh</option>
                    <option value="BB">Barbados</option>
                    <option value="BY">Belarus</option>
                    <option value="BE">Belgium</option>
                    <option value="BZ">Belize</option>
                    <option value="BJ">Benin</option>
                    <option value="BM">Bermuda</option>
                    <option value="BT">Bhutan</option>
                    <option value="BO">Bolivia</option>
                    <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                    <option value="BA">Bosnia and Herzegovina</option>
                    <option value="BW">Botswana</option>
                    <option value="BV">Bouvet Island</option>
                    <option value="BR">Brazil</option>
                    <option value="IO">British Indian Ocean Territory</option>
                    <option value="BN">Brunei Darussalam</option>
                    <option value="BG">Bulgaria</option>
                    <option value="BF">Burkina Faso</option>
                    <option value="BI">Burundi</option>
                    <option value="KH">Cambodia</option>
                    <option value="CM">Cameroon</option>
                    <option value="CA">Canada</option>
                    <option value="CV">Cape Verde</option>
                    <option value="KY">Cayman Islands</option>
                    <option value="CF">Central African Republic</option>
                    <option value="TD">Chad</option>
                    <option value="CL">Chile</option>
                    <option value="CN">China</option>
                    <option value="CX">Christmas Island</option>
                    <option value="CC">Cocos (Keeling) Islands</option>
                    <option value="CO">Colombia</option>
                    <option value="KM">Comoros</option>
                    <option value="CG">Congo</option>
                    <option value="CD">Congo, Democratic Republic of the Congo</option>
                    <option value="CK">Cook Islands</option>
                    <option value="CR">Costa Rica</option>
                    <option value="CI">Cote D'Ivoire</option>
                    <option value="HR">Croatia</option>
                    <option value="CU">Cuba</option>
                    <option value="CW">Curacao</option>
                    <option value="CY">Cyprus</option>
                    <option value="CZ">Czech Republic</option>
                    <option value="DK">Denmark</option>
                    <option value="DJ">Djibouti</option>
                    <option value="DM">Dominica</option>
                    <option value="DO">Dominican Republic</option>
                    <option value="EC">Ecuador</option>
                    <option value="EG">Egypt</option>
                    <option value="SV">El Salvador</option>
                    <option value="GQ">Equatorial Guinea</option>
                    <option value="ER">Eritrea</option>
                    <option value="EE">Estonia</option>
                    <option value="ET">Ethiopia</option>
                    <option value="FK">Falkland Islands (Malvinas)</option>
                    <option value="FO">Faroe Islands</option>
                    <option value="FJ">Fiji</option>
                    <option value="FI">Finland</option>
                    <option value="FR">France</option>
                    <option value="GF">French Guiana</option>
                    <option value="PF">French Polynesia</option>
                    <option value="TF">French Southern Territories</option>
                    <option value="GA">Gabon</option>
                    <option value="GM">Gambia</option>
                    <option value="GE">Georgia</option>
                    <option value="DE">Germany</option>
                    <option value="GH">Ghana</option>
                    <option value="GI">Gibraltar</option>
                    <option value="GR">Greece</option>
                    <option value="GL">Greenland</option>
                    <option value="GD">Grenada</option>
                    <option value="GP">Guadeloupe</option>
                    <option value="GU">Guam</option>
                    <option value="GT">Guatemala</option>
                    <option value="GG">Guernsey</option>
                    <option value="GN">Guinea</option>
                    <option value="GW">Guinea-Bissau</option>
                    <option value="GY">Guyana</option>
                    <option value="HT">Haiti</option>
                    <option value="HM">Heard Island and Mcdonald Islands</option>
                    <option value="VA">Holy See (Vatican City State)</option>
                    <option value="HN">Honduras</option>
                    <option value="HK">Hong Kong</option>
                    <option value="HU">Hungary</option>
                    <option value="IS">Iceland</option>
                    <option value="IN">India</option>
                    <option value="ID">Indonesia</option>
                    <option value="IR">Iran, Islamic Republic of</option>
                    <option value="IQ">Iraq</option>
                    <option value="IE">Ireland</option>
                    <option value="IM">Isle of Man</option>
                    <option value="IL">Israel</option>
                    <option value="IT">Italy</option>
                    <option value="JM">Jamaica</option>
                    <option value="JP">Japan</option>
                    <option value="JE">Jersey</option>
                    <option value="JO">Jordan</option>
                    <option value="KZ">Kazakhstan</option>
                    <option value="KE">Kenya</option>
                    <option value="KI">Kiribati</option>
                    <option value="KP">Korea, Democratic People's Republic of</option>
                    <option value="KR">Korea, Republic of</option>
                    <option value="XK">Kosovo</option>
                    <option value="KW">Kuwait</option>
                    <option value="KG">Kyrgyzstan</option>
                    <option value="LA">Lao People's Democratic Republic</option>
                    <option value="LV">Latvia</option>
                    <option value="LB">Lebanon</option>
                    <option value="LS">Lesotho</option>
                    <option value="LR">Liberia</option>
                    <option value="LY">Libyan Arab Jamahiriya</option>
                    <option value="LI">Liechtenstein</option>
                    <option value="LT">Lithuania</option>
                    <option value="LU">Luxembourg</option>
                    <option value="MO">Macao</option>
                    <option value="MK">Macedonia, the Former Yugoslav Republic of</option>
                    <option value="MG">Madagascar</option>
                    <option value="MW">Malawi</option>
                    <option value="MY">Malaysia</option>
                    <option value="MV">Maldives</option>
                    <option value="ML">Mali</option>
                    <option value="MT">Malta</option>
                    <option value="MH">Marshall Islands</option>
                    <option value="MQ">Martinique</option>
                    <option value="MR">Mauritania</option>
                    <option value="MU">Mauritius</option>
                    <option value="YT">Mayotte</option>
                    <option value="MX">Mexico</option>
                    <option value="FM">Micronesia, Federated States of</option>
                    <option value="MD">Moldova, Republic of</option>
                    <option value="MC">Monaco</option>
                    <option value="MN">Mongolia</option>
                    <option value="ME">Montenegro</option>
                    <option value="MS">Montserrat</option>
                    <option value="MA">Morocco</option>
                    <option value="MZ">Mozambique</option>
                    <option value="MM">Myanmar</option>
                    <option value="NA">Namibia</option>
                    <option value="NR">Nauru</option>
                    <option value="NP">Nepal</option>
                    <option value="NL">Netherlands</option>
                    <option value="AN">Netherlands Antilles</option>
                    <option value="NC">New Caledonia</option>
                    <option value="NZ">New Zealand</option>
                    <option value="NI">Nicaragua</option>
                    <option value="NE">Niger</option>
                    <option value="NG">Nigeria</option>
                    <option value="NU">Niue</option>
                    <option value="NF">Norfolk Island</option>
                    <option value="MP">Northern Mariana Islands</option>
                    <option value="NO">Norway</option>
                    <option value="OM">Oman</option>
                    <option value="PK">Pakistan</option>
                    <option value="PW">Palau</option>
                    <option value="PS">Palestinian Territory, Occupied</option>
                    <option value="PA">Panama</option>
                    <option value="PG">Papua New Guinea</option>
                    <option value="PY">Paraguay</option>
                    <option value="PE">Peru</option>
                    <option value="PH">Philippines</option>
                    <option value="PN">Pitcairn</option>
                    <option value="PL">Poland</option>
                    <option value="PT">Portugal</option>
                    <option value="PR">Puerto Rico</option>
                    <option value="QA">Qatar</option>
                    <option value="RE">Reunion</option>
                    <option value="RO">Romania</option>
                    <option value="RU">Russian Federation</option>
                    <option value="RW">Rwanda</option>
                    <option value="BL">Saint Barthelemy</option>
                    <option value="SH">Saint Helena</option>
                    <option value="KN">Saint Kitts and Nevis</option>
                    <option value="LC">Saint Lucia</option>
                    <option value="MF">Saint Martin</option>
                    <option value="PM">Saint Pierre and Miquelon</option>
                    <option value="VC">Saint Vincent and the Grenadines</option>
                    <option value="WS">Samoa</option>
                    <option value="SM">San Marino</option>
                    <option value="ST">Sao Tome and Principe</option>
                    <option value="SA">Saudi Arabia</option>
                    <option value="SN">Senegal</option>
                    <option value="RS">Serbia</option>
                    <option value="CS">Serbia and Montenegro</option>
                    <option value="SC">Seychelles</option>
                    <option value="SL">Sierra Leone</option>
                    <option value="SG">Singapore</option>
                    <option value="SX">Sint Maarten</option>
                    <option value="SK">Slovakia</option>
                    <option value="SI">Slovenia</option>
                    <option value="SB">Solomon Islands</option>
                    <option value="SO">Somalia</option>
                    <option value="ZA">South Africa</option>
                    <option value="GS">South Georgia and the South Sandwich Islands</option>
                    <option value="SS">South Sudan</option>
                    <option value="ES">Spain</option>
                    <option value="LK">Sri Lanka</option>
                    <option value="SD">Sudan</option>
                    <option value="SR">Suriname</option>
                    <option value="SJ">Svalbard and Jan Mayen</option>
                    <option value="SZ">Swaziland</option>
                    <option value="SE">Sweden</option>
                    <option value="CH">Switzerland</option>
                    <option value="SY">Syrian Arab Republic</option>
                    <option value="TW">Taiwan, Province of China</option>
                    <option value="TJ">Tajikistan</option>
                    <option value="TZ">Tanzania, United Republic of</option>
                    <option value="TH">Thailand</option>
                    <option value="TL">Timor-Leste</option>
                    <option value="TG">Togo</option>
                    <option value="TK">Tokelau</option>
                    <option value="TO">Tonga</option>
                    <option value="TT">Trinidad and Tobago</option>
                    <option value="TN">Tunisia</option>
                    <option value="TR">Turkey</option>
                    <option value="TM">Turkmenistan</option>
                    <option value="TC">Turks and Caicos Islands</option>
                    <option value="TV">Tuvalu</option>
                    <option value="UG">Uganda</option>
                    <option value="UA">Ukraine</option>
                    <option value="AE">United Arab Emirates</option>
                    <option value="GB">United Kingdom</option>
                    <option value="US">United States</option>
                    <option value="UM">United States Minor Outlying Islands</option>
                    <option value="UY">Uruguay</option>
                    <option value="UZ">Uzbekistan</option>
                    <option value="VU">Vanuatu</option>
                    <option value="VE">Venezuela</option>
                    <option value="VN">Viet Nam</option>
                    <option value="VG">Virgin Islands, British</option>
                    <option value="VI">Virgin Islands, U.s.</option>
                    <option value="WF">Wallis and Futuna</option>
                    <option value="EH">Western Sahara</option>
                    <option value="YE">Yemen</option>
                    <option value="ZM">Zambia</option>
                    <option value="ZW">Zimbabwe</option>
                </select>
                <div class="relative w-[20rem] xs:w-[20rem] sm:w-[30rem] md:w-[40rem] lg:w-[50rem]">
                    <input type="search" id="location-search" class="block p-4 w-full z-30 text-md text-gray-900 bg-gray-50 rounded-r-lg border-l-gray-50 border-l-3 border border-gray-300 focus:ring-indigo-700 focus:border-indigo-700  dark:placeholder-gray-400
                    dark:text-white dark:focus:border-indigo-500" placeholder="Job Search ...">
                    <button type="submit">
                        <span class="sr-only">Search</span>
                    </button>
                    <button type="submit" class="absolute top-0 right-0 h-[70.5%] p-4 text-md font-medium text-white bg-indigo-700 rounded-r-lg border border-indigo-700 hover:bg-indigo-800 focus:ring-2 focus:outline-none focus:ring-indigo-300">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <span class="sr-only">Search</span>
                    </button>
                    <button type="submit" class="absolute top-0 right-0 h-full p-2.5 text-sm font-medium text-white bg-indigo-700 rounded-r-lg border border-indigo-700 hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-indigo-300 dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800 hidden ">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                        <span class="sr-only">Search</span>
                    </button>
                </div>
            </div>
            <div class="flex justify-center items-center place-items-center">
                <a href="/careers" class="p-1 text-white font-semibold hover:text-gray-500">See All Jobs</a>
            </div>
        </form>
    </div>
    @if (Auth::check())
        <div class="md:-mt-56 py-5 mb-10">
            <h2 class="text-gray-200 text-2xl px-4 font-medium mb-5">Suggested Jobs</h2>
            <div class="flex flex-row overflow-x-scroll focus:scroll-auto space-x-2 p-4 mt-5 h-auto w-full mb-10">
                <div class="bg-white rounded-md shadow-md px-2 py-2 w-full">
                    <div class="inline-flex items-center">
                        <img src="{{ asset('assets/job/company_logo/default.png')}}" class="h-16 w-16 mr-2 shadow-sm" alt="Company Logo">
                        <p class="text-lg font-medium truncate whitespace-nowrap">Job title asdasdasdasa asdasdas</p>
                    </div>
                    <div class="flex flex-col justify-center mt-2 px-3">
                        <div class="inline-flex items-center mb-2">
                            <i class="fa-solid fa-location-dot text-xl mr-2 text-red-700"></i>
                            <p class="text-xl font-medium">Mandaluyong</p>
                        </div>
                        <div class="inline-flex items-center mb-2">
                            <i class="fa-solid fa-suitcase text-lg mr-2 text-gray-700"></i>
                            <p class="text-xl font-medium">Full time</p>
                        </div>
                        <div class="inline-flex items-center mb-2">
                            <i class="fa-solid fa-clock text-lg mr-2 text-gray-700"></i>
                            <p class="text-xl font-medium">12 days ago</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-md shadow-md px-2 py-2 w-full mr-4">
                    <div class="inline-flex items-center">
                        <img src="{{ asset('assets/job/company_logo/default.png')}}" class="h-16 w-16 mr-2 shadow-sm" alt="Company Logo">
                        <p class="text-lg font-medium truncate whitespace-nowrap">Job title asdasdasdasa asdasdas</p>
                    </div>
                    <div class="flex flex-col justify-center mt-2 px-3">
                        <div class="inline-flex items-center mb-2">
                            <i class="fa-solid fa-location-dot text-xl mr-2 text-red-700"></i>
                            <p class="text-xl font-medium">Mandaluyong</p>
                        </div>
                        <div class="inline-flex items-center mb-2">
                            <i class="fa-solid fa-suitcase text-lg mr-2 text-gray-700"></i>
                            <p class="text-xl font-medium">Full time</p>
                        </div>
                        <div class="inline-flex items-center mb-2">
                            <i class="fa-solid fa-clock text-lg mr-2 text-gray-700"></i>
                            <p class="text-xl font-medium">12 days ago</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-md shadow-md px-2 py-2 w-full mr-4">
                    <div class="inline-flex items-center">
                        <img src="{{ asset('assets/job/company_logo/default.png')}}" class="h-16 w-16 mr-2 shadow-sm" alt="Company Logo">
                        <p class="text-lg font-medium truncate whitespace-nowrap">Job title asdasdasdasa asdasdas</p>
                    </div>
                    <div class="flex flex-col justify-center mt-2 px-3">
                        <div class="inline-flex items-center mb-2">
                            <i class="fa-solid fa-location-dot text-xl mr-2 text-red-700"></i>
                            <p class="text-xl font-medium">Mandaluyong</p>
                        </div>
                        <div class="inline-flex items-center mb-2">
                            <i class="fa-solid fa-suitcase text-lg mr-2 text-gray-700"></i>
                            <p class="text-xl font-medium">Full time</p>
                        </div>
                        <div class="inline-flex items-center mb-2">
                            <i class="fa-solid fa-clock text-lg mr-2 text-gray-700"></i>
                            <p class="text-xl font-medium">12 days ago</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-md shadow-md px-2 py-2 w-full mr-4">
                    <div class="inline-flex items-center">
                        <img src="{{ asset('assets/job/company_logo/default.png')}}" class="h-16 w-16 mr-2 shadow-sm" alt="Company Logo">
                        <p class="text-lg font-medium truncate whitespace-nowrap">Job title asdasdasdasa asdasdas</p>
                    </div>
                    <div class="flex flex-col justify-center mt-2 px-3">
                        <div class="inline-flex items-center mb-2">
                            <i class="fa-solid fa-location-dot text-xl mr-2 text-red-700"></i>
                            <p class="text-xl font-medium">Mandaluyong</p>
                        </div>
                        <div class="inline-flex items-center mb-2">
                            <i class="fa-solid fa-suitcase text-lg mr-2 text-gray-700"></i>
                            <p class="text-xl font-medium">Full time</p>
                        </div>
                        <div class="inline-flex items-center mb-2">
                            <i class="fa-solid fa-clock text-lg mr-2 text-gray-700"></i>
                            <p class="text-xl font-medium">12 days ago</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-md shadow-md px-2 py-2 w-full mr-4">
                    <div class="inline-flex items-center">
                        <img src="{{ asset('assets/job/company_logo/default.png')}}" class="h-16 w-16 mr-2 shadow-sm" alt="Company Logo">
                        <p class="text-lg font-medium truncate whitespace-nowrap">Job title asdasdasdasa asdasdas</p>
                    </div>
                    <div class="flex flex-col justify-center mt-2 px-3">
                        <div class="inline-flex items-center mb-2">
                            <i class="fa-solid fa-location-dot text-xl mr-2 text-red-700"></i>
                            <p class="text-xl font-medium">Mandaluyong</p>
                        </div>
                        <div class="inline-flex items-center mb-2">
                            <i class="fa-solid fa-suitcase text-lg mr-2 text-gray-700"></i>
                            <p class="text-xl font-medium">Full time</p>
                        </div>
                        <div class="inline-flex items-center mb-2">
                            <i class="fa-solid fa-clock text-lg mr-2 text-gray-700"></i>
                            <p class="text-xl font-medium">12 days ago</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-md shadow-md px-2 py-2 w-full mr-4">
                    <div class="inline-flex items-center">
                        <img src="{{ asset('assets/job/company_logo/default.png')}}" class="h-16 w-16 mr-2 shadow-sm" alt="Company Logo">
                        <p class="text-lg font-medium truncate whitespace-nowrap">Job title asdasdasdasa asdasdas</p>
                    </div>
                    <div class="flex flex-col justify-center mt-2 px-3">
                        <div class="inline-flex items-center mb-2">
                            <i class="fa-solid fa-location-dot text-xl mr-2 text-red-700"></i>
                            <p class="text-xl font-medium">Mandaluyong</p>
                        </div>
                        <div class="inline-flex items-center mb-2">
                            <i class="fa-solid fa-suitcase text-lg mr-2 text-gray-700"></i>
                            <p class="text-xl font-medium">Full time</p>
                        </div>
                        <div class="inline-flex items-center mb-2">
                            <i class="fa-solid fa-clock text-lg mr-2 text-gray-700"></i>
                            <p class="text-xl font-medium">12 days ago</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
    @else

    @endif
</div>

@include('partials.footer')