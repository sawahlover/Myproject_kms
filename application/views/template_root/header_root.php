<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />

    <title>KMS | Dashboard</title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--begin::Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">
    <!--end::Fonts -->
    <link href="<?= base_url() ?>assets/template/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/template/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />
    <!--end:: Global Mandatory Vendors -->


    <!--begin:: Global Optional Vendors -->
    <link href="<?= base_url() ?>assets/template/vendors/general/tether/dist/css/tether.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/template/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/template/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/template/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/template/vendors/general/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/template/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/template/vendors/general/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/template/vendors/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/template/vendors/general/select2/dist/css/select2.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/template/vendors/general/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/template/vendors/general/nouislider/distribute/nouislider.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/template/vendors/general/owl.carousel/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/template/vendors/general/owl.carousel/dist/assets/owl.theme.default.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/template/vendors/general/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/template/vendors/general/quill/dist/quill.snow.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/template/vendors/general/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/template/vendors/general/summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/template/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/template/vendors/general/animate.css/animate.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/template/vendors/general/toastr/build/toastr.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/template/vendors/general/dual-listbox/dist/dual-listbox.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/template/vendors/general/morris.js/morris.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/template/vendors/general/sweetalert2/dist/sweetalert2.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/template/vendors/general/socicon/css/socicon.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/template/vendors/custom/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/template/vendors/custom/vendors/flaticon/flaticon.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/template/vendors/custom/vendors/flaticon2/flaticon.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/template/vendors/general/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/template/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="<?= base_url() ?>assets/template/media/logos/faviconfhi.png" />

    <link rel="shortcut icon" href="<?= base_url() ?>assets/custom/css/page/dashboard.css" />

    <link href="<?= base_url() ?>assets/custom/css/page/dashboard.css/flaticon2/flaticon.css" rel="stylesheet" type="text/css" />
</head>

<body style="background-image: url(<?= base_url() ?>assets/template/media/demos/demo4/header.jpg); background-position: center top; background-size: 100% 210px;" class="kt-page--loading-enabled kt-page--loading kt-page--fluid kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header--minimize-menu kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-page--loading body">
    <div class="kt-grid kt-grid--hor kt-grid--root">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
                <!-- begin:: Header -->
                <div id="kt_header" class="kt-header  kt-header--fixed " data-ktheader-minimize="on">
                    <div class="kt-container ">
                        <!-- begin:: Brand -->
                        <div class="kt-header__brand   kt-grid__item" id="kt_header_brand">
                            <a class="kt-header__brand-logo" href="demo4/index.html">
                                <img src="<?= base_url() ?>template/assets/media/logos/fhiedit.png">
                                <img alt="Logo" src="<?= base_url() ?>assets/template/media/logos/logo-4-sm.png" class="kt-header__brand-logo-sticky" />
                            </a>
                        </div>
                        <!-- end:: Brand -->
                        <!-- begin: Header Menu -->
                        <button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
                        <div class="kt-header-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_header_menu_wrapper">
                            <div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile ">
                                <ul class="kt-menu__nav ">
                                    <li class="kt-menu__item  kt-menu__item--open kt-menu__item--here kt-menu__item--submenu kt-menu__item--rel kt-menu__item--open kt-menu__item--here" data-ktmenu-submenu-toggle="click" aria-haspopup="true">
                                        <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
                                            <span class="kt-menu__link-text">Dashboard</span>
                                            <i class="kt-menu__ver-arrow la la-angle-right"></i>
                                        </a>
                                        <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
                                            <ul class="kt-menu__subnav">
                                                <li class="kt-menu__item " aria-haspopup="true">
                                                    <a href="demo4/index.html" class="kt-menu__link ">
                                                        <i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
                                                        <span class="kt-menu__link-text">Default Dashboard</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- end: Header Menu -->
                        <!-- begin:: Header Topbar -->
                        <div class="kt-header__topbar kt-grid__item">
                            <div class="kt-header__topbar-item kt-header__topbar-item--user">
                                <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
                                    <button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
                                    <div class="kt-header-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_header_menu_wrapper">
                                        <div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile ">
                                            <ul class="kt-menu__nav ">
                                                <li class="kt-menu__item  kt-menu__item--open kt-menu__item--here kt-menu__item--submenu kt-menu__item--rel kt-menu__item--open kt-menu__item--here" data-ktmenu-submenu-toggle="click" aria-haspopup="true">
                                                    <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
                                                        <span class="kt-menu__link-text">Welcome, </span>
                                                        <span class="kt-menu__link-text"> <?= $this->session->userdata('rolename'); ?></span>
                                                        <i class="kt-menu__ver-arrow la la-angle-right"></i>
                                                    </a>

                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">
                                    <!--begin: Head -->
                                    <div class="kt-user-card kt-user-card--skin-dark kt-notification-item-padding-x" style="background-image: url(<?= base_url() ?>assets/template/media/misc/bg-1.jpg)">
                                        <div class="kt-user-card__avatar">
                                            <img class="kt-hidden" alt="Pic" src="<?= base_url() ?>assets/template/media/users/300_25.jpg" />
                                            <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->

                                        </div>
                                        <div class="kt-user-card__name">
                                            <span class="kt-menu__link-text">Name Account, <?= $this->session->userdata('name'); ?></span>
                                        </div>

                                    </div>
                                    <!--end: Head -->

                                    <!--begin: Navigation -->
                                    <div class="kt-notification">

                                        <div class="kt-notification__custom kt-space-between">
                                            <a href="<?= site_url('auth/logout') ?>" class="btn btn-default btn-flat">Sign out</a>
                                        </div>
                                    </div>
                                    <!--end: Navigation -->
                                </div>
                            </div>
                            <!--end: User bar -->
                        </div>
                        <!-- end:: Header Topbar -->

                    </div>
                </div>
                <!-- end:: Header -->
                <div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
                    <div class="kt-content kt-content--fit-top  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                        <div class="kt-subheader   kt-grid__item" id="kt_subheader">
                            <div class="kt-container ">
                                <div class="kt-subheader__main">
                                    <h3 class="kt-subheader__title">
                                        Dashboard
                                    </h3>
                                    <div class="kt-subheader__breadcrumbs">
                                        <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                                        <span class="kt-subheader__breadcrumbs-separator"></span>
                                        <a href="" class="kt-subheader__breadcrumbs-link">
                                            video
                                        </a>
                                        <span class="kt-subheader__breadcrumbs-separator"></span>
                                        <a href="" class="kt-subheader__breadcrumbs-link">
                                            Material
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- end:: Subheader -->

                        <!-- begin:: Content -->
                        <div class="kt-container  kt-grid__item kt-grid__item--fluid">
                            <!-- dinisi conten -->