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
                            <h1>Become a Merchant today</h1>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias</p>
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

        <section style="padding: 100px 0;">
            
        </section>

        <section class="section-p7">
            <div class="container">
                <div class="header-title-1">
                    <h3 class="title">Blogs</h3>
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
    $('.slick-feature').slick({
        slidesToShow: 3,
        slidesToScroll: 3,
        dots: true,
        arrows: true,
        centerMode: true,
        centerPadding: '75px',
        /*infinite: false,*/
    });

    $('.slick-client').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows: true,
        centerMode: true,
        centerPadding: '250px',
        /*infinite: false,*/
    });

    $('.slick-blogs').slick({
        slidesToShow: 5,
        slidesToScroll: 5,
        dots: true,
        arrows: true,
        centerMode: true,
        centerPadding: '75px',
        /*infinite: false,*/
    });
})
</script>

</html>