<?php include('head.php'); ?>
</head>

<body>
    <?php include('header.php'); ?>
    <main id="content">

        <section class="header-style-1 inner-title text-center animated-row">
            <div class="container">
                <div class="row">
                    <div class="col-24 col-lg-12 offset-lg-6">
                        <div class="header__title">
                            <h1>Videos</h1>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas.</p>
                            <p><a href="#!" class="btn btn-secondary" data-toggle="modal" data-target="#requestQuote">Get In Touch</a></p>
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

        <section class="section-header-video">
            <div class="container">
                <div class="row">
                    <div class="col-24 col-lg-20 offset-lg-2">
                        <a href="#!" class="video-full" data-toggle="modal" data-target="#requestQuote"><img src="http://placehold.it/1100x600" alt="" /></a>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-content">
            <div class="container">
                <div class="row">
                    <div class="col-24 col-lg-20 offset-lg-2">
                        <div class="header-title-2 text-center">
                            <h3 class="title">More from the Videos</h3>
                        </div>
                        <div class="video-lists">
                            <?php for ($x = 0; $x <= 5; $x++) { ?>
                            <div class="video-item">
                                <div class="video-inner">
                                    <div class="thumb">
                                        <img src="http://placehold.it/1100x600" alt="" />
                                    </div>
                                    <div class="info">
                                        <div class="tag">Videos</div>
                                        <h4 class="title">Build Brand Awareness with Loyal~n~Save</h4>
                                    </div>
                                    <a href="#" class="link-full"></a>
                                </div>
                            </div>
                            <?php } ?>
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