<?php $this->load->view("front/layout/head") ?>
<?php $this->load->view("front/layout/header"); ?>
<section class="main-slider">
    <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
    "effect": "fade",
     "pagination": {
        "el": "#main-slider-pagination",
        "type": "bullets",
        "clickable": true
      },
    "navigation": {
        "nextEl": "#main-slider__swiper-button-next",
        "prevEl": "#main-slider__swiper-button-prev"
    },
    "autoplay": {
        "delay": 5000
    }}'>
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="image-layer" style="background-image: url(assets/images/backgrounds/main-slider-1-1.jpg);">
                </div>
                <div class="image-layer-overlay"></div>
                <!-- /.image-layer -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="main-slider__content">
                                <p>Helping Them Today</p>
                                <h2>Help the Poor <br> in Need</h2>
                                <a href="#" class="thm-btn"><i class="fas fa-arrow-circle-right"></i>Learn
                                    More</a>
                                <div class="main-slider__shape-1 zoom-fade">
                                    <img src="<?php echo  base_url() ?>assets/images/shapes/main-slider-1-shape-1.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="image-layer" style="background-image: url(assets/images/backgrounds/main-slider-2-1.jpg);">
                </div>
                <div class="image-layer-overlay"></div>
                <!-- /.image-layer -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="main-slider__content">
                                <p>Helping Them Today</p>
                                <h2>Help the Poor <br> in Need</h2>
                                <a href="#" class="thm-btn"><i class="fas fa-arrow-circle-right"></i>Learn
                                    More</a>
                                <div class="main-slider__shape-1 zoom-fade">
                                    <img src="<?php echo  base_url() ?>assets/images/shapes/main-slider-1-shape-1.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="image-layer" style="background-image: url(assets/images/backgrounds/main-slider-3-1.jpg);">
                </div>
                <div class="image-layer-overlay"></div>
                <!-- /.image-layer -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="main-slider__content">
                                <p>Helping Them Today</p>
                                <h2>Help the Poor <br> in Need</h2>
                                <a href="#" class="thm-btn"><i class="fas fa-arrow-circle-right"></i>Learn
                                    More</a>
                                <div class="main-slider__shape-1 zoom-fade">
                                    <img src="<?php echo  base_url() ?>assets/images/shapes/main-slider-1-shape-1.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-slider__counter">
            <ul class="main-slider__counter-box list-unstyled">
                <li>
                    <h3 class="main-sldier__counter-digit">4390</h3>
                    <span class="main-slider__counter-text">Volunteers are Available</span>
                </li>
                <li>
                    <h3 class="main-sldier__counter-digit">8900</h3>
                    <span class="main-slider__counter-text">Funds Raised by People</span>
                </li>
            </ul>
        </div>
        <!-- If we need navigation buttons -->
        <div class="swiper-pagination" id="main-slider-pagination"></div>
        <div class="main-slider__nav">
            <div class="swiper-button-prev" id="main-slider__swiper-button-next"><i class="icon-right-arrow icon-left-arrow"></i>
            </div>
            <div class="swiper-button-next" id="main-slider__swiper-button-prev"><i class="icon-right-arrow"></i>
            </div>
        </div>
    </div>
