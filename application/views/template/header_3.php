<!DOCTYPE html>

<html lang="en">
<!-- begin::Head -->

<head>
	<meta charset="utf-8" />

	<title>Dashboard | KMS</title>
	<meta name="description" content="Latest updates and statistic charts">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!--begin::Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">
	<!--end::Fonts -->

	<!--begin::Page Vendors Styles(used by this page) -->
	<link href="<?= base_url() ?>assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Page Vendors Styles -->


	<!--begin:: Global Mandatory Vendors -->
	<link href="<?= base_url() ?>assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />
	<!--end:: Global Mandatory Vendors -->

	<!--begin:: Global Optional Vendors -->
	<link href="<?= base_url() ?>assets/vendors/general/tether/dist/css/tether.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url() ?>assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url() ?>assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url() ?>assets/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url() ?>assets/vendors/general/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url() ?>assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url() ?>assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url() ?>assets/vendors/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url() ?>assets/vendors/general/select2/dist/css/select2.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url() ?>assets/vendors/general/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url() ?>assets/vendors/general/nouislider/distribute/nouislider.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url() ?>assets/vendors/general/owl.carousel/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url() ?>assets/vendors/general/owl.carousel/dist/assets/owl.theme.default.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url() ?>assets/vendors/general/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url() ?>assets/vendors/general/quill/dist/quill.snow.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url() ?>assets/vendors/general/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url() ?>assets/vendors/general/summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url() ?>assets/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url() ?>assets/vendors/general/animate.css/animate.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url() ?>assets/vendors/general/toastr/build/toastr.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url() ?>assets/vendors/general/dual-listbox/dist/dual-listbox.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url() ?>assets/vendors/general/morris.js/morris.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url() ?>assets/vendors/general/sweetalert2/dist/sweetalert2.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url() ?>assets/vendors/general/socicon/css/socicon.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url() ?>assets/vendors/custom/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url() ?>assets/vendors/custom/vendors/flaticon/flaticon.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url() ?>assets/vendors/custom/vendors/flaticon2/flaticon.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url() ?>assets/vendors/general/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
	<!--end:: Global Optional Vendors -->

	<!--begin::Global Theme Styles(used by all pages) -->

	<link href="<?= base_url() ?>assets/css/theme_v3.css" rel="stylesheet" type="text/css" />
	<!--end::Global Theme Styles -->

	<!--begin::Layout Skins(used by all pages) -->
	<!--end::Layout Skins -->

	<link rel="shortcut icon" href="<?= base_url() ?>assets/media/logos/favicon.ico" />
</head>
<!-- end::Head -->

<!-- begin::Body -->

