<?php include('head.php'); ?>
</head>

<body>
    <?php include('header.php'); ?>
    <main id="content">

        <section class="header-style-1 inner-title text-center animated-row">
            <div class="container">
                <div class="row">
                    <div class="col-24 col-lg-12 offset-lg-6">
                        <div class="mh-200"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Waves -->
        <section class="header-app inner">
            <div class="ocean">
                <div class="wave"></div>
                <div class="wave"></div>
            </div>            
        </section>
        <!-- Waves -->

        <div class="section-content blog-detail">
            <div class="container">
                <div class="row">
                    <div class="col-24 col-xl-17">
                        <div class="b-title-top">
                            <a href="#" class="b-back">Back to Release Notes</a>
                        </div>

                        <div class="b-title">
                            <h1>Release Notes - Versions 16.0.9 | Dec 1, 2021</h1>
                        </div>
                    </div>
                    <div class="col-24 col-xl-24"></div>
                    <div class="col-24 col-xl-17">
                        <div class="blog-content release-content">

                            <h3><img src="assets/img/new/rn-whats-new.png" alt="" class="icon mr-3" />What's New</h3>

                            <h5>1. New Feature</h5>
                            
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                            <p><img src="http://placehold.it/1200x600" alt="" class="release-img" /></p>

                            <h5>2. New Feature</h5>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                            <p><img src="http://placehold.it/1200x600" alt="" class="release-img" /></p>

                            <h3><img src="assets/img/new/rn-bug-fixes.png" alt="" class="icon mr-3" />Bug Fixes</h3>

                            <ul>
                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
                            </ul>

                            <h3><img src="assets/img/new/rn-improvement.png" alt="" class="icon mr-3" />Improvements</h3>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                            <ul>
                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
                            </ul>

                            <h3><img src="assets/img/new/rn-coming-soon.png" alt="" class="icon mr-3" />Coming Soon</h3>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                            <ul>
                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
                            </ul>

                            <div class="release-note-links">
                                <h4>See Also</h4>
                                <ul>
                                    <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a></li>
                                    <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a></li>
                                    <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a></li>
                                    <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-24 col-xl-6 offset-xl-1">
                        <div class="sidebar-widget">
                            <h5 class="sw-title">Category</h5>
                            <div class="sw-content">
                                <ul>
                                    <li><a href="#">Strategy <span class="counter">45</span></a></li>
                                    <li><a href="#">Loyalty<span class="counter">99</span></a></li>
                                    <li><a href="#">Gamification <span class="counter">1</span></a></li>
                                    <li><a href="#">Trends <span class="counter">10</span></a></li>
                                    <li><a href="#">Newsletter</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="sidebar-widgetads">
                            <br />
                            <br />
                            <br />
                            <br />
                            <br />
                            <br />
                            <br />
                            <div class="nav-img-download-app">
                                <h5>Download App</h5>
                                <div class="row">
                                    <div class="col-12">
                                        <a href="#"><img src="assets/img/new/nav-img-googleplay.png" alt=""></a>
                                    </div>
                                    <div class="col-12">
                                        <a href="#"><img src="assets/img/new/nav-img-appstore.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <?php include('footer.php'); ?>
</body>
<script>
$(document).ready(function() {
    
    $('.slick-blogs').slick({
        slidesToShow: 5,
        slidesToScroll: 5,
        dots: true,
        arrows: true,
        centerMode: true,
        centerPadding: '75px',
        autoplay: false,
        autoplaySpeed: 2000,
        prevArrow: $('.blog-prev'),
        nextArrow: $('.blog-next'),
        responsive: [
            {
                breakpoint: 1800,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4,                    
                }
            },
            {
                breakpoint: 1400,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4,                    
                }
            },
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    centerPadding: '20px',
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    centerPadding: '15px',
                }
            },
            {
                breakpoint: 376,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    centerPadding: '15px',
                }
            },
        ]
    });

})
</script>

</html>