</section>
<!--Welcome One Start-->
<section class="welcome-one">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="welcome-one__left">
                    <div class="welcome-one__img-box">
                        <img src="<?php echo  base_url() ?>assets/images/resources/welcome-one-img-1.jpg" alt="">
                        <div class="welcome-one__img-box-2">
                            <img src="<?php echo  base_url() ?>assets/images/resources/welcome-one-img-2.jpg" alt="">
                        </div>
                        <h2 class="welcome-one__bottom-text">Helping Today</h2>
                        <div class="welcome-one__heart-icon">
                            <img src="<?php echo  base_url() ?>assets/images/resources/welcome-one-heart-icon.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="welcome-one__right">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">Welcome to Saad Foundation</span>
                        <h2 class="section-title__title">Helping each other and growth of social consciousness.</h2>
                    </div>

                    <div class="read_more_content">
                        <p class="read_more_text active">
                            SAAD Foundation is a not-for-profit social development organisation registered under the Maharashtra Public Charitable Trust Act 1950 and the Societies Registration Act 1860 in 2011. SAAD had been working in the urban slums of Mumbai and its suburbs before its inception. The founders are composed of both grassroots activists and trained professionals in social work. This amalgamation gives SAAD the ability to look at issues more passionately and also analyse and intervene in them professionally and scientifically. The SAAD Foundation has been collaborating closely with various development organisations and corporations in the process of empowering urban slum dwellers as well as the rural poor.
                        </p>
                        <a class="read_more_button" data-val="1" href="javascript:void(0)">Read more <i class="fa fa-angle-down"></i></a>
                    </div>
                    <div class="welcome-one__our-mission-and-story">
                        <div class="welcome-one__mission-and-story-single">
                            <h3><i class="fas fa-arrow-circle-right"></i>OUR MISSION</h3>
                            <p class="welcome-one__our-mission-and-story-text">
                                Limiting obstacles to social development and growing people's engagement through emphasising group programmes and actions
                            </p>
                        </div>
                        <div class="welcome-one__mission-and-story-single">
                            <h3><i class="fas fa-arrow-circle-right"></i>GET INVOLVED</h3>
                            <p class="welcome-one__our-mission-and-story-text">
                                Come be a part of the change and help us raise the underprivileged above the bar, giving millions of people a reason to smile and a ray of hope for a better life. 
                            </p>
                        </div>
                    </div>

                    <a href="<?php echo base_url() ?>about" class="welcome-one__btn thm-btn"><i class="fas fa-arrow-circle-right"></i>Read More</a>
                </div>
            </div>
            <div class="col-12">
                <div class="welcome-one__progress d-flex flex-wrap">
                    <div class="welcome-one__progress-single col-12 col-sm-12 col-md-6 p-2">
                        <h4 class="welcome-one__progress-title">Education</h4>
                        <div class="bar">
                            <div class="bar-inner count-bar" data-percent="83%">
                                <div class="count-text">83%</div>
                            </div>
                        </div>
                    </div>
                    <div class="welcome-one__progress-single col-12 col-sm-12 col-md-6 p-2">
                        <h4 class="welcome-one__progress-title">Health</h4>
                        <div class="bar">
                            <div class="bar-inner count-bar" data-percent="92%">
                                <div class="count-text">92%</div>
                            </div>
                        </div>
                    </div>
                    <div class="welcome-one__progress-single col-12 col-sm-12 col-md-6 p-2">
                        <h4 class="welcome-one__progress-title">Women empowerment </h4>
                        <div class="bar">
                            <div class="bar-inner count-bar" data-percent="80%">
                                <div class="count-text">80%</div>
                            </div>
                        </div>
                    </div>
                    <div class="welcome-one__progress-single col-12 col-sm-12 col-md-6 p-2">
                        <h4 class="welcome-one__progress-title">Rural Development</h4>
                        <div class="bar">
                            <div class="bar-inner count-bar" data-percent="88%">
                                <div class="count-text">88%</div>
                            </div>
                        </div>
                    </div>
                    <div class="welcome-one__progress-single col-12 col-sm-12 col-md-6 p-2">
                        <h4 class="welcome-one__progress-title">Environment Sustainability</h4>
                        <div class="bar">
                            <div class="bar-inner count-bar" data-percent="78%">
                                <div class="count-text">78%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Welcome One End-->