<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">
	<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
		<div class="kt-header-mobile__logo">
			<a href="demo3/index.html">
				<img alt="Logo" src="<?= base_url() ?>assets/media/logos/logo-2-sm.png" />
			</a>
		</div>
		<div class="kt-header-mobile__toolbar">
			<button class="kt-header-mobile__toolbar-toggler kt-header-mobile__toolbar-toggler--left"
				id="kt_aside_mobile_toggler"><span></span></button>

			<button class="kt-header-mobile__toolbar-toggler" id="kt_header_mobile_toggler"><span></span></button>
			<button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i
					class="flaticon-more"></i></button>
		</div>
	</div>
	<!-- end:: Header Mobile -->
	<div class="kt-grid kt-grid--hor kt-grid--root">
		<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
			<!-- begin:: Aside -->
			<button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>

			<div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop"
				id="kt_aside">
				<!-- begin:: Aside -->
				<div class="kt-aside__brand kt-grid__item  " id="kt_aside_brand">
					<div class="kt-aside__brand-logo">
						<a href="<?= base_url() ?>">
							<img alt="Logo" src="<?= base_url() ?>assets/media/logos/logo-4.png" />
						</a>
					</div>
				</div>
				<!-- end:: Aside -->
				<!-- begin:: Aside Menu -->
				<div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
					<div id="kt_aside_menu" class="kt-aside-menu  kt-aside-menu--dropdown " data-ktmenu-vertical="1" data-ktmenu-dropdown="1" data-ktmenu-scroll="0">

						<ul class="kt-menu__nav ">
							<li class="kt-menu__item  kt-menu__item--active" aria-haspopup="true">
								<a href="<?= site_url('dashboard')?>" class="kt-menu__link ">
									<i class="kt-menu__link-icon flaticon-dashboard"></i>
									<span class="kt-menu__link-text">Dashboard</span>
								</a>
							</li>
							
							<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
								<a href="javascript:;" class="kt-menu__link kt-menu__toggle">
									<i class="kt-menu__link-icon flaticon-upload "></i>
									<span class="kt-menu__link-text">Upload</span>
								</a>
								<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
									<ul class="kt-menu__subnav">
										<li class="kt-menu__item " aria-haspopup="true">
											<a href="<?= site_url('contents/upload/vidio')?>" class="kt-menu__link ">
												<i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
												<span class="kt-menu__link-text">Upload Vidio</span>
											</a>
										</li>
										<li class="kt-menu__item " aria-haspopup="true">
											<a href="<?= site_url('contents/upload/material')?>" class="kt-menu__link ">
												<i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
												<span class="kt-menu__link-text">Upload Material</span>
											</a>
										</li>
										
									</ul>
								</div>
							</li>
							<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
								<a href="javascript:;" class="kt-menu__link kt-menu__toggle">
									<i class="kt-menu__link-icon flaticon-multimedia-3 "></i>
									<span class="kt-menu__link-text">Contents</span>
								</a>
								<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
									<ul class="kt-menu__subnav">
										<li class="kt-menu__item " aria-haspopup="true">
											<a href="<?= site_url('contents/data/vidio')?>" class="kt-menu__link ">
												<i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
												<span class="kt-menu__link-text">Contens Vidio</span>
											</a>
										</li>
										<li class="kt-menu__item " aria-haspopup="true">
											<a href="<?= site_url('contents/data/material')?>" class="kt-menu__link ">
												<i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
												<span class="kt-menu__link-text">Contents Material</span>
											</a>
										</li>
										
									</ul>
								</div>
							</li>
							<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
								<a href="javascript:;" class="kt-menu__link kt-menu__toggle">
									<i class="kt-menu__link-icon flaticon-users "></i>
									<span class="kt-menu__link-text">Users</span>
								</a>
								<div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
									<ul class="kt-menu__subnav">
										<li class="kt-menu__item " aria-haspopup="true">
											<a href="<?= site_url('contents/data/vidio')?>" class="kt-menu__link ">
												<i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
												<span class="kt-menu__link-text">Registered Users</span>
											</a>
										</li>
										<li class="kt-menu__item " aria-haspopup="true">
											<a href="<?= site_url('contents/data/material')?>" class="kt-menu__link ">
												<i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
												<span class="kt-menu__link-text">All Users</span>
											</a>
										</li>
										
									</ul>
								</div>
							</li>
							<li class="kt-menu__item  " aria-haspopup="true">
								<a href="<?= site_url('logout')?>" class="kt-menu__link ">
									<i class="kt-menu__link-icon flaticon-logout"></i>
									<span class="kt-menu__link-text">Sign Out</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<!-- end:: Aside Menu -->
			</div>
			<!-- end:: Aside -->
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
				<!-- begin:: Header -->
				<div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed ">
					<!-- begin: Header Menu -->
					<button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
					<div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">
						
					</div>
					<!-- end: Header Menu -->
					<!-- begin:: Header Topbar -->
					<div class="kt-header__topbar">

						<!--begin: User Bar -->
						<div class="kt-header__topbar-item kt-header__topbar-item--user">
							<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="0px,0px">
								<div class="kt-header__topbar-user">
									<span class="kt-hidden kt-header__topbar-welcome kt-hidden-mobile">Hi,</span>
									<span class="kt-hidden kt-header__topbar-username kt-hidden-mobile">Sean</span>
									<img class="kt-hidden" alt="Pic" src="<?= base_url() ?>assets/media/users/300_25.jpg" />
									<!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
									<span
										class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bolder">S</span>
								</div>
							</div>
							<div
								class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-xl">
								<!--begin: Head -->
								<div class="kt-user-card kt-user-card--skin-dark kt-notification-item-padding-x"
									style="background-image: url(<?= base_url() ?>assets/media/misc/bg-1.jpg)">
									<div class="kt-user-card__avatar">
										<img class="kt-hidden" alt="Pic" src="<?= base_url() ?>assets/media/users/300_25.jpg" />
										<!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
										<span
											class="kt-badge kt-badge--lg kt-badge--rounded kt-badge--bold kt-font-success">S</span>
									</div>
									<div class="kt-user-card__name">
										Sean Stone
									</div>
									<div class="kt-user-card__badge">
										<span class="btn btn-success btn-sm btn-bold btn-font-md">23 messages</span>
									</div>
								</div>
								<!--end: Head -->

								<!--begin: Navigation -->
								<div class="kt-notification">
									<a href="demo3/custom/apps/user/profile-1/personal-information.html"
										class="kt-notification__item">
										<div class="kt-notification__item-icon">
											<i class="flaticon2-calendar-3 kt-font-success"></i>
										</div>
										<div class="kt-notification__item-details">
											<div class="kt-notification__item-title kt-font-bold">
												My Profile
											</div>
											<div class="kt-notification__item-time">
												Account settings and more
											</div>
										</div>
									</a>
									<a href="demo3/custom/apps/user/profile-3.html" class="kt-notification__item">
										<div class="kt-notification__item-icon">
											<i class="flaticon2-mail kt-font-warning"></i>
										</div>
										<div class="kt-notification__item-details">
											<div class="kt-notification__item-title kt-font-bold">
												My Messages
											</div>
											<div class="kt-notification__item-time">
												Inbox and tasks
											</div>
										</div>
									</a>
									<a href="demo3/custom/apps/user/profile-2.html" class="kt-notification__item">
										<div class="kt-notification__item-icon">
											<i class="flaticon2-rocket-1 kt-font-danger"></i>
										</div>
										<div class="kt-notification__item-details">
											<div class="kt-notification__item-title kt-font-bold">
												My Activities
											</div>
											<div class="kt-notification__item-time">
												Logs and notifications
											</div>
										</div>
									</a>
									<a href="demo3/custom/apps/user/profile-3.html" class="kt-notification__item">
										<div class="kt-notification__item-icon">
											<i class="flaticon2-hourglass kt-font-brand"></i>
										</div>
										<div class="kt-notification__item-details">
											<div class="kt-notification__item-title kt-font-bold">
												My Tasks
											</div>
											<div class="kt-notification__item-time">
												latest tasks and projects
											</div>
										</div>
									</a>

									<a href="demo3/custom/apps/user/profile-1/overview.html"
										class="kt-notification__item">
										<div class="kt-notification__item-icon">
											<i class="flaticon2-cardiogram kt-font-warning"></i>
										</div>
										<div class="kt-notification__item-details">
											<div class="kt-notification__item-title kt-font-bold">
												Billing
											</div>
											<div class="kt-notification__item-time">
												billing & statements <span
													class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill kt-badge--rounded">2
													pending</span>
											</div>
										</div>
									</a>
									<div class="kt-notification__custom kt-space-between">
										<a href="demo3/custom/user/login-v2.html" target="_blank"
											class="btn btn-label btn-label-brand btn-sm btn-bold">Sign Out</a>

										<a href="demo3/custom/user/login-v2.html" target="_blank"
											class="btn btn-clean btn-sm btn-bold">Upgrade Plan</a>
									</div>
								</div>
								<!--end: Navigation -->
							</div>
						</div>
						<!--end: User Bar -->
					</div>
					<!-- end:: Header Topbar -->
				</div>
				<!-- end:: Header -->
				<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
					<div class="kt-subheader  kt-grid__item" id="kt_subheader">
						<div class="kt-container  kt-container--fluid ">
							<div class="kt-subheader__main">

								<h3 class="kt-subheader__title">Dashboard</h3>

								<span class="kt-subheader__separator kt-subheader__separator--v"></span>

								<span class="kt-subheader__desc">#XRS-45670</span>

								<a href="#" class="btn btn-label-warning btn-bold btn-sm btn-icon-h kt-margin-l-10">
									Add New
								</a>

								<div class="kt-input-icon kt-input-icon--right kt-subheader__search kt-hidden">
									<input type="text" class="form-control" placeholder="Search order..."
										id="generalSearch">
									<span class="kt-input-icon__icon kt-input-icon__icon--right">
										<span><i class="flaticon2-search-1"></i></span>
									</span>
								</div>
							</div>
							<div class="kt-subheader__toolbar">
								<div class="kt-subheader__wrapper">
									<a href="#" class="btn kt-subheader__btn-secondary">Today</a>

									<a href="#" class="btn kt-subheader__btn-secondary">Month</a>

									<a href="#" class="btn kt-subheader__btn-secondary">Year</a>

									<a href="#" class="btn kt-subheader__btn-daterange"
										id="kt_dashboard_daterangepicker" data-toggle="kt-tooltip"
										title="Select dashboard daterange" data-placement="left">
										<span class="kt-subheader__btn-daterange-title"
											id="kt_dashboard_daterangepicker_title">Today</span>&nbsp;
										<span class="kt-subheader__btn-daterange-date"
											id="kt_dashboard_daterangepicker_date">Aug 16</span>
										<i class="flaticon2-calendar-1"></i>
									</a>

									<div class="dropdown dropdown-inline" data-toggle-="kt-tooltip"
										title="Quick actions" data-placement="left">
										<a href="#" class="btn btn-icon" data-toggle="dropdown" aria-haspopup="true"
											aria-expanded="false">
											<svg xmlns="http://www.w3.org/2000/svg"
												xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
												viewBox="0 0 24 24" version="1.1"
												class="kt-svg-icon kt-svg-icon--success kt-svg-icon--md">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon id="Shape" points="0 0 24 0 24 24 0 24" />
													<path
														d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z"
														id="Combined-Shape" fill="#000000" fill-rule="nonzero"
														opacity="0.3" />
													<path
														d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z"
														id="Combined-Shape" fill="#000000" />
												</g>
											</svg>
											<!--<i class="flaticon2-plus"></i>-->
										</a>
										<div
											class="dropdown-menu dropdown-menu-fit dropdown-menu-md dropdown-menu-right">
											<!--begin::Nav-->
											<ul class="kt-nav">
												<li class="kt-nav__head">
													Add anything or jump to:
													<i class="flaticon2-information" data-toggle="kt-tooltip"
														data-placement="right" title="Click to learn more..."></i>
												</li>
												<li class="kt-nav__separator"></li>
												<li class="kt-nav__item">
													<a href="#" class="kt-nav__link">
														<i class="kt-nav__link-icon flaticon2-drop"></i>
														<span class="kt-nav__link-text">Order</span>
													</a>
												</li>
												<li class="kt-nav__item">
													<a href="#" class="kt-nav__link">
														<i class="kt-nav__link-icon flaticon2-calendar-8"></i>
														<span class="kt-nav__link-text">Ticket</span>
													</a>
												</li>
												<li class="kt-nav__item">
													<a href="#" class="kt-nav__link">
														<i class="kt-nav__link-icon flaticon2-telegram-logo"></i>
														<span class="kt-nav__link-text">Goal</span>
													</a>
												</li>
												<li class="kt-nav__item">
													<a href="#" class="kt-nav__link">
														<i class="kt-nav__link-icon flaticon2-new-email"></i>
														<span class="kt-nav__link-text">Support Case</span>
														<span class="kt-nav__link-badge">
															<span
																class="kt-badge kt-badge--brand kt-badge--rounded">5</span>
														</span>
													</a>
												</li>
												<li class="kt-nav__separator"></li>
												<li class="kt-nav__foot">
													<a class="btn btn-label-brand btn-bold btn-sm" href="#">Upgrade
														plan</a>
													<a class="btn btn-clean btn-bold btn-sm kt-hidden" href="#"
														data-toggle="kt-tooltip" data-placement="right"
														title="Click to learn more...">Learn more</a>
												</li>
											</ul>
											<!--end::Nav-->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- end:: Content Head -->
					<!-- begin:: Content -->
					<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
						