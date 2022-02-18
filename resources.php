<?php include('head.php'); ?>
</head>

<body>
    <?php include('header.php'); ?>
    <main id="content">

        <section class="header-style-1 inner-title animated-row">
            <div class="container">
                <div class="row">
                    <div class="col-24 col-sm-10">
                        <div class="header__title">
                            <h1>Resources</h1>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias</p>
                            <p><a href="#" class="btn btn-secondary">Get In Touch</a></p><br /><br />
                        </div>
                    </div>
                    <div class="col-24 col-sm-14 text-center">
                        <img src="assets/img/new/industries.png" alt="" class="side-img" />
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

                <div class="header-title-1 text-center">                    
                    <h3 class="title">Sed ut perspiciatis unde</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>

                <div class="resources-lists">
                    <div class="resources-item">
                        <div class="resources-inner text-center text-md-left">
                            <div class="row row-reverse-md align-items-center">
                                <div class="col-24 col-md-9 offset-md-1 order-1 order-md-2 text-center">
                                    <img src="http://placehold.it/250" alt="" />
                                </div>
                                <div class="col-24 col-md-14 order-2 order-md-1">
                                    <h4>Blog</h4>
                                    <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod ut enim ad minim veniam, exercitation ullamco laboris nisi ut aliquip commodo consequat.</p>
                                </div>
                            </div>
                            <p><a href="#" class="btn">View All Blog</a></p>
                        </div>
                    </div>

                    <div class="resources-item">
                        <div class="resources-inner text-center text-md-left">
                            <div class="row row-reverse-md align-items-center">
                                <div class="col-24 col-md-9 offset-md-1 order-1 order-md-2 text-center">
                                    <img src="http://placehold.it/250" alt="" />
                                </div>
                                <div class="col-24 col-md-14 order-2 order-md-1">
                                    <h4>White Papers</h4>
                                    <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod ut enim ad minim veniam, exercitation ullamco laboris nisi ut aliquip commodo consequat.</p>
                                </div>
                            </div>
                            <p><a href="#" class="btn">View All White Papers</a></p>
                        </div>
                    </div>

                    <div class="resources-item">
                        <div class="resources-inner text-center text-md-left">
                            <div class="row row-reverse-md align-items-center">
                                <div class="col-24 col-md-9 offset-md-1 order-1 order-md-2 text-center">
                                    <img src="http://placehold.it/250" alt="" />
                                </div>
                                <div class="col-24 col-md-14 order-2 order-md-1">
                                    <h4>Videos</h4>
                                    <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod ut enim ad minim veniam, exercitation ullamco laboris nisi ut aliquip commodo consequat.</p>
                                </div>
                            </div>
                            <p><a href="#" class="btn">View All Videos</a></p>
                        </div>
                    </div>

                    <div class="resources-item">
                        <div class="resources-inner text-center text-md-left">
                            <div class="row row-reverse-md align-items-center">
                                <div class="col-24 col-md-9 offset-md-1 order-1 order-md-2 text-center">
                                    <img src="http://placehold.it/250" alt="" />
                                </div>
                                <div class="col-24 col-md-14 order-2 order-md-1">
                                    <h4>Release Notes</h4>
                                    <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod ut enim ad minim veniam, exercitation ullamco laboris nisi ut aliquip commodo consequat.</p>
                                </div>
                            </div>
                            <p><a href="#" class="btn">View All Release Notes</a></p>
                        </div>
                    </div>
                </div>

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