<!--Causes One Start-->
<section class="causes-one">
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline">Our Project</span>
            <h2 class="section-title__title">Your support makes our <br> project a reality.</h2>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="causes-one__carousel owl-theme owl-carousel">
                    <div class="causes-one__single wow fadeInLeft" data-wow-duration="1500ms">
                        <div class="causes-one__img">
                            <div class="causes-one__img-box">
                                <img src="<?php echo  base_url() ?>assets/images/resources/causes-one-img-1.jpg" alt="">
                                <a href="<?php echo base_url() ?>project/drushti">
                                    <i class="fa fa-plus"></i>
                                </a>
                            </div>
                            <div class="causes-one__category">
                                <span>Medical</span>
                            </div>
                        </div>
                        <div class="causes-one__content">
                            <h3 class="causes-one__title">
                                <a href="<?php echo base_url() ?>project/drushti">Project – Drushti</a>
                            </h3>
                            <p class="causes-one__text">
                                Since September 2013, the SAAD Foundation has been working on a project called 'DRUSHTI.' It is being implemented in collaboration with a number of non-profit organisations and healthcare providers. ...
                            </p>
                        </div>
                        <div class="causes-one__progress">
                            <div class="bar">
                                <div class="bar-inner count-bar" data-percent="95%">
                                    <div class="count-text">95%</div>
                                </div>
                            </div>
                            <div class="causes-one__goals">
                                <p><span>₹29,270</span> Raised</p>
                                <p><span>₹30,000</span> Goal</p>
                            </div>
                        </div>
                    </div>
                    <div class="causes-one__single wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                        <div class="causes-one__img">
                            <div class="causes-one__img-box">
                                <img src="<?php echo  base_url() ?>assets/images/resources/causes-one-img-2.jpg" alt="">
                                <a href="<?php echo base_url() ?>project/aarogya">
                                    <i class="fa fa-plus"></i>
                                </a>
                            </div>
                            <div class="causes-one__category">
                                <span>Medical</span>
                            </div>
                        </div>
                        <div class="causes-one__content">
                            <h3 class="causes-one__title">
                                <a href="<?php echo base_url() ?>project/aarogya">Project- Aarogya</a>
                            </h3>
                            <p class="causes-one__text">
                                General Health Check-up Camps are one of the strategies used by the SAAD Foundation to raise health awareness in Mumbai's urban slums. It is one of All Cargo Logistics Pvt Ltd's CSR initiatives...
                            </p>
                        </div>
                        <div class="causes-one__progress">
                            <div class="bar">
                                <div class="bar-inner count-bar" data-percent="85%">
                                    <div class="count-text">85%</div>
                                </div>
                            </div>
                            <div class="causes-one__goals">
                                <p><span>₹28,000</span> Raised</p>
                                <p><span>₹30,000</span> Goal</p>
                            </div>
                        </div>
                    </div>
                    <div class="causes-one__single wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="200ms">
                        <div class="causes-one__img">
                            <div class="causes-one__img-box">
                                <img src="<?php echo  base_url() ?>assets/images/resources/causes-one-img-3.jpg" alt="">
                                <a href="<?php echo base_url() ?>project/manav">
                                    <i class="fa fa-plus"></i>
                                </a>
                            </div>
                            <div class="causes-one__category">
                                <span>Medical</span>
                            </div>
                        </div>
                        <div class="causes-one__content">
                            <h3 class="causes-one__title">
                                <a href="<?php echo base_url() ?>project/manav">Project- Manav Children Home</a>
                            </h3>
                            <p class="causes-one__text">
                                SAAD foundation is not for profit organization working for wellbeing of underprivileged children and women. SAAD started open shelter home for homeless children...
                            </p>
                        </div>
                        <div class="causes-one__progress">
                            <div class="bar">
                                <div class="bar-inner count-bar" data-percent="95%">
                                    <div class="count-text">95%</div>
                                </div>
                            </div>
                            <div class="causes-one__goals">
                                <p><span>₹29,000</span> Raised</p>
                                <p><span>₹30,000</span> Goal</p>
                            </div>
                        </div>
                    </div>
                    <div class="causes-one__single wow fadeInLeft" data-wow-duration="1500ms">
                        <div class="causes-one__img">
                            <div class="causes-one__img-box">
                                <img src="<?php echo  base_url() ?>assets/images/resources/causes-one-img-1.jpg" alt="">
                                <a href="<?php echo base_url() ?>project/sabla">
                                    <i class="fa fa-plus"></i>
                                </a>
                            </div>
                            <div class="causes-one__category">
                                <span>Medical</span>
                            </div>
                        </div>
                        <div class="causes-one__content">
                            <h3 class="causes-one__title">
                                <a href="<?php echo base_url() ?>project/sabla">Project – SABLA (Adolescent Health and Women)</a>
                            </h3>
                            <p class="causes-one__text">
                                India has the largest adolescent population in the world, 253 million, and every fifth person is between 10 to 19 years. India stands to benefit socially...
                            </p>
                        </div>
                        <div class="causes-one__progress">
                            <div class="bar">
                                <div class="bar-inner count-bar" data-percent="77%">
                                    <div class="count-text">77%</div>
                                </div>
                            </div>
                            <div class="causes-one__goals">
                                <p><span>₹25,600</span> Raised</p>
                                <p><span>₹30,000</span> Goal</p>
                            </div>
                        </div>
                    </div>
                    <div class="causes-one__single wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                        <div class="causes-one__img">
                            <div class="causes-one__img-box">
                                <img src="<?php echo  base_url() ?>assets/images/resources/causes-one-img-2.jpg" alt="">
                                <a href="<?php echo base_url() ?>project/jagruti">
                                    <i class="fa fa-plus"></i>
                                </a>
                            </div>
                            <div class="causes-one__category">
                                <span>Medical</span>
                            </div>
                        </div>
                        <div class="causes-one__content">
                            <h3 class="causes-one__title">
                                <a href="<?php echo base_url() ?>project/jagruti">Project- Jan Jagruti Abhiyan</a>
                            </h3>
                            <p class="causes-one__text">
                                The Locations identified by SAAD Foundation are more prone to the Electrocution accidents nearby electrical towers and transmission wires. Most of the homes in areas are under...
                            </p>
                        </div>
                        <div class="causes-one__progress">
                            <div class="bar">
                                <div class="bar-inner count-bar" data-percent="88%">
                                    <div class="count-text">88%</div>
                                </div>
                            </div>
                            <div class="causes-one__goals">
                                <p><span>₹27,770</span> Raised</p>
                                <p><span>₹30,000</span> Goal</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Causes One End-->
