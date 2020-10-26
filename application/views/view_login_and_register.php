
<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="utf-8"/>

        <title>Login | FHI360 Indonesia</title>
        <meta name="description" content="Login page | FHI 360 INDONESIA">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--begin::Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">        <!--end::Fonts -->
        <link href="<?= base_url()?>assets/css/login.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url()?>assets/vendors/general/animate.css/animate.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url()?>assets/css/style.bundle.css" rel="stylesheet" type="text/css" />  
        
        <link rel="shortcut icon" href="<?= base_url()?>assets/custom/img/fhi.png" />
        <script>
            var base_url='<?= base_url()?>'
        </script>
    </head>

    <body  class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading"  >

        <div class="kt-grid kt-grid--ver kt-grid--root">
            <div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v6 kt-login--signin" id="kt_login">
                <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--desktop kt-grid--ver-desktop kt-grid--hor-tablet-and-mobile">
                    <div class="kt-grid__item  kt-grid__item--order-tablet-and-mobile-2  kt-grid kt-grid--hor kt-login__aside">
                        <div class="kt-login__wrapper">
                            <div class="kt-login__container">
                                <div class="kt-login__body">
                                    <div class="kt-login__logo">
                                        <a href="#">
                                            <img src="<?= base_url()?>assets/custom/img/logogabungan.png" width='200px'>      
                                        </a>
                                    </div>

                                    <div class="kt-login__signin">
                                        <div class="kt-login__head">
                                            <h3 class="kt-login__title kt-font-fhi">Login, to access system.</h3>
                                        </div>
                                        <div class="kt-login__form">
                                            <form class="kt-form" action="">
                                                <div class="form-group mb-2">
                                                    <input class="form-control" type="text" placeholder="Username" name="email" autocomplete="off">
                                                </div>
                                                <div class="form-group">
                                                    <input class="form-control form-control-last" type="password" placeholder="Password" name="password">
                                                </div>
                                                <div class="kt-login__extra">
                                                    <label class="kt-checkbox">
                                                        <input type="checkbox" name="remember"> Remember me
                                                        <span></span>
                                                    </label>                        
                                                    <a href="javascript:;" id="kt_login_forgot">Forget Password ?</a>
                                                </div>
                                                <div class="kt-login__actions">
                                                    <button id="kt_login_signin_submit" class="btn btn-info btn-pill btn-elevate">Sign In</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="kt-login__forgot">
                                        <div class="kt-login__head">
                                            <h3 class="kt-login__title kt-font-fhi">Forgotten Password ?</h3>
                                            <div class="kt-login__desc">Enter your email to reset your password:</div>
                                        </div>
                                        <div class="kt-login__form">
                                            <form class="kt-form" action="">
                                                <div class="form-group">
                                                    <input class="form-control" type="text" placeholder="Enter your email" name="email" id="kt_email" autocomplete="off">
                                                </div>
                                                <div class="kt-login__actions">
                                                    <button id="kt_login_forgot_submit" class="btn btn-brand btn-pill btn-elevate">Request</button>
                                                    <button id="kt_login_forgot_cancel" class="btn btn-outline-brand btn-pill">Cancel</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="kt-login__signup">
                                        <div class="kt-login__head">
                                            <h3 class="kt-login__title kt-font-fhi">Register a account access</h3>
                                            <div class="kt-login__desc">Enter your details to create your account:</div>
                                        </div>
                                        <div class="kt-login__form">
                                            <form class="kt-form" action="">
                                                <div class="form-group mb-1">
                                                    <input class="form-control" type="text" placeholder="Full Name" name="reg_name" autocomplete="off">
                                                </div>
                                                
                                                <div class="form-group mb-1">
                                                    <input class="form-control" type="text" placeholder="Email" name="reg_mail" autocomplete="off">
                                                </div>
                                                <div class="form-group mb-1">
                                                    <input class="form-control" type="password" placeholder="Password" name="reg_pass" autocomplete="off">
                                                </div>
                                                <div class="form-group">
                                                    <input class="form-control" type="password" placeholder="Confirm Password" name="reg_con_pass" autocomplete="off">
                                                </div>
                                                <div class="kt-login__extra">
                                                    <label class="kt-checkbox">
                                                        <input type="checkbox" name="agree"> I Agree the <a href="#">terms and conditions</a>.
                                                        <span></span>
                                                    </label>
                                                </div>
                                                <div class="kt-login__actions">
                                                    <button id="kt_login_signup_submit" class="btn btn-brand btn-pill btn-elevate">Sign Up</button>
                                                    <button id="kt_login_signup_cancel" class="btn btn-outline-brand btn-pill">Cancel</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="kt-login__account">
                                <span class="kt-login__account-msg kt-font-dark">
                                    Dose not have a login ?, Please 
                                </span>
                                <a href="javascript:;" id="kt_login_signup" class="kt-badge kt-badge--info kt-badge--inline kt-login__account-link kt-font-light"> Sign Up</a>
                            </div>
                        </div>
                    </div>

                    <div class="kt-grid__item kt-grid__item--fluid kt-grid__item--center kt-grid kt-grid--ver kt-login__content" style="background-image: url(<?= base_url()?>assets/media//bg/bg-4.jpg);">
                        <div class="kt-login__section">
                            <div class="kt-login__block">
                                <div class="kt-notes note-login">
                                    <div class="kt-notes__items">
                                        <div class="kt-notes__item">
                                        <div class="kt-notes__media">
                                            <img class="kt-hidden-" src="<?= site_url('assets/custom/img/infoavatar.jpg')?>" alt="image">
                                            <span class="kt-notes__icon kt-font-boldest kt-hidden">
                                                <i class="flaticon2-cup"></i>                                    
                                            </span> 
                                            <h3 class="kt-notes__user kt-font-boldest kt-hidden">
                                                N S                                                       
                                            </h3>                                 
                                        </div> 
                                            <div class="kt-notes__content"> 
                                                <div class="kt-notes__section">     
                                                    <div class="kt-notes__info">
                                                        <span class="kt-notes__title kt-font-primary">
                                                            Knowledge Management System (KMS)                                                      
                                                        </span>
                                                    </div>
                                                    
                                                </div>
                                                <span class="kt-notes__body">                                        
                                                    <span class='kt-font-bold'><b>KMS</b></span> is a system for applying and using knowledge management principles to typically enable employees
                                                    and customers to create,share and find relevant information quickly. During 2016 - 2020, LInkages              
                                                    Indonesia has produces many guideline, SOP, vedio, etc, and now you can access oll of them in this           
                                                    system
                                                </span>  
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
        
        <script>
            var KTAppOptions = {"colors":{"state":{"brand":"#5d78ff","dark":"#282a3c","light":"#ffffff","primary":"#5867dd","success":"#34bfa3","info":"#36a3f7","warning":"#ffb822","danger":"#fd3995"},"base":{"label":["#c5cbe3","#a1a8c3","#3d4465","#3e4466"],"shape":["#f0f3ff","#d9dffa","#afb4d4","#646c9a"]}}};
        </script>
        <script src="<?= base_url()?>assets/vendors/general/jquery/dist/jquery.js" type="text/javascript"></script>
        <script src="<?= base_url()?>assets/vendors/general/popper.js/dist/umd/popper.js" type="text/javascript"></script>
        <script src="<?= base_url()?>assets/vendors/general/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?= base_url()?>assets/vendors/general/js-cookie/src/js.cookie.js" type="text/javascript"></script>
        <script src="<?= base_url()?>assets/vendors/general/moment/min/moment.min.js" type="text/javascript"></script>
        <script src="<?= base_url()?>assets/vendors/general/tooltip.js/dist/umd/tooltip.min.js" type="text/javascript"></script>
        <script src="<?= base_url()?>assets/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js" type="text/javascript"></script>
        <script src="<?= base_url()?>assets/vendors/general/sticky-js/dist/sticky.min.js" type="text/javascript"></script>
        <script src="<?= base_url()?>assets/vendors/general/wnumb/wNumb.js" type="text/javascript"></script>
        <script src="<?= base_url()?>assets/vendors/general/jquery-form/dist/jquery.form.min.js" type="text/javascript"></script>
        <script src="<?= base_url()?>assets/vendors/general/block-ui/jquery.blockUI.js" type="text/javascript"></script>
        <script src="<?= base_url()?>assets/vendors/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
        <script src="<?= base_url()?>assets/vendors/custom/js/vendors/bootstrap-datepicker.init.js" type="text/javascript"></script>
        <script src="<?= base_url()?>assets/vendors/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
        <script src="<?= base_url()?>assets/vendors/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
        <script src="<?= base_url()?>assets/vendors/custom/js/vendors/bootstrap-timepicker.init.js" type="text/javascript"></script>
        <script src="<?= base_url()?>assets/vendors/general/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <script src="<?= base_url()?>assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
        <script src="<?= base_url()?>assets/vendors/general/bootstrap-maxlength/src/bootstrap-maxlength.js" type="text/javascript"></script>
        <script src="<?= base_url()?>assets/vendors/custom/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js" type="text/javascript"></script>
        <script src="<?= base_url()?>assets/vendors/general/bootstrap-select/dist/js/bootstrap-select.js" type="text/javascript"></script>
        <script src="<?= base_url()?>assets/vendors/general/bootstrap-switch/dist/js/bootstrap-switch.js" type="text/javascript"></script>
        <script src="<?= base_url()?>assets/vendors/custom/js/vendors/bootstrap-switch.init.js" type="text/javascript"></script>
        <script src="<?= base_url()?>assets/vendors/general/select2/dist/js/select2.full.js" type="text/javascript"></script>
        <script src="<?= base_url()?>assets/vendors/general/ion-rangeslider/js/ion.rangeSlider.js" type="text/javascript"></script>
        <script src="<?= base_url()?>assets/vendors/general/typeahead.js/dist/typeahead.bundle.js" type="text/javascript"></script>
        <script src="<?= base_url()?>assets/vendors/general/handlebars/dist/handlebars.js" type="text/javascript"></script>
        <script src="<?= base_url()?>assets/vendors/general/inputmask/dist/jquery.inputmask.bundle.js" type="text/javascript"></script>
        <script src="<?= base_url()?>assets/vendors/general/inputmask/dist/inputmask/inputmask.date.extensions.js" type="text/javascript"></script>
        <script src="<?= base_url()?>assets/vendors/general/inputmask/dist/inputmask/inputmask.numeric.extensions.js" type="text/javascript"></script>
        <script src="<?= base_url()?>assets/vendors/general/nouislider/distribute/nouislider.js" type="text/javascript"></script>
        <script src="<?= base_url()?>assets/vendors/general/owl.carousel/dist/owl.carousel.js" type="text/javascript"></script>
        <script src="<?= base_url()?>assets/vendors/general/autosize/dist/autosize.js" type="text/javascript"></script>
        <script src="<?= base_url()?>assets/vendors/general/clipboard/dist/clipboard.min.js" type="text/javascript"></script>
        <script src="<?= base_url()?>assets/vendors/general/dropzone/dist/dropzone.js" type="text/javascript"></script>
        <script src="<?= base_url()?>assets/vendors/custom/js/vendors/dropzone.init.js" type="text/javascript"></script>
        <script src="<?= base_url()?>assets/vendors/general/quill/dist/quill.js" type="text/javascript"></script>
        <script src="<?= base_url()?>assets/vendors/general/@yaireo/tagify/dist/tagify.polyfills.min.js" type="text/javascript"></script>
        <script src="<?= base_url()?>assets/vendors/general/@yaireo/tagify/dist/tagify.min.js" type="text/javascript"></script>
        <script src="<?= base_url()?>assets/vendors/general/summernote/dist/summernote.js" type="text/javascript"></script>
        <script src="<?= base_url()?>assets/vendors/general/markdown/lib/markdown.js" type="text/javascript"></script>
        <script src="<?= base_url()?>assets/vendors/general/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
        <script src="<?= base_url()?>assets/vendors/custom/js/vendors/bootstrap-markdown.init.js" type="text/javascript"></script>
        <script src="<?= base_url()?>assets/vendors/general/bootstrap-notify/bootstrap-notify.min.js" type="text/javascript"></script>
        <script src="<?= base_url()?>assets/vendors/custom/js/vendors/bootstrap-notify.init.js" type="text/javascript"></script>
        <script src="<?= base_url()?>assets/vendors/general/jquery-validation/dist/jquery.validate.js" type="text/javascript"></script>
        <script src="<?= base_url()?>assets/vendors/general/jquery-validation/dist/additional-methods.js" type="text/javascript"></script>
        <script src="<?= base_url()?>assets/vendors/custom/js/vendors/jquery-validation.init.js" type="text/javascript"></script>
        <script src="<?= base_url()?>assets/vendors/general/toastr/build/toastr.min.js" type="text/javascript"></script>
        <script src="<?= base_url()?>assets/vendors/general/dual-listbox/dist/dual-listbox.js" type="text/javascript"></script>
        <script src="<?= base_url()?>assets/vendors/general/raphael/raphael.js" type="text/javascript"></script>
        <script src="<?= base_url()?>assets/vendors/general/morris.js/morris.js" type="text/javascript"></script>
        <script src="<?= base_url()?>assets/vendors/general/chart.js/dist/Chart.bundle.js" type="text/javascript"></script>
        <script src="<?= base_url()?>assets/vendors/custom/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js" type="text/javascript"></script>
        <script src="<?= base_url()?>assets/vendors/custom/vendors/jquery-idletimer/idle-timer.min.js" type="text/javascript"></script>
        <script src="<?= base_url()?>assets/vendors/general/waypoints/lib/jquery.waypoints.js" type="text/javascript"></script>
        <script src="<?= base_url()?>assets/vendors/general/counterup/jquery.counterup.js" type="text/javascript"></script>
        <script src="<?= base_url()?>assets/vendors/general/es6-promise-polyfill/promise.min.js" type="text/javascript"></script>
        <script src="<?= base_url()?>assets/vendors/general/sweetalert2/dist/sweetalert2.min.js" type="text/javascript"></script>
        <script src="<?= base_url()?>assets/vendors/custom/js/vendors/sweetalert2.init.js" type="text/javascript"></script>
        <script src="<?= base_url()?>assets/vendors/general/jquery.repeater/src/lib.js" type="text/javascript"></script>
        <script src="<?= base_url()?>assets/vendors/general/jquery.repeater/src/jquery.input.js" type="text/javascript"></script>
        <script src="<?= base_url()?>assets/vendors/general/jquery.repeater/src/repeater.js" type="text/javascript"></script>
        <script src="<?= base_url()?>assets/vendors/general/dompurify/dist/purify.js" type="text/javascript"></script>
        <script src="<?= base_url()?>assets/js/scripts.bundle.js" type="text/javascript"></script>
        <script src="<?= base_url()?>assets/custom/js/login.js" type="text/javascript"></script>
    </body>
    <!-- end::Body -->
</html>
