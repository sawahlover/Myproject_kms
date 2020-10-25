<!-- begin::Page loader -->

<!-- end::Page Loader -->
<!-- begin:: Page -->
<div class="kt-grid kt-grid--ver kt-grid--root kt-page">
    <div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v6 kt-login--signin" id="kt_login">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--desktop kt-grid--ver-desktop kt-grid--hor-tablet-and-mobile">
            <div class="kt-grid__item  kt-grid__item--order-tablet-and-mobile-2  kt-grid kt-grid--hor kt-login__aside">
                <div class="kt-login__wrapper">
                    <div class="kt-login__container">
                        <div class="kt-login__body">
                            <div class="kt-login__logo">
                                <a href="#">
                                    <img src="<?= base_url() ?>template/assets/media/company-logos/fhi.ico">
                                </a>
                            </div>

                            <div class="kt-login__signin">
                                <div class="kt-login__head">
                                    <h3 class="kt-login__title">Sign In To Admin</h3>
                                </div>
                                <?= $this->session->flashdata('pesan') ?>
                                <div class="kt-login__form">
                                    <form class="kt-form" method="post" action="<?= base_url('auth/index') ?>">
                                        <div class="form-group">
                                            <input class="form-control" type="text" placeholder="Email" id="email" name="email" autocomplete="off">
                                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control form-control-last" type="password" placeholder="Password" id="password" name="password">
                                            <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>

                                        <div class="kt-login__actions">
                                            <button id="kt_login_signin_submit" class="btn btn-brand btn-pill btn-elevate">Sign In</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="kt-login__account">
                                <span class="kt-login__account-msg">
                                    Dose not have a Login
                                </span>&nbsp;&nbsp;
                                <a class="small" href="<?= base_url('auth/registrasi') ?>">please register here</a>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="kt-grid__item kt-grid__item--fluid kt-grid__item--center kt-grid kt-grid--ver kt-login__content" style="background-image: url(<?= base_url() ?>template/assets/media//bg/bg-4.jpg);">
                <div class="kt-login__section">
                    <div class="kt-login__block">
                        <h3 class="kt-login__title">&nbsp; &nbsp; Knowledge Management &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;System (KMS)</h3>
                        <div class="kt-login__desc">
                            &nbsp; &nbsp; &nbsp;is a system for applying and using knowledge management principles to typically enable employees
                            &nbsp; &nbsp; &nbsp;&nbsp; and customers to create,share and find relevant information quickly. During 2016 - 2020, LInkages
                            &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; Indonesia has produces many guideline, SOP, vedio, etc, and now you can access oll of them in this
                            &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;system

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- end:: Page -->