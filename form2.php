<?php

include '_header.php';
?>
<section class="bg-delta">

</section>
<section class="sh">
    <div class="">
        <div class="">
            <div class="header text-center  py-5">
                <h1>𝕯𝖎𝖌𝖎𝖙𝖆𝖑 𝕭𝖚𝖘𝖎𝖓𝖊𝖘𝖘 𝕮𝖆𝖗𝖉</h1>
            </div>
            <div class="">
                <div class="row">
                    <div class="col-lg-8 col-12 sh">
                        <form class="form-group form-text g-3" action="upload.php" method="post" enctype="multipart/form-data" data-parsley-validate data-parsley-errors-messages-disabled>
                            <div>
                                <header>
                                    <H1 class="bg-muted text-center t-d">𝕱𝖎𝖑𝖑 𝖙𝖍𝖊 𝕯𝖊𝖙𝖆𝖎𝖑𝖘
                                    </H1>
                                </header>
                            </div>
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <div class="accordion-header sticky-top" id="headingOne">
                                        <!-- <i class="fa fa-grip-vertical"></i> -->
                                        <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">

                                            Profile <small class="text-muted">&nbsp; (Image & Logo)</small>
                                        </button>

                                    </div>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body sh pa">
                                            <div class="row align-item-center">
                                                <div class="header" style="background-color:#dedfdf70;">

                                                    <h3 class="t-d"> ENTER THE DETAILS</h3>
                                                </div>
                                                <!-- images and logo -->
                                                <div class="row">
                                                    <div class="col-lg-6 col-12">

                                                        <div class="mb-2">
                                                            <h6 class="t-d"> Profile Photo:&nbsp;(JPG)<small class="text-danger">*</small></h6>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6 col-12 ">
                                                                <label for="profileImageInput" class="custom-file-upload">
                                                                    <i class="fa fa-upload"></i>
                                                                </label>
                                                                <input type="file" name="Profile" id="profileImageInput" accept=".jpeg, .jpg, .png" onchange="previewImage()" required data-parsley-fileextension="jpeg,jpg,png" />
                                                            </div>
                                                            <div class="col-lg-6 col-12">
                                                                <div class="image-container">
                                                                    <img id="profileImagePreview" src="#" alt="Profile Preview" style="display: none; max-width: 100%; overflow: hidden;" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="col-lg-6 col-12"> -->
                                                    <div class="col-lg-6 col-12">

                                                        <div class="mb-2">
                                                            <h6 class="t-d">Logo:&nbsp;(PNG)<small class="text-danger">*</small></h6>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6 col-12">
                                                                <label for="logoImageInput" class="custom-file-upload">
                                                                    <i class="fa fa-upload"></i>
                                                                </label>
                                                                <input type="file" name="Logo" id="logoImageInput" accept=".jpeg, .jpg, .png" onchange="previewLogoImage()" required data-parsley-fileextension="jpeg,jpg,png" />
                                                            </div>
                                                            <div class="col-lg-6 col-12">
                                                                <div class="image-container">
                                                                    <img id="logoImagePreview" src="#" alt="Logo Preview" style="display: none; max-width: 100%; overflow: hidden;" />
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <!-- </div> -->
                                                </div>
                                                <div class="row p-4 align-items-center ">
                                                    <!-- <div class="row "> -->
                                                    <div class="row">
                                                        <div class="col-lg-12  col-12">
                                                            <label class="t-d" for="title">Name:<small class="text-danger">*</small></label>
                                                            <input type="text" id="name" onkeyup="updatePreview()" class="form-group form-control" name="name" placeholder="Enter Name" required>
                                                        </div>
                                                    </div>
                                                    <div class="row ">
                                                        <div class="col-lg-6 col-12">
                                                            <small class="text-muted "> Designation:<small class="text-danger">*</small></small>
                                                            <input type="text" id="designation" onkeyup="updatedesignation()" class="form-group form-control" name="Designation" placeholder=" Enter Desgination/position" required>
                                                        </div>
                                                        <div class="col-lg-6 col-12">
                                                            <small class="text-muted "> Company:<small class="text-danger">*</small></small>
                                                            <input type="text" id="company" onkeyup="updatecompany()" class="form-group form-control" name="CompanyName" placeholder="Enter Company Name" required>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12 col-12">
                                                            <div class="row">
                                                                <div class="col-lg-4 col-12">
                                                                    <small class="text-muted">Label</small><br>
                                                                    <span class="btn btn-label" style="display: inline-flex;flex-wrap: wrap; align-content: flex-end;flex-direction: row;justify-content: center;font-size:2rem;">
                                                                        <i class="fa fa-envelope"></i></span>
                                                                </div>
                                                                <div class="col-lg-8 col-12">
                                                                    <small class="text-muted">Email address:<small class="text-danger">*</small></small>
                                                                    <input type="email" id="emailInput" class="form-group form-control" name="emailicon" placeholder="email@domain.com" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12 col-12">
                                                            <div class="row">
                                                                <div class="col-lg-4 col-12">
                                                                    <small class="text-muted">Label</small><br>
                                                                    <span class="btn btn-label" style="display: inline-flex;flex-wrap: wrap; align-content: flex-end;flex-direction: row;justify-content: center;font-size:2rem;">
                                                                        <i class="fa fa-phone"></i></span>
                                                                </div>
                                                                <div class="col-lg-8 col-12">
                                                                    <small class="text-muted">Phone no:-<small class="text-danger">*</small></small>
                                                                    <input type="tel" id="phoneInput" class="form-group form-control" name="callicon" placeholder="(+91) phone number " data-parsley-pattern="^[6-9]\d{9}$" data-parsley-pattern-message="Please enter a valid Indian mobile number." minlength="10" maxlength="10" required>
                                                                    <!-- <span id="phone-error" class="text-danger"></span> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12 col-12">
                                                            <div class="row">
                                                                <div class="col-lg-4 col-12">
                                                                    <small class="text-muted">Label</small><br>
                                                                    <span class="btn btn-label" style="display: inline-flex;flex-wrap: wrap; align-content: flex-end;flex-direction: row;justify-content: center;font-size:2rem;">
                                                                        <i class="fa fa-whatsapp "></i></span>
                                                                </div>
                                                                <div class="col-lg-8 col-12">
                                                                    <small class="text-muted">Messaging:-<small class="text-danger">*</small></small>
                                                                    <input type="tel" class="form-group form-control" name="messageicon" id="message-no" placeholder="(+91) phone number " data-parsley-pattern="^[6-9]\d{9}$" data-parsley-pattern-message="Please enter a valid Indian mobile number." minlength="10" maxlength="10" required>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- </div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" accordion-item">
                                    <div class="accordion-header sticky-top" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Address <small class="text-muted">&nbsp;(details) </small>
                                        </button>
                                    </div>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body sh pa">
                                            <div class="row align-items-center">
                                                <div class="header bg-light">
                                                    <h4 class="t-d"> CONTACT US</h4>
                                                </div>
                                                <div class="row">
                                                    <div><small class="text-muted "> Email <small class="text-danger">*</small></small></div>
                                                    <div class="row " id="emailDivA">
                                                        <div class=" col-lg-11 col-12">
                                                            <div class="row">
                                                                <div class="col-lg-4 col-12">
                                                                    <small class="text-muted">Label</small><br>
                                                                    <span class="btn btn-label" style="display:inline-flex;flex-wrap: wrap; align-content: flex-end;flex-direction: row;justify-content: center;font-size:2rem;">
                                                                        <i class="fa fa-envelope"></i></span>
                                                                </div>
                                                                <div class="col-lg-8 col-12">
                                                                    <small class="text-muted">Email address<small class="text-red">*</small></small>
                                                                    <input type="email" id="emailaddress" onkeyup="emailpreview()" class="form-group form-control" name="Email" placeholder="email@domain.com" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- <div class="col-lg-1 col-12"
                                                        style="display: inline-flex;flex-wrap: wrap; align-content: space-around;flex-direction: row;justify-content: center;">
                                                        <span class="btn  btn-primary " id="addButton">
                                                            <i class="fa fa-add"></i>
                                                        </span>
                                                    </div> -->
                                                    </div>
                                                    <div class="row " id="emailDivB" style="display: none;">
                                                        <div class="col-lg-11 col-12">
                                                            <div class="row">
                                                                <div class="col-lg-4 col-12">
                                                                    <small class="text-muted">Label</small><br>
                                                                    <span class="btn btn-label" style="display:inline-flex;flex-wrap: wrap; align-content: flex-end;flex-direction: row;justify-content: center;font-size:2rem;">
                                                                        <i class="fa fa-envelope"></i></span>
                                                                </div>
                                                                <div class="col-lg-8 col-12">
                                                                    <small class="text-muted">Email address</small>
                                                                    <input type="email" id="emailaddress" onkeyup="emailpreview()" class="form-group form-control" name="email-b" placeholder="email@domain.com">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-1 col-12" style="display: inline-flex;flex-wrap: wrap; align-content: space-around;flex-direction: row;justify-content: center;">
                                                            <span class="btn  btn-danger " id="deleteButton">
                                                                <i class="fa fa-minus"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div><small class="text-muted "> Phone No.<small class="text-danger">*</small></small></div>
                                                    <div class="row" id="phoneDivA">
                                                        <div class="col-lg-11 col-12">
                                                            <div class="row">
                                                                <div class="col-lg-4 col-12">
                                                                    <small class="text-muted">Label</small><br>
                                                                    <span class="btn btn-label" style="display:inline-flex;flex-wrap: wrap; align-content: flex-end;flex-direction: row;justify-content: center; font-size:2rem;"><i class="fa fa-phone "></i></span>
                                                                </div>
                                                                <div class="col-lg-8 col-12">
                                                                    <small class="text-muted">Phone no.<small class="text-red">*</small></small>
                                                                    <input type="tel" class="form-group form-control" name="phone" id="mobilephone" onkeyup="mobilepreview()" placeholder="(+91) phone number " data-parsley-pattern="^[6-9]\d{9}$" data-parsley-pattern-message="Please enter a valid Indian mobile number." minlength="10" maxlength="10" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- <div class="col-lg-1 col-12"
                                                        style="display: inline-flex;flex-wrap: wrap; align-content: space-around;flex-direction: row;justify-content: center;">
                                                        <span class="btn  btn-primary" id="addButtonA">
                                                            <i class="fa fa-add"></i>
                                                        </span>
                                                    </div> -->
                                                    </div>
                                                    <div class="row" id="phoneDivB" style="display:none;">
                                                        <div class="col-lg-11 col-12">
                                                            <div class="row">
                                                                <div class="col-lg-4 col-12">
                                                                    <small class="text-muted">Label</small><br>
                                                                    <span class="btn btn-label" style="display:inline-flex;flex-wrap: wrap; align-content: flex-end;flex-direction: row;justify-content: center; font-size:2rem;">
                                                                        <i class="fa fa-phone"></i> </span>
                                                                </div>
                                                                <div class="col-lg-8 col-12">
                                                                    <small class="text-muted">Phone no.</small>
                                                                    <input type="text" class="form-group form-control" name="mobile-b-5" id="phone" placeholder="Enter phone number">
                                                                    <span id="phone-error" class="text-danger"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-1 col-12" style="display: inline-flex;flex-wrap: wrap; align-content: space-around;flex-direction: row;justify-content: center;">
                                                            <span class="btn  btn-danger " id="deleteButtonB">
                                                                <i class="fa fa-minus"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row ">
                                                    <div>
                                                        <small class="text-muted "> Address Detail</small>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-2 col-12">
                                                            <small class="text-muted">Label</small><br>
                                                            <span class="btn btn-label" style="display:inline-flex;flex-wrap: wrap; align-content: flex-end;flex-direction: row;justify-content: center;font-size:3.2rem;">
                                                                <i class="fa fa-address-card"></i> </span>
                                                        </div>
                                                        <div class="col-lg-10 col-12">
                                                            <div class="row">
                                                                <div class="col-lg-6 col-12">
                                                                    <small class="text-muted  "> Address Line
                                                                        1<small class="text-danger">*</small></small>
                                                                    <input type="text" class="form-group form-control" id="street-1" name="Address1" onkeyup="updateAddress()" placeholder=" Enter Address" required>
                                                                </div>
                                                                <div class="col-lg-6 col-12">
                                                                    <small class="text-muted  "> Address Line
                                                                        2<small class="text-danger">*</small></small>
                                                                    <input type="text" class="form-group form-control" id="street-2" name="Address2" onkeyup="updateAddress()" placeholder=" Enter Address" required>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-6 col-12">
                                                                    <small class="text-muted  ">country<small class="text-danger">*</small></small>
                                                                    <input type="text" class="form-group form-control" id="country" name="country" onkeyup="updateAddress()" placeholder=" Enter Country" required>
                                                                </div>
                                                                <div class="col-lg-6 col-12">
                                                                    <small class="text-muted  "> state<small class="text-danger">*</small></small>
                                                                    <input type="text" class="form-group form-control" id="state" name="state" onkeyup="updateAddress()" placeholder=" Enter State" required>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-6 col-12">
                                                                    <small class="text-muted  "> city<small class="text-danger">*</small></small>
                                                                    <input type="text" class="form-group form-control" id="city" name="city" onkeyup="updateAddress()" placeholder=" Enter City" required>
                                                                </div>
                                                                <div class="col-lg-6 col-12">
                                                                    <small class="text-muted  "> zip code<small class="text-danger">*</small></small>
                                                                    <input type="text" class="form-group form-control" id="zip-code" name="zip" placeholder="Enter PIN code" data-parsley-pattern="^[1-9][0-9]{5}$" data-parsley-pattern-message="Please enter a valid Indian PIN code." minlength="6" maxlength="6" required>

                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-6 col-12">
                                                                    <small class="text-muted  "> Action Button <i class="fa-regular fa-compass"></i><small class="text-danger">*</small></small>
                                                                    <input type="text" id="action" onkeyup="actionpreview()" class="form-group form-control" name="action" placeholder="Text" required maxlength="13">

                                                                </div>
                                                                <div class="col-lg-6 col-12">
                                                                    <small class="text-muted  "> Google Map URL<small class="text-danger">*</small>
                                                                    </small>
                                                                    <input type="url" class="form-group form-control" name="google" id="google-m-in" placeholder="Enter Google Maps link" data-parsley-pattern="^https:\/\/maps\.app\.goo\.gl\/[A-Za-z0-9]+$" data-parsley-pattern-message="Please enter a valid Google Maps link." required>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header sticky-top" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Website <small class="text-muted"> &nbsp;(Links)</small>
                                        </button>
                                    </div>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body sh pa">
                                            <div class="row align-items-center   ">
                                                <div>
                                                    <small class="text-muted"></small>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12 col-12">
                                                        <small>Link</small>
                                                        <div class="row">
                                                            <div class="col-lg-2 col-12">
                                                                <span class="btn btn-label" style="display: inline-flex;flex-wrap: wrap; align-content: flex-end;flex-direction: row;justify-content: center;font-size:2rem;">
                                                                    <i class="fa fa-link"></i>
                                                                </span>
                                                            </div>
                                                            <div class="col-lg-10 col-12">
                                                                <small class="text-muted  "> Link<small class="text-danger">*</small></small>
                                                                <input type="url" class="form-group form-control" name="URL" id="web-link-input" value="http://www.delta.co" required data-parsley-type="url" data-parsley-type-message="Please enter a valid URL">

                                                            </div>
                                                        </div>
                                                        <small class="text-muted  "> Title</small>
                                                        <div class="row ">
                                                            <div class="col-lg-2 col-12">
                                                                <span class="btn btn-label" style="display: inline-flex;flex-wrap: wrap; align-content: flex-end;flex-direction: row;justify-content: center;font-size:2rem;">
                                                                    <i class="fas fa-heading"></i>
                                                                </span>
                                                            </div>
                                                            <div class="col-lg-10 col-12">
                                                                <small class="text-muted  "> Title<small class="text-danger">*</small></small>
                                                                <input type="text" class="form-group form-control" name="title" id="websitelink" onkeyup="preview()" placeholder="web title" required>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div>
                                                                <h4 class="text-muted">Social Media:-<small class="text-danger">*</small></h4>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-12 col-12">
                                                                    <div class="row">
                                                                        <div class="col-lg-2 col-12 ">
                                                                            <i class="fa fa-linkedin-square" style="display:flex; font-size:2.5rem;"></i>
                                                                        </div>
                                                                        <div class="col-lg-10 col-12 ">
                                                                            <input type="text" class="form-group form-control" name="linkedin" id="linkedinInput" placeholder="Linkedin" required>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-12 col-12">
                                                                    <div class="row">
                                                                        <div class="col-lg-2 col-12 ">
                                                                            <i class="fa fa-instagram" style="display:flex; font-size:2.5rem;"></i>
                                                                        </div>
                                                                        <div class="col-lg-10 col-12 ">
                                                                            <input type="text" id="instagramInput" class="form-group form-control" name="instagram" placeholder="instagram" required>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-12 col-12">
                                                                    <div class="row">
                                                                        <div class="col-lg-2 col-12 ">
                                                                            <i class="fa fa-twitter" style="display:flex; font-size:2.5rem;"></i>
                                                                        </div>
                                                                        <div class="col-lg-10 col-12 ">
                                                                            <input type="text" id="twitterInput" class="form-group form-control" name="twitter" placeholder="twitter" required>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-12 col-12">
                                                                    <div class="row">
                                                                        <div class="col-lg-2 col-12 ">
                                                                            <i class="fa fa-facebook" style="display:flex; font-size:2.5rem;"></i>
                                                                        </div>
                                                                        <div class="col-lg-10 col-12 ">
                                                                            <input type="text" class="form-group form-control" name="facebook" id="facebookInput" placeholder="facebook" required>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header sticky-top" id="headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            Images &nbsp; <small class="text-muted">(Post)</small>
                                        </button>
                                    </div>
                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body sh pa">
                                            <div class="row align-items-center   ">
                                                <small class="text-muted">Images</small>
                                                <div class="wrapper-u">
                                                    <div class="container-u">
                                                        <h1 class="uploadh1">Upload a file</h1>
                                                        <div class="upload-container">
                                                            <div class="border-container">
                                                                <div class="icons fa-4x">
                                                                    <i class="fas fa-file-image" data-fa-transform="shrink-3 down-2 left-6 rotate--45"></i>
                                                                    <i class="fas fa-file-image" data-fa-transform="shrink-2 up-4"></i>
                                                                    <i class="fas fa-file-image" data-fa-transform="shrink-3 down-2 right-6 rotate-45"></i>
                                                                </div>
                                                                <!--<input type="file" id="file-upload">-->
                                                                <p>
                                                                    <label for="file-post" class="btn btn-primary">browse
                                                                        your computer<small class="text-red">*</small></label>
                                                                    <input type="file" name="imagepost" id="file-post" accept=".jpeg, .jpg, .png" required data-parsley-fileextension="jpeg,jpg,png">
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-10 col-12">
                                                        <div id="file-preview-post"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Content for the fourth accordion -->
                                        </div>
                                    </div>
                                </div>
                                <!-- Fifth Accordion -->
                                <?php
                                /*<div class="accordion-item">
                                                            <div class="accordion-header sticky-top" id="headingFive">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseFive" aria-expanded="false"
                                                                    aria-controls="collapseFive">
                                                                    Videos &nbsp; <small class="text-muted"> (Post)</small>
                                                                </button>
                                                            </div>
                                                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body sh pa">
                                                                    <!-- Content for the fifth accordion -->
                                                                    <div class="row align-items-center   ">

                                                                        <div class="row">
                                                                            <div class="col-lg-12 col-12">
                                                                                <div class="wrapper-u">
                                                                                    <div class="container-u">
                                                                                        <h1 class="uploadh1">Upload a file</h1>
                                                                                        <div class="upload-container" id="upload-container-v">
                                                                                            <div class="border-container">
                                                                                                <div class="icons fa-4x">
                                                                                                    <i class="fas fa-file-video"
                                                                                                        data-fa-transform="shrink-3 down-2 left-6 rotate--45"></i>
                                                                                                    <i class="fas fa-file-video"
                                                                                                        data-fa-transform="shrink-2 up-4"></i>
                                                                                                    <i class="fas fa-file-video"
                                                                                                        data-fa-transform="shrink-3 down-2 right-6 rotate-45"></i>
                                                                                                </div>
                                                                                                <!--<input type="file" id="file-upload">-->
                                                                                                <p>
                                                                                                    <label for="video-post"
                                                                                                        class="btn btn-primary">browse
                                                                                                        your computer<small class="text-red">*</small></label>
                                                                                                    <input type="file" name="video-post"
                                                                                                        id="video-post" accept=".mp4" required>
                                                                                                </p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-12 col-12">
                                                                                <div id="video-previews" class="preview-container-v"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>*/
                                ?>
                            </div>
                            <div class=" col-lg-12 col-12 text-center p-3">
                                <button type="submit" class="btn-b btn-primary"> Submit</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="header bg-muted text-center t-d">
                            <h1> Template Design</h1>
                        </div>
                        <div class="iphone-container">
                            <div class="iphone-frame ">
                                <div class="iphone-screen sh" id="screen">
                                    <div id="preview">
                                        <!-- CODE WILL BE PASTED -->
                                        <!-- <section class=""> -->
                                        <!-- First Card with Background Image -->
                                        <div class="container">

                                            <div class="card-1 card-1-p" style=" background-image: url('images/profile.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    max-width:400px;    ">
                                                <div class="card-body">
                                                    <div class="card-content">
                                                        <div class="row">
                                                            <div class="col-md-8 col-12">
                                                                <h2 class="">
                                                                    <h2 id="nameplaceholder">Ankit Gupta</h2>
                                                                </h2>
                                                            </div>
                                                            <div class="col-md-8 col-12">
                                                                <h6 class="text-start">
                                                                    <i class="fa fa-briefcase" style="font-size:16px" aria-hidden="true"></i>

                                                                    &nbsp; <h6 id="designationplaceholder"> Key Account Manager</h6>
                                                                </h6>
                                                            </div>
                                                            <div class="col-md-10 col-12">
                                                                <h4 class="card-text">
                                                                    <i class="fa fa-building-o" style="font-size:30px" aria-hidden="true"></i>
                                                                    &nbsp;
                                                                    <h4 id="companyplaceholder">Delta IT Network Pvt Ltd</h4>

                                                                </h4>
                                                            </div>
                                                            <div col-md-12 col-12>
                                                                <div class="logo-container">
                                                                    <img src="images/deltaweb.png" class="logo" id="image-banner" alt="deltaview">
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                            <!-- Second Card -->
                                            <div class="card-1 ">
                                                <!-- b-t transparent background -->
                                                <!-- <sdiv class="card-body"> -->
                                                <div class="card-footer b-t text-center">
                                                    <div class="row  justify-content-center">
                                                        <div class="col-lg-4 col-12 mb-2"><a href="#" id="callLink" class="btn round-circle contact-link">
                                                                <span class="material-symbols-outlined ">
                                                                    call
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="col-lg-4 col-12 mb-2"><a href="#" id="emailLink" class="btn round-circle contact-link">
                                                                <span class="material-symbols-outlined ">

                                                                    mail
                                                                </span>

                                                            </a></div>
                                                        <div class="col-lg-4 col-12"><a href="#" id="open-whatsapp" class="btn round-circle contact-link">
                                                                <span class="material-symbols-outlined ">
                                                                    message
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <!-- </div> -->
                                                </div>

                                            </div>
                                            <!-- Third Card -->
                                            <div class="card-1">
                                                <div class="card-header-3">
                                                    <div class="card-header-4">
                                                        <div class="col-3 text-center">
                                                            <i class="fa fa-address-card fa-bounce" style="font-size:30px;"></i>
                                                        </div>
                                                        <div class="col-9 text-start">
                                                            <h4>Contact Details</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <ul class="list-g">
                                                        <li class="list-g-item">
                                                            <div class="row">
                                                                <div class="col-lg-2 col-12">
                                                                    <a href="tel:+91-9999-99-0092" class="contact-link">
                                                                        <span class="material-symbols-outlined">
                                                                            call
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="col-lg-10 col-12">
                                                                    <h6 id="contactplaceholder">
                                                                        <a href="tel:+91-9999-99-0092" class="contact-link">
                                                                            +91-9999-99-0092
                                                                        </a>
                                                                    </h6>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-2 col-12">
                                                                    <a href="mailto:your.email@example.com" class="contact-link">
                                                                        <span class="material-symbols-outlined">
                                                                            mail
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="col-lg-10 col-12">
                                                                    <h6 id="emailplaceholder">
                                                                        <a href="mailto:your.email@example.com" class="contact-link">
                                                                            your.email@example.com
                                                                        </a>
                                                                    </h6>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-2 col-12">
                                                                    <span class="material-symbols-outlined contact-link">
                                                                        distance
                                                                    </span>
                                                                </div>
                                                                <div class="col-lg-10 col-12">
                                                                    <h6>
                                                                        <!-- <h6>Delta IT Network Pvt Ltd</h6> -->
                                                                        <p class="add-p">Old Judicial Complex, SCO - 38, 2nd
                                                                            Floor, Civil Line Rd, next
                                                                            to PNB,
                                                                            Civil Lines
                                                                            Gurugram, Haryana, 122001
                                                                            India</p>
                                                                    </h6>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <div class="text-c ">
                                                        <button class="btn-white rounded-pill">
                                                            <a href="https://maps.app.goo.gl/414ux42d2Bgp83vb9" id="map-link" class="d-flex rounded-pill" target="_blank">
                                                                <i class="fa-solid fa-location-arrow fa-beat" style="font-size:30px;color: #000000;"></i>&nbsp;<b>
                                                                    <h5 id="actionplaceholder">Get Direction</h5>
                                                            </a>
                                                        </button>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Fourth Card -->
                                            <div class="card-1">
                                                <div class="card-header-3">
                                                    <div class="card-header-4">
                                                        <div class="col-3 text-center">
                                                            <i class="fa-solid fa-link fa-fade" style="font-size:30px;"></i>
                                                        </div>
                                                        <div class="col-9 text-start">
                                                            <h4>&nbsp; Website</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <h4 class="card-text">
                                                        <a href="https://www.deltaview.in/" class="contact-link" id="dynamic-link" target="_blank">
                                                            <h5 id="previewplaceholder"><i class="fa fa-link" style="font-size:36x"></i>
                                                                &nbsp;Delta
                                                                View</h5>
                                                        </a>
                                                    </h4>
                                                    <a href="#" id="linkedinLink" class="btn btn-error contact-link rounded-circle" target="_blank">
                                                        <i class="fa fa-linkedin-square" style="font-size:36px"></i>
                                                    </a>

                                                    <a href="https://www.instagram.com/deltaview.in/" id="instagramLink" class="btn btn-error contact-link rounded-circle" target="_blank"><i class="fa fa-instagram" style="font-size:36px"></i>
                                                    </a>
                                                    <a href="https://www.facebook.com/DeltaITNetwork/" id="facebookLink" class="btn btn-error contact-link rounded-circle" target="_blank"><i class="fa fa-facebook" style="font-size:36px"></i>
                                                    </a>
                                                    <a href="https://www.twitter.com/DeltaITNetwork/" id="twitterLink" class="btn btn-error contact-link rounded-circle" target="_blank"><i class="fa fa-twitter" style="font-size:36px"></i>
                                                    </a>

                                                </div>
                                            </div>
                                            <!-- Fourth Card -->
                                            <div class="card-1">
                                                <div class="card-header-3">
                                                    <div class="card-header-4">
                                                        <div class="col-3 text-center">
                                                            <i class="fa-solid fa-image " style="font-size:30px;"></i>
                                                        </div>
                                                        <div class="col-9 text-start">
                                                            <h4>&nbsp; Post</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <img src="images/delta.png" id="image-preview" class="img-fluid" alt="">
                                                </div>
                                            </div>
                                            <!-- fifth Card -->
                                            <!-- <div class="card-1">
                                            <div class="card-header-3">
                                                <div class="card-header-4">
                                                    <div class="col-3 text-center">
                                                        <i class="fa-solid fa-video " style="font-size:30px;"></i>
                                                    </div>
                                                    <div class="col-9 text-start">
                                                        <h4>&nbsp; Video</h4>
                                                    </div>
                                                </div>
                                            </div>
                                             <div class="card-body">
                                                <video id="video" width="100%" autoplay="" loop="" muted=""
                                                    data-src="https://www.deltaview.in/wp-content/themes/deltaview/assets/images/video1.mp4">
                                                    <source
                                                        src="https://www.deltaview.in/wp-content/themes/deltaview/assets/images/deltaview.mp4"
                                                        type="video/mp4">
                                                </video>
                                            </div> -->
                                            <!-- <div class="card-body">
                                                <iframe id="youtube-preview" width="100%" height="315" src=""
                                                    frameborder="0" allowfullscreen></iframe>
                                            </div> -->

                                        </div>
                                        <!-- sixth Card -->

                                    </div>
                                    <!-- </section> -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>


</section>


<?php

include '_footer.php';
?>


</body>

</html>