@extends('goals-performs.layouts.main-layout')
@section('page-body')

<!--  CONTENUS AU CENTRE  -->

<div>
    <div class="col-lg-8 h-100">
        <h5>{{$libelleFormulaire}}</h5>
        <br/>
        <div class="d-flex mb-4"><span class="fa-stack me-2 ms-n1"><i class="fas fa-circle fa-stack-2x text-300"></i><i class="fa-inverse fa-stack-1x text-primary fas fa-check-double"></i></span>
            <div class="col">
                    <h6 class="mb-0 text-primary position-relative">
                        <span class="bg-200 dark__bg-1100 pe-3">Formulaire d'enregisrement de demandes</span>
                        <span class="border position-absolute top-50 translate-middle-y w-100 start-0 z-n1">
                    </span></h6>
                <p class="mb-0">Veuillez remplir progressivement les formulaires en respectant les directives de chaque pages.</p>
            </div>
        </div>
        <div class="card theme-wizard h-100 mb-5">
            <div class="card-header bg-body-tertiary pt-3 pb-2">
                <ul class="nav justify-content-between nav-wizard">
                    <li class="nav-item"><a class="nav-link active fw-semi-bold" href="#bootstrap-wizard-validation-tab1" data-bs-toggle="tab" data-wizard-step="1"><span class="nav-item-circle-parent"><span class="nav-item-circle"><span class="fas fa-user"></span></span></span><span class="d-none d-md-block mt-1 fs--1">Informations des participants</span></a></li>
                    <li class="nav-item"><a class="nav-link fw-semi-bold" href="#bootstrap-wizard-validation-tab2" data-bs-toggle="tab" data-wizard-step="2"><span class="nav-item-circle-parent"><span class="nav-item-circle"><span class="fas fa-file-alt"></span></span></span><span class="d-none d-md-block mt-1 fs--1">Contenu de demande</span></a></li>
                    <!-- BILLING
                    <li class="nav-item"><a class="nav-link fw-semi-bold" href="#bootstrap-wizard-validation-tab3" data-bs-toggle="tab" data-wizard-step="3"><span class="nav-item-circle-parent"><span class="nav-item-circle"><span class="fas fa-dollar-sign"></span></span></span><span class="d-none d-md-block mt-1 fs--1">Billing</span></a></li>

                    <li class="nav-item"><a class="nav-link fw-semi-bold" href="#bootstrap-wizard-validation-tab4" data-bs-toggle="tab" data-wizard-step="4"><span class="nav-item-circle-parent"><span class="nav-item-circle"><span class="fas fa-thumbs-up"></span></span></span><span class="d-none d-md-block mt-1 fs--1">Terminé</span></a></li>
                    -->
                </ul>
            </div>
            <div class="card-body py-4" id="wizard-controller">
                <div class="tab-content">
                    <div class="tab-pane active px-sm-3 px-md-5" role="tabpanel" aria-labelledby="bootstrap-wizard-validation-tab1" id="bootstrap-wizard-validation-tab1">
                        <form method="post" action="#" class="needs-validation" novalidate="novalidate" data-wizard-form="1">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="card text-bg-default">
                                        <div class="card-body">
                                            <!-- CONTENU GAUCHE -->
                                                <div class="input_fields_wrap">
                                                    <div class="row g-2">
                                                        <h6>{{$libelleCard1}}</h6>
                                                        
                                                        <div class="col-4">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="bootstrap-wizard-validation-wizard-name" >Nom(s) <span style="color: red">*</span></label>
                                                                <input class="form-control" type="text" name="nom[1]" placeholder="Entrer nom" required="required" id="bootstrap-wizard-validation-wizard-name" value="{{$infosUserNom}}"/>
                                                                <div class="invalid-feedback">Champ obligatoire</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="bootstrap-wizard-validation-wizard-name" >Prénom(s) <span style="color: red">*</span></label>
                                                                <input class="form-control" type="text" name="prenom[1]" placeholder="Entrer prénom" required="required" id="bootstrap-wizard-validation-wizard-name" />
                                                                <div class="invalid-feedback">Champ obligatoire</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="bootstrap-wizard-validation-wizard-name" >Matricule <span style="color: red">*</span></label>
                                                                <input class="form-control" type="text" name="matricule[1]" placeholder="Entrer matricule" required="required" id="bootstrap-wizard-validation-wizard-name" />
                                                                <div class="invalid-feedback">Champ obligatoire</div>
                                                            </div>
                                                        </div>

                                                        
                                                    </div>
                                                     
                                                </div>
                                                <button id="add_field_button" class="btn btn-primary px-3 px-sm-3 mt-3" ><span class="fas fa-plus"></span></button>

                                                <script>
                                                    $(document).ready(function() {
                                                    var max_fields      = 10; //maximum input boxes allowed
                                                    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
                                                    var add_button      = $("#add_field_button"); //Add button ID
                                                    
                                                    var x = 1; //initlal text box count
                                                    $(add_button).click(function(e){ //on add input button click
                                                        e.preventDefault();
                                                        if(x < max_fields){ //max input box allowed
                                                            x++; //text box increment
                                                            $(wrapper).append(' <div class="row g-2 mt-3 d-flex"> <div class="col-4"> <input class="form-control" required="required" type="text" placeholder="Entrer nom" name="nom[' + x + ']"/></div> <div class="col-4"> <input class="form-control" required="required" type="text" placeholder="Entrer prénom" name="prenom[' + x + ']"/></div> <div class="col-4"><input class="form-control" required="required" type="text" placeholder="Entrer matricule" name="matricule[' + x + ']"/></div>  <a id="del" class="btn btn-danger px-3 px-sm-3" ><span class="fas fa-trash"></span></a> </div>'); // add input boxes.
                                                        }
                                                    });
                                                    
                                                    $(wrapper).on("click","#del", function(e){ //user click on remove text
                                                        e.preventDefault(); $(this).parent('div').remove(); x--;
                                                    })
                                                });
                                                </script>
                                            <!-- FIN -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card text-bg-default">
                                        <div class="card-body">
                                            <!-- CONTENU GROIT -->
                                            <div class="mb-3">
                                                <label class="form-label" for="bootstrap-wizard-validation-wizard-name" style="margin-bottom: -25%" >Description</label>
                                                <textarea class="form-control" rows="4" id="bootstrap-wizard-validation-wizard-address" required="required" ></textarea>
                                                <div class="invalid-feedback">Champ obligatoire</div>
                                            </div>

                                            <label class="form-label" for="bootstrap-wizard-validation-wizard-name" style="margin-bottom: -25%" >Type de compétences</label>
                                            <div class="mb-3" style="margin-left: 25%">
                                                <div class="form-check">
                                                    <input class="form-check-input" id="chkNo" type="radio" name="chkPinNo" />
                                                    <label class="form-check-label" for="flexRadioDefault2">Adaptation au poste travail</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" id="chkNo" type="radio" name="chkPinNo" />
                                                    <label class="form-check-label" for="flexRadioDefault2">Adaptation à l'évolution des emplois et/ou maintien dans l'emploi</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" id="chkNo" type="radio" name="chkPinNo" />
                                                    <label class="form-check-label" for="flexRadioDefault2">Développement de nouvelles compétences</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input"  type="radio" id="chkYes" name="chkPinNo"/>
                                                    <label class="form-check-label" for="flexRadioDefault2">Autres</label>
                                                </div>
                                              

                                                <div id="dvPinNo" style="display: none">
                                                    <div class="hidden">
                                                        <textarea class="form-control" rows="3" id="bootstrap-wizard-validation-wizard-address" name="when_other"  required="required" ></textarea>
                                                    </div>
                                                </div>
                                                <!-- script for hide&show text-area -->
                                                <script type="text/javascript">
                                                 $(function() {
                                                    $("input[name='chkPinNo']").click(function() {
                                                      if ($("#chkYes").is(":checked")) {
                                                        $("#dvPinNo").show();
                                                      } else {
                                                        $("#dvPinNo").hide();
                                                      }
                                                    });
                                                  });
                                                </script>
                                            </div>
                                            <!-- FIN -->
                                        </div>
                                    </div>
                                </div>
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
                    <!-- END BILLING -->
                </div>
            </div>
            <div class="card-footer bg-body-tertiary">
                <div class="px-sm-3 px-md-5">
                    <ul class="pager wizard list-inline mb-0">
                        <li class="previous">
                            <button class="btn btn-link ps-0" type="button"><span class="fas fa-chevron-left me-2" data-fa-transform="shrink-3"></span>Précédent</button>
                        </li>
                        <li class="next">
                            <button class="btn btn-primary px-5 px-sm-6" type="submit">Suivant<span class="fas fa-chevron-right ms-2" data-fa-transform="shrink-3"> </span></button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  FIN CONTENUS AU CENTRE  -->

@endsection
