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
                                    <img src="<?= base_url() ?>template/assets/media/company-logos/logo-2.png">
                                </a>
                            </div>

                            <div class="kt-login__signin">
                                <div class="kt-login__head">
                                    <h3 class="kt-login__title">Sign In To Admin</h3>
                                </div>
                                <?= $this->session->flashdata('pesan') ?>
                                <div class="kt-login__form">
                                    <form class="kt-form" method="post" action="<?= base_url('auth/registrasi') ?>">
                                        <div class="form-group">
                                            <input class="form-control" type="text" placeholder="Fullname" id="name" name="name">
                                            <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" type="text" placeholder="Email" id="email" name="email">
                                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" type="password" placeholder="Password" id="password1" name="password1">
                                            <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control form-control-last" type="password" placeholder="Confirm Password" id="password2" name="password2">
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
                            <div class="kt-login__account">
                                <span class="kt-login__account-msg">
                                    Don't have an account yet ?
                                </span>&nbsp;&nbsp;
                                <a class="small" href="<?= base_url('auth/registrasi') ?>">Create an Account!</a>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="kt-grid__item kt-grid__item--fluid kt-grid__item--center kt-grid kt-grid--ver kt-login__content" style="background-image: url(<?= base_url() ?>template/assets/media//bg/bg-4.jpg);">
                <div class="kt-login__section">
                    <div class="kt-login__block">
                        <h3 class="kt-login__title">Join Our Community</h3>
                        <div class="kt-login__desc">
                            Lorem ipsum dolor sit amet, coectetuer adipiscing
                            <br>elit sed diam nonummy et nibh euismod
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- end:: Page -->