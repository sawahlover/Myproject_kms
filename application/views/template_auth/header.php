<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4 & Angular 8
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">
<!-- begin::Head -->

<head>
    <!--begin::Base Path (base relative path for assets of this page) -->
    <base href=".<?= base_url() ?>template/.<?= base_url() ?>template/.<?= base_url() ?>template/.<?= base_url() ?>template/">
    <!--end::Base Path -->
    <meta charset="utf-8" />

    <title>KMS | Login </title>
    <meta name="description" content="Login page example">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--begin::Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">
    <!--end::Fonts -->


    <!--begin::Page Custom Styles(used by this page) -->
    <link href="<?= base_url() ?>template/assets/css/demo2/pages/login/login-6.css" rel="stylesheet" type="text/css" />
    <!--end::Page Custom Styles -->

    <!--begin:: Global Mandatory Vendors -->
    <link href="<?= base_url() ?>template/assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />
    <!--end:: Global Mandatory Vendors -->

    <!--begin:: Global Optional Vendors -->
    <link href="<?= base_url() ?>template/assets/vendors/general/tether/dist/css/tether.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>template/assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>template/assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>template/assets/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>template/assets/vendors/general/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>template/assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>template/assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>template/assets/vendors/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>template/assets/vendors/general/select2/dist/css/select2.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>template/assets/vendors/general/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>template/assets/vendors/general/nouislider/distribute/nouislider.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>template/assets/vendors/general/owl.carousel/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>template/assets/vendors/general/owl.carousel/dist/assets/owl.theme.default.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>template/assets/vendors/general/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>template/assets/vendors/general/quill/dist/quill.snow.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>template/assets/vendors/general/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>template/assets/vendors/general/summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>template/assets/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>template/assets/vendors/general/animate.css/animate.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>template/assets/vendors/general/toastr/build/toastr.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>template/assets/vendors/general/dual-listbox/dist/dual-listbox.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>template/assets/vendors/general/morris.js/morris.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>template/assets/vendors/general/sweetalert2/dist/sweetalert2.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>template/assets/vendors/general/socicon/css/socicon.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>template/assets/vendors/custom/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>template/assets/vendors/custom/vendors/flaticon/flaticon.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>template/assets/vendors/custom/vendors/flaticon2/flaticon.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>template/assets/vendors/general/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <!--end:: Global Optional Vendors -->

    <!--begin::Global Theme Styles(used by all pages) -->

    <link href="<?= base_url() ?>template/assets/css/demo2/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles -->

    <!--begin::Layout Skins(used by all pages) -->
    <!--end::Layout Skins -->

    <link rel="shortcut icon" href="<?= base_url() ?>template/assets/media/logos/lingka.ico />
</head>
<!-- end::Head -->

<!-- begin::Body -->

<body class=" kt-page--loading-enabled kt-page--loading kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header--minimize-topbar kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-page--loading">