<!--Join One Start-->
<section class="join-one">
    <div class="join-one-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%" style="background-image: url(assets/images/backgrounds/join-one-bg.jpg)"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="join-one__inner">
                    <h2 class="join-one__title">Join our community of changemakers<br>and help create a better world for all.</h2>
                    <a href="#" class="join-one__btn thm-btn"><i class="fas fa-arrow-circle-right"></i>Join Community</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Join One End-->
<!--Three Boxes Start-->
<section class="three-boxes">
    <div class="container-box">
        <div class="row">
            <div class="col-xl-3">
                <!--Three Boxes Single-->
                <div class="three-boxes__single three-boxes__single-item-four">
                    <div class="three-boxes__single-bg" style="background-image: url(assets/images/resources/three-boxes-img-1.jpg)"></div>
                    <div class="three-boxes__content">
                        <div class="three-boxes__icon">
                            <span class="icon-health-check"></span>
                        </div>
                        <div class="three-boxes__text-box">
                            <h2>MAKE A DONATION</h2>
                            <p class="three-boxes__text">
                                It's not just a matter of contributing. It's all about improving things.
                            </p>
                            <a href="#" class="three-boxes__btn"><i class="fa fa-heart"></i>Donate</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3">
                <!--Three Boxes Single-->
                <div class="three-boxes__single three-boxes__single-item-two">
                    <div class="three-boxes__single-bg" style="background-image: url(assets/images/resources/three-boxes-img-1.jpg)"></div>
                    <div class="three-boxes__content">
                        <div class="three-boxes__icon">
                            <span><img src="<?php echo base_url() ?>assets/images/volenteer.svg" alt="image"></span>
                        </div>
                        <div class="three-boxes__text-box">
                            <h2>VOLUNTEER</h2>
                            <p class="three-boxes__text">
                                Come join us and be a part of the change that will inspire millions to support us for every social cause we are fighting against.
                            </p>
                            <a href="#" class="three-boxes__btn"><i class="fa fa-heart"></i>Get Involved Today</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3">
                <!--Three Boxes Single-->
                <div class="three-boxes__single">
                    <div class="three-boxes__single-bg" style="background-image: url(assets/images/resources/three-boxes-img-1.jpg)"></div>
                    <div class="three-boxes__content">
                        <div class="three-boxes__icon">
                            <span><img src="<?php echo base_url() ?>assets/images/sponsor.svg" alt="image"></span>
                        </div>
                        <div class="three-boxes__text-box">
                            <h2>SPONSOR A CHILD</h2>
                            <p class="three-boxes__text">
                                It's not the donation that matters it's all about taking a stand and helping us create opportunities for an unprivileged poor child to live a happier life they deserve.
                            </p>
                            <a href="#" class="three-boxes__btn"><i class="fa fa-heart"></i>Get Involved Today</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3">
                <!--Three Boxes Single-->
                <div class="three-boxes__single three-boxes__single-item-three">
                    <div class="three-boxes__single-bg" style="background-image: url(assets/images/resources/three-boxes-img-1.jpg)"></div>
                    <div class="three-boxes__content">
                        <div class="three-boxes__icon">
                            <span><img src="<?php echo base_url() ?>assets/images/support.svg" alt="image"></span>
                        </div>
                        <div class="three-boxes__text-box">
                            <h2>CORPORATE SUPPORT</h2>
                            <p class="three-boxes__text">
                                The creation of a strong company and the development of a healthier society are not opposing goals – both are vital to long-term success. The emphasis on corporate social responsibility by more and more corporations symbolizes the perception of prosperity in an inclusive society.
                            </p>
                            <a href="#" class="three-boxes__btn"><i class="fa fa-heart"></i>Get Involved Today</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Three Boxes End-->
