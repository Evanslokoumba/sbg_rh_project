
@extends('contenus/mises-en-page/contenu')
@section('bodycontent')

    <!--  CONTENUS AU CENTRE  -->
    <h2> Test contenu - Création formulaire </h2>
    <div>
        <div class="col-lg-6 col-xl-12 col-xxl-6 h-100">
            <div class="d-flex mb-4"><span class="fa-stack me-2 ms-n1"><i class="fas fa-circle fa-stack-2x text-300"></i><i class="fa-inverse fa-stack-1x text-primary fas fa-check-double"></i></span>
                <div class="col">
                    <h5 class="mb-0 text-primary position-relative"><span class="bg-200 dark__bg-1100 pe-3">Formulaire d'enregisrement de demandes</span><span class="border position-absolute top-50 translate-middle-y w-100 start-0 z-n1"></span></h5>
                    <p class="mb-0">Veuillez remplir progressivement les formulaires en respectant les directives de chaque pages.</p>
                </div>
            </div>
            <div class="card theme-wizard h-100 mb-5">
                <div class="card-header bg-body-tertiary pt-3 pb-2">
                    <ul class="nav justify-content-between nav-wizard">
                        <li class="nav-item"><a class="nav-link active fw-semi-bold" href="#bootstrap-wizard-validation-tab1" data-bs-toggle="tab" data-wizard-step="1"><span class="nav-item-circle-parent"><span class="nav-item-circle"><span class="fas fa-user"></span></span></span><span class="d-none d-md-block mt-1 fs--1">Identification</span></a></li>
                        <li class="nav-item"><a class="nav-link fw-semi-bold" href="#bootstrap-wizard-validation-tab2" data-bs-toggle="tab" data-wizard-step="2"><span class="nav-item-circle-parent"><span class="nav-item-circle"><span class="fas fa-file-alt"></span></span></span><span class="d-none d-md-block mt-1 fs--1">Contenu de demande</span></a></li>
                        <!-- BILLING
                        <li class="nav-item"><a class="nav-link fw-semi-bold" href="#bootstrap-wizard-validation-tab3" data-bs-toggle="tab" data-wizard-step="3"><span class="nav-item-circle-parent"><span class="nav-item-circle"><span class="fas fa-dollar-sign"></span></span></span><span class="d-none d-md-block mt-1 fs--1">Billing</span></a></li>
                        -->
                        <li class="nav-item"><a class="nav-link fw-semi-bold" href="#bootstrap-wizard-validation-tab4" data-bs-toggle="tab" data-wizard-step="4"><span class="nav-item-circle-parent"><span class="nav-item-circle"><span class="fas fa-thumbs-up"></span></span></span><span class="d-none d-md-block mt-1 fs--1">Terminé</span></a></li>
                    </ul>
                </div>
                <div class="card-body py-4" id="wizard-controller">
                    <div class="tab-content">


                        <div class="tab-pane active px-sm-3 px-md-5" role="tabpanel" aria-labelledby="bootstrap-wizard-validation-tab1" id="bootstrap-wizard-validation-tab1">
                            <form method="post" action="#" class="needs-validation" novalidate="novalidate" data-wizard-form="1">
                                @csrf

                                <div class="mb-3">
                                    <label class="form-label" for="bootstrap-wizard-validation-wizard-name">Nom(s) <span style="color: red">*</span></label>
                                    <input class="form-control" type="text" name="name" placeholder="Saisir votre nom" required="required" id="bootstrap-wizard-validation-wizard-name" />
                                    <div class="invalid-feedback">Champ obligatoire</div>
                                </div>
                                <div class="row g-2">
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="bootstrap-wizard-validation-wizard-name">Prénom(s) <span style="color: red">*</span></label>
                                            <input class="form-control" type="text" name="name" placeholder="Saisir votre prénom" required="required" id="bootstrap-wizard-validation-wizard-name" />
                                            <div class="invalid-feedback">Champ obligatoire</div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="bootstrap-wizard-validation-wizard-name">Matricule <span style="color: red">*</span></label>
                                            <input class="form-control" type="text" name="name" placeholder="Saisir votre matricule" required="required" id="bootstrap-wizard-validation-wizard-name" />
                                            <div class="invalid-feedback">Champ obligatoire</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="bootstrap-wizard-validation-wizard-email">Direction <span style="color: red">*</span></label>
                                    <input class="form-control" type="text" name="name" placeholder="Choisir votre direction" required="required" id="bootstrap-wizard-validation-wizard-email" data-wizard-validate-email="true" />
                                    <div class="invalid-feedback">Champ obligatoire</div>
                                </div>
                            </form>
                        </div>


                        <div class="tab-pane px-sm-3 px-md-5" role="tabpanel" aria-labelledby="bootstrap-wizard-validation-tab2" id="bootstrap-wizard-validation-tab2">
                            <form data-wizard-form="2">
                                <!-- UPLOAD FIELD
                               <div class="mb-3">
                                   <div class="row" data-dropzone="data-dropzone" data-options='{"maxFiles":1,"data":[{"name":"avatar.png","size":"54kb","url":"../../assets/img/team"}]}'>
                                       <div class="fallback">
                                           <input type="file" name="file" />
                                       </div>
                                       <div class="col-md-auto">
                                           <div class="dz-preview dz-preview-single">
                                               <div class="dz-preview-cover d-flex align-items-center justify-content-center mb-3 mb-md-0">
                                                   <div class="avatar avatar-4xl"><img class="rounded-circle" src="../../assets/img/team/avatar.png" alt="..." data-dz-thumbnail="data-dz-thumbnail" /></div>
                                                   <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress=""></span></div>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="col-md">
                                           <div class="dz-message dropzone-area px-2 py-3" data-dz-message="data-dz-message">
                                               <div class="text-center"><img class="me-2" src="../../assets/img/icons/cloud-upload.svg" width="25" alt="" />Upload your profile picture
                                                   <p class="mb-0 fs--1 text-400">Upload a 300x300 jpg image with <br />a maximum size of 400KB</p>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               -->
                                <div class="mb-3">
                                    <label class="form-label" for="bootstrap-wizard-validation-wizard-name">Intitulé de la demande <span style="color: red">*</span></label>
                                    <input class="form-control" type="text" name="name" placeholder="Saisir l'intitulé du contenu" required="required" id="bootstrap-wizard-validation-wizard-phone" />
                                    <div class="invalid-feedback">Champ obligatoire</div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="bootstrap-wizard-validation-wizard-name">Description</label>
                                    <textarea class="form-control" rows="4" id="bootstrap-wizard-validation-wizard-address" required="required" ></textarea>
                                    <div class="invalid-feedback">Champ obligatoire</div>
                                </div>
                            </form>
                        </div>


                        <!-- START BILLING -->
                        <!--
                        <div class="tab-pane px-sm-3 px-md-5" role="tabpanel" aria-labelledby="bootstrap-wizard-validation-tab3" id="bootstrap-wizard-validation-tab3">
                            <form class="form-validation" data-wizard-form="2">
                                <div class="row g-2">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="bootstrap-wizard-validation-card-number">Card Number</label>
                                            <input class="form-control" placeholder="XXXX XXXX XXXX XXXX" type="text" id="bootstrap-wizard-validation-card-number" />
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="bootstrap-wizard-validation-card-name">Name on Card</label>
                                            <input class="form-control" placeholder="John Doe" name="cardName" type="text" id="bootstrap-wizard-validation-card-name" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-2">
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="bootstrap-wizard-validation-card-holder-country">Country</label>
                                            <select class="form-select" name="customSelectCountry" id="bootstrap-wizard-validation-card-holder-country">
                                                <option value="">Select your country ...</option>
                                                <option value="Afghanistan">Afghanistan</option>
                                                <option value="Albania">Albania</option>
                                                <option value="Algeria">Algeria</option>
                                                <option value="American Samoa">American Samoa</option>
                                                <option value="Andorra">Andorra</option>
                                                <option value="Angola">Angola</option>
                                                <option value="Anguilla">Anguilla</option>
                                                <option value="Antarctica">Antarctica</option>
                                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                <option value="Argentina">Argentina</option>
                                                <option value="Armenia">Armenia</option>
                                                <option value="Aruba">Aruba</option>
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
                                                <option value="Bermuda">Bermuda</option>
                                                <option value="Bhutan">Bhutan</option>
                                                <option value="Bolivia">Bolivia</option>
                                                <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
                                                <option value="Botswana">Botswana</option>
                                                <option value="Bouvet Island">Bouvet Island</option>
                                                <option value="Brazil">Brazil</option>
                                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                <option value="Bulgaria">Bulgaria</option>
                                                <option value="Burkina Faso">Burkina Faso</option>
                                                <option value="Burundi">Burundi</option>
                                                <option value="Cambodia">Cambodia</option>
                                                <option value="Cameroon">Cameroon</option>
                                                <option value="Canada">Canada</option>
                                                <option value="Cape Verde">Cape Verde</option>
                                                <option value="Cayman Islands">Cayman Islands</option>
                                                <option value="Central African Republic">Central African Republic</option>
                                                <option value="Chad">Chad</option>
                                                <option value="Chile">Chile</option>
                                                <option value="China">China</option>
                                                <option value="Christmas Island">Christmas Island</option>
                                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                <option value="Colombia">Colombia</option>
                                                <option value="Comoros">Comoros</option>
                                                <option value="Congo">Congo</option>
                                                <option value="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option>
                                                <option value="Cook Islands">Cook Islands</option>
                                                <option value="Costa Rica">Costa Rica</option>
                                                <option value="Cote d'Ivoire">Cote d'Ivoire</option>
                                                <option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option>
                                                <option value="Cuba">Cuba</option>
                                                <option value="Cyprus">Cyprus</option>
                                                <option value="Czech Republic">Czech Republic</option>
                                                <option value="Denmark">Denmark</option>
                                                <option value="Djibouti">Djibouti</option>
                                                <option value="Dominica">Dominica</option>
                                                <option value="Dominican Republic">Dominican Republic</option>
                                                <option value="East Timor">East Timor</option>
                                                <option value="Ecuador">Ecuador</option>
                                                <option value="Egypt">Egypt</option>
                                                <option value="El Salvador">El Salvador</option>
                                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                <option value="Eritrea">Eritrea</option>
                                                <option value="Estonia">Estonia</option>
                                                <option value="Ethiopia">Ethiopia</option>
                                                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                                <option value="Faroe Islands">Faroe Islands</option>
                                                <option value="Fiji">Fiji</option>
                                                <option value="Finland">Finland</option>
                                                <option value="France">France</option>
                                                <option value="France Metropolitan">France Metropolitan</option>
                                                <option value="French Guiana">French Guiana</option>
                                                <option value="French Polynesia">French Polynesia</option>
                                                <option value="French Southern Territories">French Southern Territories</option>
                                                <option value="Gabon">Gabon</option>
                                                <option value="Gambia">Gambia</option>
                                                <option value="Georgia">Georgia</option>
                                                <option value="Germany">Germany</option>
                                                <option value="Ghana">Ghana</option>
                                                <option value="Gibraltar">Gibraltar</option>
                                                <option value="Greece">Greece</option>
                                                <option value="Greenland">Greenland</option>
                                                <option value="Grenada">Grenada</option>
                                                <option value="Guadeloupe">Guadeloupe</option>
                                                <option value="Guam">Guam</option>
                                                <option value="Guatemala">Guatemala</option>
                                                <option value="Guinea">Guinea</option>
                                                <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                <option value="Guyana">Guyana</option>
                                                <option value="Haiti">Haiti</option>
                                                <option value="Heard and Mc Donald Islands">Heard and Mc Donald Islands</option>
                                                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                                <option value="Honduras">Honduras</option>
                                                <option value="Hong Kong">Hong Kong</option>
                                                <option value="Hungary">Hungary</option>
                                                <option value="Iceland">Iceland</option>
                                                <option value="India">India</option>
                                                <option value="Indonesia">Indonesia</option>
                                                <option value="Iran (Islamic Republic of)">Iran (Islamic Republic of)</option>
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
                                                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                                <option value="Korea, Republic of">Korea, Republic of</option>
                                                <option value="Kuwait">Kuwait</option>
                                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                <option value="Lao, People's Democratic Republic">Lao, People's Democratic Republic</option>
                                                <option value="Latvia">Latvia</option>
                                                <option value="Lebanon">Lebanon</option>
                                                <option value="Lesotho">Lesotho</option>
                                                <option value="Liberia">Liberia</option>
                                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                <option value="Liechtenstein">Liechtenstein</option>
                                                <option value="Lithuania">Lithuania</option>
                                                <option value="Luxembourg">Luxembourg</option>
                                                <option value="Macau">Macau</option>
                                                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                                <option value="Madagascar">Madagascar</option>
                                                <option value="Malawi">Malawi</option>
                                                <option value="Malaysia">Malaysia</option>
                                                <option value="Maldives">Maldives</option>
                                                <option value="Mali">Mali</option>
                                                <option value="Malta">Malta</option>
                                                <option value="Marshall Islands">Marshall Islands</option>
                                                <option value="Martinique">Martinique</option>
                                                <option value="Mauritania">Mauritania</option>
                                                <option value="Mauritius">Mauritius</option>
                                                <option value="Mayotte">Mayotte</option>
                                                <option value="Mexico">Mexico</option>
                                                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                                <option value="Moldova, Republic of">Moldova, Republic of</option>
                                                <option value="Monaco">Monaco</option>
                                                <option value="Mongolia">Mongolia</option>
                                                <option value="Montserrat">Montserrat</option>
                                                <option value="Morocco">Morocco</option>
                                                <option value="Mozambique">Mozambique</option>
                                                <option value="Myanmar">Myanmar</option>
                                                <option value="Namibia">Namibia</option>
                                                <option value="Nauru">Nauru</option>
                                                <option value="Nepal">Nepal</option>
                                                <option value="Netherlands">Netherlands</option>
                                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                <option value="New Caledonia">New Caledonia</option>
                                                <option value="New Zealand">New Zealand</option>
                                                <option value="Nicaragua">Nicaragua</option>
                                                <option value="Niger">Niger</option>
                                                <option value="Nigeria">Nigeria</option>
                                                <option value="Niue">Niue</option>
                                                <option value="Norfolk Island">Norfolk Island</option>
                                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                <option value="Norway">Norway</option>
                                                <option value="Oman">Oman</option>
                                                <option value="Pakistan">Pakistan</option>
                                                <option value="Palau">Palau</option>
                                                <option value="Panama">Panama</option>
                                                <option value="Papua New Guinea">Papua New Guinea</option>
                                                <option value="Paraguay">Paraguay</option>
                                                <option value="Peru">Peru</option>
                                                <option value="Philippines">Philippines</option>
                                                <option value="Pitcairn">Pitcairn</option>
                                                <option value="Poland">Poland</option>
                                                <option value="Portugal">Portugal</option>
                                                <option value="Puerto Rico">Puerto Rico</option>
                                                <option value="Qatar">Qatar</option>
                                                <option value="Reunion">Reunion</option>
                                                <option value="Romania">Romania</option>
                                                <option value="Russian Federation">Russian Federation</option>
                                                <option value="Rwanda">Rwanda</option>
                                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                <option value="Saint Lucia">Saint Lucia</option>
                                                <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                                <option value="Samoa">Samoa</option>
                                                <option value="San Marino">San Marino</option>
                                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                <option value="Saudi Arabia">Saudi Arabia</option>
                                                <option value="Senegal">Senegal</option>
                                                <option value="Seychelles">Seychelles</option>
                                                <option value="Sierra Leone">Sierra Leone</option>
                                                <option value="Singapore">Singapore</option>
                                                <option value="Slovakia (Slovak Republic)">Slovakia (Slovak Republic)</option>
                                                <option value="Slovenia">Slovenia</option>
                                                <option value="Solomon Islands">Solomon Islands</option>
                                                <option value="Somalia">Somalia</option>
                                                <option value="South Africa">South Africa</option>
                                                <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                                                <option value="Spain">Spain</option>
                                                <option value="Sri Lanka">Sri Lanka</option>
                                                <option value="St. Helena">St. Helena</option>
                                                <option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
                                                <option value="Sudan">Sudan</option>
                                                <option value="Suriname">Suriname</option>
                                                <option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>
                                                <option value="Swaziland">Swaziland</option>
                                                <option value="Sweden">Sweden</option>
                                                <option value="Switzerland">Switzerland</option>
                                                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                                <option value="Tajikistan">Tajikistan</option>
                                                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                                <option value="Thailand">Thailand</option>
                                                <option value="Togo">Togo</option>
                                                <option value="Tokelau">Tokelau</option>
                                                <option value="Tonga">Tonga</option>
                                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                <option value="Tunisia">Tunisia</option>
                                                <option value="Turkey">Turkey</option>
                                                <option value="Turkmenistan">Turkmenistan</option>
                                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                <option value="Tuvalu">Tuvalu</option>
                                                <option value="Uganda">Uganda</option>
                                                <option value="Ukraine">Ukraine</option>
                                                <option value="United Arab Emirates">United Arab Emirates</option>
                                                <option value="United Kingdom">United Kingdom</option>
                                                <option value="United States">United States</option>
                                                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                                <option value="Uruguay">Uruguay</option>
                                                <option value="Uzbekistan">Uzbekistan</option>
                                                <option value="Vanuatu">Vanuatu</option>
                                                <option value="Venezuela">Venezuela</option>
                                                <option value="Vietnam">Vietnam</option>
                                                <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                                <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
                                                <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
                                                <option value="Western Sahara">Western Sahara</option>
                                                <option value="Yemen">Yemen</option>
                                                <option value="Yugoslavia">Yugoslavia</option>
                                                <option value="Zambia">Zambia</option>
                                                <option value="Zimbabwe">Zimbabwe</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="bootstrap-wizard-validation-card-holder-zip-code">Zip Code</label>
                                            <input class="form-control" placeholder="1234" name="zipCode" type="text" id="bootstrap-wizard-validation-card-holder-zip-code" />
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group mb-0">
                                            <label class="form-label" for="bootstrap-wizard-validation-card-exp-date">Exp Date</label>
                                            <input class="form-control" placeholder="15/2024" name="expDate" type="text" id="bootstrap-wizard-validation-card-exp-date" />
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group mb-0">
                                            <label class="form-label" for="bootstrap-wizard-validation-card-cvv">CVV</label><span class="ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Card verification value"><span class="fa fa-question-circle"></span></span>
                                            <input class="form-control" placeholder="123" name="cvv" maxlength="3" pattern="[0-9]{3}" type="text" id="bootstrap-wizard-validation-card-cvv" />
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        -->
                        <!-- END BILLING -->
                        <div class="tab-pane text-center px-sm-3 px-md-5" role="tabpanel" aria-labelledby="bootstrap-wizard-validation-tab4" id="bootstrap-wizard-validation-tab4">
                            <div class="wizard-lottie-wrapper">
                                <div class="lottie wizard-lottie mx-auto my-3" data-options='{"path":"../../assets/img/animated-icons/celebration.json"}'></div>
                            </div>
                            <h4 class="mb-1">Demande soumise avec succès</h4>
                            <!--
                            <p>Now you can access to your account</p><a class="btn btn-primary px-5 my-3" href="../../modules/forms/wizard.html">Start Over</a>
                            -->
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-body-tertiary">
                    <div class="px-sm-3 px-md-5">
                        <ul class="pager wizard list-inline mb-0">
                            <li class="previous">
                                <button class="btn btn-link ps-0" type="button"><span class="fas fa-chevron-left me-2" data-fa-transform="shrink-3"></span>Prev</button>
                            </li>
                            <li class="next">
                                <button class="btn btn-primary px-5 px-sm-6" type="submit">Next<span class="fas fa-chevron-right ms-2" data-fa-transform="shrink-3"> </span></button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  FIN CONTENUS AU CENTRE  -->

@endsection


