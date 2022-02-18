<?php include('head.php'); ?>
</head>

<body>
    <?php include('header.php'); ?>
    <main id="content">

        <section class="header-style-1 inner-title text-center animated-row">
            <div class="container">
                <div class="row">
                    <div class="col-24 col-sm-12 offset-sm-6">
                        <div class="header__title">
                            <h1>White Papers</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <p><a href="#" class="btn btn-secondary">Get In Touch</a></p>
                        </div>                        
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

        <section class="section-content">
            
            <div class="container">
                <div class="header-title-2 text-center">
                    <h3 class="title">Download Our White Papers</h3>
                </div>

                <div class="card-style card-style-1 text-center">
                    <?php for ($x = 1; $x <= 6; $x++) { ?>
                    <div class="card-item col-24 col-md-12 col-lg-8">
                        <div class="card-inner">
                            <div class="card-thumb">
                                <img src="http://placehold.it/300x360" alt="" />
                            </div>
                            <div class="card-text">
                                <h4 class="title">Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit</h4>
                                <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua wuis ipsum suspendisse</p>
                            </div>
                            <div class="card-action">
                                <a href="#" class="btn btn-primary">Download</a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>

        </section>

        <section class="section-video">
            <div class="container">
                <!-- Video -->
                <video class="video-bg" autoplay="" muted="" loop="">
                    <source src="assets/img/new/BG_Fast_Video.mp4" type="video/mp4">
                    <source src="http://www.georgewpark.com/video/blurred-street.webm" type="video/webm">
                </video>
                <!-- Video -->

                <!-- Content -->
                <div class="overlay-text">
                    <h3>Take Your Business to The Next Level</h3>
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus</p>
                    <p><a href="#" class="btn btn-secondary">Get In Touch</a></p>
                </div>
                <!-- Content -->
            </div>
        </section>

        <section class="container">
            <div class="seprator-dot full-width"></div>
        </section>

        <section class="section-blog">
            <div class="container">
                <div class="header-title-1">
                    <h3 class="title">Blogs</h3>
                    <div class="slick-arrows">
                        <a href="#!" class="blog-prev slick-prev">Prev</a>
                        <a href="#!" class="blog-next slick-next">Next</a>
                    </div>
                </div>
            </div>

            <div class="slick-blogs">
                <?php for ($x = 0; $x <= 6; $x++) { ?>
                <div>
                    <div class="blog-box">
                        <div class="image">
                            <img src="assets/img/new/blog-img.jpg" alt="" />
                        </div>
                        <div class="text">
                            <p><span>Strategy</span> June 8, 2021</p>
                            <h4>How To Determine The Points Model For Loyalty Programs</h4>
                        </div>
                        <a href="#!" class="link-full"></a>
                    </div>
                </div>
                <?php } ?>                
            </div>

            <div class="text-center mt-5">
                <a href="#" class="btn btn-primary">View All Blogs</a>
            </div>

        </section>

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