<!--Helping One Start-->
<section class="helping-one">
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline">Donation</span>
            <h2 class="section-title__title">Supporting a better tomorrow, <br>one donation at a time.</h2>
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="helping-one__left">
                    <h3 class="helping-one__title">We’re Helping Today. Helping Tommorow</h3>
                    <p class="helping-one__text">
                        Thank you for considering making a donation to our website. Your support is greatly appreciated and will help us to continue providing valuable resources and services to our community.
                    </p>
                    <p class="helping-one__text">
                        Here are some reasons why you should consider making a donation:
                    </p>
                    <ul class="helping-one__left-list list-unstyled">
                        <li>
                            <div class="helping-one__left-icon">
                                <i class="fas fa-arrow-circle-right"></i>
                            </div>
                            <div class="helping-one__left-text">
                                <p>By donating, you are helping to support our mission and make a positive impact in the world.</p>
                            </div>
                        </li>
                        <li>
                            <div class="helping-one__left-icon">
                                <i class="fas fa-arrow-circle-right"></i>
                            </div>
                            <div class="helping-one__left-text">
                                <p>Your donation will help us to continue providing high-quality resources and services to our community, including educational materials, support groups, and other resources that help people lead healthier and more fulfilling lives</p>
                            </div>
                        </li>
                        <li>
                            <div class="helping-one__left-icon">
                                <i class="fas fa-arrow-circle-right"></i>
                            </div>
                            <div class="helping-one__left-text">
                                <p>Your support will allow us to expand our reach and help even more people. With your donation, we can develop new programs and initiatives that will benefit even more people.</p>
                            </div>
                        </li>

                        <li>
                            <div class="helping-one__left-icon">
                                <i class="fas fa-arrow-circle-right"></i>
                            </div>
                            <div class="helping-one__left-text">
                                <p>Every donation, no matter how small, makes a difference and is greatly appreciated. Every little bit helps us to achieve our goals and make a positive impact in the world.
                                </p>
                            </div>
                        </li>
                    </ul>
                    <p class="helping-one__text">
                        Thank you for considering making a donation to our website. Your support is greatly appreciated and will make a real difference in the lives of others.
                    </p>
                    <div class="helping-one__left-img">
                        <img src="<?php echo  base_url() ?>assets/images/resources/helping-one-left-img.jpg" alt="">
                        <div class="helping-one__left-icon-box">
                            <span class="icon-heart"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="helping-one__right">
                    <form action="" class="helping-one__right-form">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="helping-one__right-input-box">
                                    <input type="text" name="amount" placeholder="Enter Donation Amount">
                                    <div class="helping-one__right-dolar-icon">
                                        <span>₹</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <input type="text" name="name" placeholder="Your Name">
                            </div>
                            <div class="col-lg-6">
                                <input type="email" name="email" placeholder="Email Address">
                            </div>
                            <div class="col-lg-12">
                                <input type="text" name="phone" placeholder="Phone Number">
                            </div>
                            <div class="col-lg-12">
                                <textarea name="message" placeholder="Write Message"></textarea>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="thm-btn helping-one__right-btn"><i class="fas fa-arrow-circle-right"></i>Continue Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Helping One End-->
