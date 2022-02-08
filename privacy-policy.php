<?php include('head.php'); ?>
</head>

<body>
    <?php include('header.php'); ?>
    <main id="content">

        <section class="header-style-1 inner-title animated-row">
            <div class="container">
                <div class="row">
                    <div class="col-24 col-lg-10">
                        <div class="header__title">
                            <h1>Privacy Policy</h1>
                            <p>This privacy notice discloses the privacy practices for FasTrax POS, LLC doing business as FTx Solutions. FTx Solutions operates the Loyal-n-Save website as well as the Loyal-n-Save app. The Loyal-n-Save website and app (“Service,” “Us,” or “Our”) is intended for use as is.</p>
                            <p><a href="#" class="btn btn-secondary">Get In Touch</a></p>
                        </div>
                    </div>
                    <div class="col-24 col-lg-12 offset-lg-2 text-center">
                        <img src="assets/img/new/features.png" alt="" class="side-img" />
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

        <section class="section-content section-static">
            <div class="container">
                <div class="row">
                    <div class="col-24 col-xl-24">
                        <div class="last-updated">Last Updated On <strong>18th October 2019</strong></div>
                        <h4>Children’s Privacy</h4>
                        <p>Children under the age of 13 are not permitted to use the Service. We do not knowingly collect personally identifiable information from children under 13 years of age. In the event that we discover that a child under the age of 13 has provided us with personal information, we delete it immediately from our website along with any backups that exist on our servers. If you are a parent or guardian and you are aware that your child has provided us with personal information, please contact us so that we can take the necessary steps to delete the information quickly.</p>
                        <h4>Information Collection and Use</h4>
                        <p>This privacy policy is intended to inform website visitors of our policies with regard to the collection, use, and disclosure of Personal Information. Should you choose to use our Service, then you agree to the collection and use of information in compliance with this policy. The Personal Information that we collect is used for providing and improving the Service.</p>
                        <h4>Third-Party Merchants</h4>
                        <p>The Service uses third party services that will collect information used to identify you. Please read carefully the privacy policies of each third-party merchant whose loyalty program you elect to participate in. By using this Service, you must also agree to the terms set forth in their privacy policies.</p>
                        <p>The information that will be collected may include but is not limited to your first name, last name, address, cell phone number, and transaction information including merchandise purchased, purchase amounts, and rewards points earned per purchase. Your information may be used by third-party merchants to send you promotions, text messages, rewards points, coupons or other rewards.</p>
                        <h4>Links To Third-Party Websites</h4>
                        <p>Through the Loyal-n-Save website and app you may encounter ads containing links or other links to third party websites. If you click on one of these links you will be directed to that website. Loyal-n-Save does not own or operate these sites.</p>
                        <p>We provide these links as a convenience only. Loyal-n-Save does not publicly endorse these sites nor does it make any warranty of products or services available on these websites. Loyal-n-Save and all of its subsidiaries shall be held free and harmless from any content, transactions, or actions you take on a third-party site.</p>
                        <h4>Security</h4>
                        <p>We value your trust in providing us with your Personal Information, therefore we strive to use commercially acceptable means of protecting it. Even with security protocols in place, please be advised that no means of data transmission over the internet, or method of electronic storage is 100% secure and reliable, therefore we cannot guarantee its absolute security.</p>
                        <h4>Changes</h4>
                        <p>We reserve the right, at our sole discretion, to modify this privacy policy at any time. If a revision is material we will try to provide at least 30 days' notice prior to a new policy taking effect. What constitutes a material change will be determined at our sole discretion. New changes will be posted to the Loyal-n-Save website.</p>
                        <h4>Contact Us</h4>
                        <p>If you have any questions about these Terms, please contact FTx Solutions on e-mail <a href="mailto:info@loyalnsave.com">info@loyalnsave.com</a>.</p>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <?php include('footer.php'); ?>
</body>
<script>
$(document).ready(function() {

    $('.slick-client').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows: true,
        centerMode: true,
        centerPadding: '250px',
        autoplay: true,
        autoplaySpeed: 2000,
        /*infinite: false,*/
        responsive: [
            {
                breakpoint: 1600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    centerPadding: '100px',
                }
            },
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    centerMode: false,
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    centerPadding: '100px',
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    centerPadding: '50px',
                    arrows: false,
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    centerPadding: '15px',
                    arrows: false,
                }
            },
            {
                breakpoint: 376,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    centerPadding: '15px',
                    arrows: false,
                }
            }
        ]
    });

})
</script>

</html>