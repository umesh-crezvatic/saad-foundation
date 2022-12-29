<?php $this->load->view("front/layout/head") ?>
<?php $this->load->view("front/layout/header"); ?>


<!--Page Header Start-->
<section class="page-header">
    <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);"></div>
    <!-- /.page-header__bg -->
    <div class="container">
        <h2>Contact</h2>
        <ul class="thm-breadcrumb list-unstyled">
            <li><a href="index.html">Home</a></li>
            <li class="color-thm-gray">/</li>
            <li><span>Contact</span></li>
        </ul>
    </div>
</section>
<!--Page Header End-->

<!--Contact page Start-->
<section class="contact-page">
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline">Contact With Us</span>
            <h2 class="section-title__title">Connect with us to make a positive change in the world.</h2>
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="contact-page__left">
                    <div class="contact-page__img">
                        <img src="assets/images/resources/contact-page-img-1.jpg" alt="">
                    </div>
                    <p class="contact-page__text">There are many variations of passages of available but the majority have suffered alteration in some form, by injected humou or randomised words even slightly believable.</p>
                    <div class="contact-page__contact-info">
                        <ul class="contact-page__contact-list list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="icon-chat"></span>
                                </div>
                                <div class="text">
                                    <p>Call Anytime</p>
                                    <a href="tel:+91-8082054301">+91-8082054301</a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-message"></span>
                                </div>
                                <div class="text">
                                    <p>Send Email</p>
                                    <a href="mailto:help@saadfoundation">help@saadfoundation</a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-address"></span>
                                </div>
                                <div class="text">
                                    <p>Visit Office</p>
                                    <h5>R.No 05,Building No:-11A, -400024</h5>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="contact-page__form">
                    <form action="assets/inc/sendemail.php" class="contact-page__main-form contact-form-validated">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="contact-page__input-box">
                                    <input type="text" placeholder="Your name" name="name">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="contact-page__input-box">
                                    <input type="email" placeholder="Email address" name="email">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="contact-page__input-box">
                                    <input type="text" placeholder="Subject" name="subject">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="contact-page__input-box">
                                    <input type="text" placeholder="Phone Number" name="phone">
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="contact-page__input-box">
                                    <textarea name="message" placeholder="Write message"></textarea>
                                </div>
                                <button type="submit" class="thm-btn contact-page__btn"><i class="fas fa-arrow-circle-right"></i>Send a Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Contact page End-->

<!--Contact Page Google Map Start-->
<section class="contact-page-google-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd" class="contact-page-google-map__one" allowfullscreen></iframe>

</section>
<!--Contact Page Google Map End-->

<!--Become Volunteer Start-->
<section class="become-volunteer">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="become-volunteer__inner">
                    <div class="become-volunteer__left">
                        <h2>Join your hand with us for <br> a better life and future</h2>
                        <div class="become-volunteer__big-text">
                            <h2>Become a Volunteers</h2>
                        </div>
                    </div>
                    <div class="become-volunteer__btn-box">
                        <a href="#" class="become-volunteer__btn thm-btn"><i class="fas fa-arrow-circle-right"></i>Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Become Volunteer End-->




<?php $this->load->view('front/layout/footer'); ?>
<?php $this->load->view('front/layout/script'); ?>