<!--Gallery One Start-->
<section class="gallery-one">
    <div class="gallery-one__container-box clearfix">
        <div class="gallery-one__carousel owl-theme owl-carousel">
            <!--Gallery One Single-->
            <div class="gallery-one__single">
                <div class="gallery-one__img-box">
                    <img src="<?php echo  base_url() ?>assets/images/gallery/gallery-1-1.jpg" alt="">
                    <div class="gallery-one__hover-content-box">
                        <h2>Child Education</h2>
                        <p>Charity</p>
                    </div>
                </div>
            </div>
            <!--Gallery One Single-->
            <div class="gallery-one__single">
                <div class="gallery-one__img-box">
                    <img src="<?php echo  base_url() ?>assets/images/gallery/gallery-1-2.jpg" alt="">
                    <div class="gallery-one__hover-content-box">
                        <h2>Child Education</h2>
                        <p>Charity</p>
                    </div>
                </div>
            </div>
            <!--Gallery One Single-->
            <div class="gallery-one__single">
                <div class="gallery-one__img-box">
                    <img src="<?php echo  base_url() ?>assets/images/gallery/gallery-1-3.jpg" alt="">
                    <div class="gallery-one__hover-content-box">
                        <h2>Child Education</h2>
                        <p>Charity</p>
                    </div>
                </div>
            </div>
            <!--Gallery One Single-->
            <div class="gallery-one__single">
                <div class="gallery-one__img-box">
                    <img src="<?php echo  base_url() ?>assets/images/gallery/gallery-1-4.jpg" alt="">
                    <div class="gallery-one__hover-content-box">
                        <h2>Child Education</h2>
                        <p>Charity</p>
                    </div>
                </div>
            </div>
            <!--Gallery One Single-->
            <div class="gallery-one__single">
                <div class="gallery-one__img-box">
                    <img src="<?php echo  base_url() ?>assets/images/gallery/gallery-1-5.jpg" alt="">
                    <div class="gallery-one__hover-content-box">
                        <h2>Child Education</h2>
                        <p>Charity</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Gallery One End-->
<!--Testimonial One Start-->
<section class="testimonial-one">
    <div class="testimonial-one-bg" style="background-image: url(assets/images/backgrounds/testimonial-1-bg.jpg)"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-4">
                <div class="testimonial-one__left">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">Our Testimonials</span>
                        <h2 class="section-title__title">What they’re talking about charity</h2>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="testimonial-one__right">
                    <div class="testimonial-one__carousel owl-theme owl-carousel">
                        <!--Testimonial One Single-->
                        <div class="testimonial-one__single">
                            <p class="testimonial-one__text">Lorem ipsum is simply free text dolor sit amet,
                                consectetur notted adipisicing elit sed do eiusmod tempor incididunt ut labore
                                et dolore magna aliqua.</p>
                            <div class="testimonial-one__client-info">
                                <div class="testimonial-one__client-img">
                                    <img src="<?php echo  base_url() ?>assets/images/testimonial/testimonial-1-img-1.png" alt="">
                                    <div class="testimonial-one__quote">
                                    </div>
                                </div>
                                <div class="testimonial-one__client-name">
                                    <h3>Kevin Martin</h3>
                                    <p>Volunteer</p>
                                </div>
                            </div>
                        </div>
                        <!--Testimonial One Single-->
                        <div class="testimonial-one__single">
                            <p class="testimonial-one__text">Lorem ipsum is simply free text dolor sit amet,
                                consectetur notted adipisicing elit sed do eiusmod tempor incididunt ut labore
                                et dolore magna aliqua.</p>
                            <div class="testimonial-one__client-info">
                                <div class="testimonial-one__client-img">
                                    <img src="<?php echo  base_url() ?>assets/images/testimonial/testimonial-1-img-2.png" alt="">
                                    <div class="testimonial-one__quote">
                                    </div>
                                </div>
                                <div class="testimonial-one__client-name">
                                    <h3>Jessica Brown</h3>
                                    <p>Volunteer</p>
                                </div>
                            </div>
                        </div>
                        <!--Testimonial One Single-->
                        <div class="testimonial-one__single">
                            <p class="testimonial-one__text">Lorem ipsum is simply free text dolor sit amet,
                                consectetur notted adipisicing elit sed do eiusmod tempor incididunt ut labore
                                et dolore magna aliqua.</p>
                            <div class="testimonial-one__client-info">
                                <div class="testimonial-one__client-img">
                                    <img src="<?php echo  base_url() ?>assets/images/testimonial/testimonial-1-img-1.png" alt="">
                                    <div class="testimonial-one__quote">
                                    </div>
                                </div>
                                <div class="testimonial-one__client-name">
                                    <h3>Jessica Brown</h3>
                                    <p>Volunteer</p>
                                </div>
                            </div>
                        </div>
                        <!--Testimonial One Single-->
                        <div class="testimonial-one__single">
                            <p class="testimonial-one__text">Lorem ipsum is simply free text dolor sit amet,
                                consectetur notted adipisicing elit sed do eiusmod tempor incididunt ut labore
                                et dolore magna aliqua.</p>
                            <div class="testimonial-one__client-info">
                                <div class="testimonial-one__client-img">
                                    <img src="<?php echo  base_url() ?>assets/images/testimonial/testimonial-1-img-2.png" alt="">
                                    <div class="testimonial-one__quote">
                                    </div>
                                </div>
                                <div class="testimonial-one__client-name">
                                    <h3>Kevin Martin</h3>
                                    <p>Volunteer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Testimonial One End-->
<!--Help Them Start-->
<section class="help-them">
    <div class="help-them-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%" style="background-image: url(assets/images/backgrounds/help-them-bg.jpg)"></div>
    <div class="container">
        <div class="help-them__top">
            <div class="row">
                <div class="col-xl-8 col-lg-8">
                    <div class="help-them__top-content">
                        <h2 class="help-them__top-content-title">Help them whenever they are in need</h2>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="help-them__top-video-box">
                        <a href="https://www.youtube.com/watch?v=i9E_Blai8vk" class="help-them__top-video-btn video-popup"><i class="fa fa-play"></i></a>
                        <p class="help-them__top-video-text">Watch the Video</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="help-them__bottom">
            <div class="row">
                <div class="col-xl-4 col-lg-4">
                    <!--Help Them Single-->
                    <div class="help-them__single">
                        <div class="help-them__icon">
                            <span class="icon-charity"></span>
                        </div>
                        <div class="help-them__text">
                            <h3>Become a Volunteer</h3>
                            <p>There are many variations of but the majority have simply free text suffered.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <!--Help Them Single-->
                    <div class="help-them__single">
                        <div class="help-them__icon">
                            <span class="icon-generous"></span>
                        </div>
                        <div class="help-them__text">
                            <h3>Quick Fundraising</h3>
                            <p>There are many variations of but the majority have simply free text suffered.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <!--Help Them Single-->
                    <div class="help-them__single">
                        <div class="help-them__icon">
                            <span class="icon-fundraiser"></span>
                        </div>
                        <div class="help-them__text">
                            <h3>Start Donating</h3>
                            <p>There are many variations of but the majority have simply free text suffered.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Help Them End-->
<section class="news-one">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8">
                <div class="section-title text-left">
                    <span class="section-title__tagline">Get Daily Updates</span>
                    <h2 class="section-title__title">Latest news & articles directly <br> coming from the blog
                    </h2>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4">
                <div class="news-one__button-box">
                    <a href="#" class="news-one__btn thm-btn"><i class="fas fa-arrow-circle-right"></i>View
                        More</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="news-one__left">
                    <div class="news-one__img">
                        <img src="<?php echo  base_url() ?>assets/images/blog/news-one-img-1.jpg" alt="">
                        <a href="news-details.html">
                            <i class="fa fa-plus"></i>
                        </a>
                    </div>
                    <div class="news-one__bottom">
                        <ul class="list-unstyled news-one__meta">
                            <li>20 Jan, 2021</li>
                            <li><span>/</span></li>
                            <li><a href="#">2 Comments</a></li>
                        </ul>
                        <h3 class="news-one__title">
                            <a href="news-details.html">Donation is Hope for Poor Childrens in Africa</a>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="news-one__right">
                    <div class="news-one__right-single">
                        <div class="news-one__right-img">
                            <img src="<?php echo  base_url() ?>assets/images/blog/news-one-right-img-1.jpg" alt="">
                            <a href="news-details.html">
                                <i class="fa fa-plus"></i>
                            </a>
                        </div>
                        <div class="news-one__right-content">
                            <ul class="list-unstyled news-one__right-meta">
                                <li>20 Jan, 2021</li>
                                <li><span>/</span></li>
                                <li><a href="#">2 Comments</a></li>
                            </ul>
                            <h3 class="news-one__right-title">
                                <a href="news-details.html">How Does Malnutrition Affect Children?</a>
                            </h3>
                        </div>
                    </div>
                    <div class="news-one__right-single">
                        <div class="news-one__right-img">
                            <img src="<?php echo  base_url() ?>assets/images/blog/news-one-right-img-2.jpg" alt="">
                            <a href="news-details.html">
                                <i class="fa fa-plus"></i>
                            </a>
                        </div>
                        <div class="news-one__right-content">
                            <ul class="list-unstyled news-one__right-meta">
                                <li>20 Jan, 2021</li>
                                <li><span>/</span></li>
                                <li><a href="#">2 Comments</a></li>
                            </ul>
                            <h3 class="news-one__right-title">
                                <a href="news-details.html">Capitalize on low hanging fruit to identify</a>
                            </h3>
                        </div>
                    </div>
                    <div class="news-one__right-single">
                        <div class="news-one__right-img">
                            <img src="<?php echo  base_url() ?>assets/images/blog/news-one-right-img-3.jpg" alt="">
                            <a href="news-details.html">
                                <i class="fa fa-plus"></i>
                            </a>
                        </div>
                        <div class="news-one__right-content">
                            <ul class="list-unstyled news-one__right-meta">
                                <li>20 Jan, 2021</li>
                                <li><span>/</span></li>
                                <li><a href="#">2 Comments</a></li>
                            </ul>
                            <h3 class="news-one__right-title">
                                <a href="news-details.html">Override the digital divide with additional</a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Brand One Start-->
<section class="brand-one">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="brand-one__carousel owl-theme owl-carousel">
                    <!--Brand One Single-->
                    <div class="brand-one__single">
                        <div class="brand-one__img">
                            <img src="<?php echo  base_url() ?>assets/images/company/Allcargo-Logistics.png" alt="Allcargo-Logistics">
                        </div>
                    </div>
                    <!--Brand One Single-->
                    <div class="brand-one__single">
                        <div class="brand-one__img">
                            <img src="<?php echo  base_url() ?>assets/images/company/antony-waste.png" alt="antony-waste">
                        </div>
                    </div>
                    <!--Brand One Single-->
                    <div class="brand-one__single">
                        <div class="brand-one__img">
                            <img src="<?php echo  base_url() ?>assets/images/company/DY-Patil.png" alt="DY-Patil">
                        </div>
                    </div>
                    <!--Brand One Single-->
                    <div class="brand-one__single">
                        <div class="brand-one__img">
                            <img src="<?php echo  base_url() ?>assets/images/company/IIFL-logo.png" alt="IIFL-logo">
                        </div>
                    </div>
                    <!--Brand One Single-->
                    <div class="brand-one__single">
                        <div class="brand-one__img">
                            <img src="<?php echo  base_url() ?>assets/images/company/laxmi.png" alt="laxmi">
                        </div>
                    </div>
                    <!--Brand One Single-->
                    <div class="brand-one__single">
                        <div class="brand-one__img">
                            <img src="<?php echo  base_url() ?>assets/images/company/mahatme.png" alt="mahatme">
                        </div>
                    </div>
                    <!--Brand One Single-->
                    <div class="brand-one__single">
                        <div class="brand-one__img">
                            <img src="<?php echo  base_url() ?>assets/images/company/mohini-logo.png" alt="mohini-logo">
                        </div>
                    </div>
                    <!--Brand One Single-->
                    <div class="brand-one__single">
                        <div class="brand-one__img">
                            <img src="<?php echo  base_url() ?>assets/images/company/Tata-Power.png" alt="Tata-Power">
                        </div>
                    </div>
                    <!--Brand One Single-->
                    <div class="brand-one__single">
                        <div class="brand-one__img">
                            <img src="<?php echo  base_url() ?>assets/images/company/terna-hospital.png" alt="terna-hospital">
                        </div>
                    </div>
                    <!--Brand One Single-->
                    <div class="brand-one__single">
                        <div class="brand-one__img">
                            <img src="<?php echo  base_url() ?>assets/images/company/adani.png" alt="adani">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!--Brand One End-->
<?php $this->load->view('front/layout/footer'); ?>
<?php $this->load->view('front/layout/script'); ?>