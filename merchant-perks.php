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
                    <div class="col-24 col-sm-14 text-center">
                        <img src="assets/img/new/merchant-perks.png" alt="" class="side-img" />
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

        <section class="section-mp1">
            <div class="container">
                <div class="header-title-2 text-center">
                    <span class="label">Loyalty Programs</span>
                    <h3 class="title">The Benefits of Merchant Perks</h3>
                </div>

                <div class="card-items">
                    <?php for ($x = 1; $x <= 3; $x++) { ?>
                    <div class="card-item">
                        <div class="card-inner text-center">
                            <div class="image">
                                <?php echo '<img src="assets/img/new/perks-benefits-'. $x .'.jpg" alt="" />'; ?>
                            </div>
                            <h4 class="title">Sed ut perspiciatis</h4>
                            <div class="description">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>

        <section class="section-mp2">
            <div class="container">
                <div class="row">
                    <div class="col-24">

                        <div class="header-title-1 text-center">
                            <h3 class="title">Register Your Store</h3>
                            <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt <br />ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>

                        <div class="step-process">                            
                            <div class="step-item step-1">
                                <div class="icon">
                                    <img src="http://placehold.it/40" alt="" />
                                </div>                        
                                <div class="text">
                                    <h4 class="title">In-Store</h4>
                                    <p>Visit a local participating store to sign-up.</p>
                                </div>
                            </div>
                            <div class="step-item step-2">
                                <div class="icon">
                                    <img src="http://placehold.it/40" alt="" />
                                </div>                        
                                <div class="text">
                                    <h4 class="title">Loyalty App</h4>
                                    <p>Download our user-friendly app and sign-up in 30 seconds.</p>
                                </div>
                            </div>
                            <div class="step-item step-3">
                                <div class="icon">
                                    <img src="http://placehold.it/40" alt="" />
                                </div>                        
                                <div class="text">
                                    <h4 class="title">Loyalty Website</h4>
                                    <p>You’re already here! Click “register” in the top right corner.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="section-mp3">
            <div class="container">
                <div class="row">
                    <div class="col-24 col-md-20 offset-md-2">

                        <div class="header-title-2 text-center">
                            <h3 class="title text-white">Advantages of Loyal-n-Save Reward Program</h3>
                        </div>

                        <div class="program-items">                            
                            <div class="program-item program-1">
                                <div class="program-inner">
                                    <div class="image">
                                        <img src="assets/img/new/reward-acquistion.png" alt="" />
                                    </div>
                                    <div class="text">
                                        <h4 class="title">New Customer <strong>Acquistion</strong></h4>
                                        <p>Loyal~n~Save not only engages your existing customers, but its unique marketing approach also introduces hundreds of new customers to your store through qualified word-of-mouth referrals.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="program-item program-2">
                                <div class="program-inner">
                                    <div class="image">
                                        <img src="assets/img/new/reward-retention.png" alt="" />
                                    </div>
                                    <div class="text">
                                        <h4 class="title">Customer <strong>Retention</strong></h4>
                                        <p>With Loyal~n~Save, you can easily keep track of your customers and campaigns through reports that track what product/service and customer group is generating more profit for your business and when it's happening.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="program-item program-3">
                                <div class="program-inner">
                                    <div class="image">
                                        <img src="assets/img/new/reward-engagement.png" alt="" />
                                    </div>
                                    <div class="text">
                                        <h4 class="title">New Customer <strong>Engagement</strong></h4>
                                        <p>Loyal~n~Save gives you the ability to manage and target personalized offers and notifications across all channels: including mobile, web, email, and social media for optimal customer and community engagement.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="section-content pt-0">
            <div class="container">

                <div class="row">
                    <div class="col-24 col-md-18 offset-md-3">
                        <div class="header-title-1 text-center">
                            <h3 class="title">We Have the Features You Need</h3>
                            <p class="description">Our team of application development experts will work hard to work out any bugs found by your tech team during installation to ensure seamless integration with the Loyal~n~Save API into your POS system. Choose the Loyal~n~Save features you want to participate in and none of the ones you don't.</p>
                        </div>
                    </div>
                    <div class="col-24 col-md-22 offset-md-1">
                        
                        <div class="card-feature">
                            <div class="cf-item">
                                <div class="cfi-inner">
                                    <span class="img"><img src="assets/img/new/cf-img-1.jpg" alt=""></span>
                                    <h4>Tech Support</h4>
                                    <p>24/7 Assistance</p>
                                </div>
                            </div>

                            <div class="cf-item">
                                <div class="cfi-inner">
                                    <span class="img"><img src="assets/img/new/cf-img-2.jpg" alt=""></span>
                                    <h4>Seamless Integration</h4>
                                    <p>Easy-to-Setup</p>
                                </div>
                            </div>

                            <div class="cf-item">
                                <div class="cfi-inner">
                                    <span class="img"><img src="assets/img/new/cf-img-3.jpg" alt=""></span>
                                    <h4>Customizable Components</h4>
                                    <p>Your Choice</p>
                                </div>
                            </div>

                            <div class="cf-item">
                                <div class="cfi-inner">
                                    <span class="img"><img src="assets/img/new/cf-img-4.jpg" alt=""></span>
                                    <h4>Full Documentation</h4>
                                    <p>User Guide and FAQs</p>
                                </div>
                            </div>
                            <div class="cf-item">
                                <div class="cfi-inner">
                                    <span class="img"><img src="assets/img/new/cf-img-1.jpg" alt=""></span>
                                    <h4>Tech Support</h4>
                                    <p>24/7 Assistance</p>
                                </div>
                            </div>

                            <div class="cf-item">
                                <div class="cfi-inner">
                                    <span class="img"><img src="assets/img/new/cf-img-2.jpg" alt=""></span>
                                    <h4>Seamless Integration</h4>
                                    <p>Easy-to-Setup</p>
                                </div>
                            </div>

                            <div class="cf-item">
                                <div class="cfi-inner">
                                    <span class="img"><img src="assets/img/new/cf-img-3.jpg" alt=""></span>
                                    <h4>Customizable Components</h4>
                                    <p>Your Choice</p>
                                </div>
                            </div>

                            <div class="cf-item">
                                <div class="cfi-inner">
                                    <span class="img"><img src="assets/img/new/cf-img-4.jpg" alt=""></span>
                                    <h4>Full Documentation</h4>
                                    <p>User Guide and FAQs</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            
            </div>
        </section>


        <section class="section-client">
            <div class="container">
                <div class="row">
                    <div class="col-24 col-md-12 offset-md-6">
                        <div class="header-title-1 text-center">                            
                            <h3 class="title">Meet Our Fantastic <br />Community of Loyal Clients</h3>
                            <p class="description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
                        </div>
                        <p class="text-center"><a href="#"><img src="assets/img/new/smokers-choice-logo.png"></a> &nbsp;&nbsp;&nbsp;&nbsp; <a href="#"><img src="assets/img/new/cbd-logo.png"></a></p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-testimonial">
            
            <div class="container">
                <div class="header-title-1 text-center">
                    <h3 class="title">What Our Clients Say is Extremely <br /> Important to Us </h3>
                </div>
            </div>

            <div class="slick-client">
                <?php for ($x = 0; $x <= 4; $x++) { ?>
                <div class="client-box">
                    <div class="image">
                        <img src="assets/img/new/smokerschoice.jpg" alt="" />
                    </div>
                    <div class="text">
                        <p>Our problem solved: a way to communicate and engage with our customers on a platform they actually use. We use social media like Instagram and Facebook, but we just don't get the participation rates we want. Loyal~n~Save gives us the credibility and voice we needed to increase our customer engagement.</p>
                        <h4>Smokers Choice</h4>
                    </div>
                </div>
                <?php } ?>                
            </div>

        </section>

        <section class="container">
            <div class="seprator-dot"></div>
        </section>

        <section class="section-content">
            <div class="container">
                <div class="row">
                    <div class="col-24 col-md-18 offset-3">
                        <div class="header-title-1 text-center">
                            <h3 class="title">Frequently Asked Questions</h3>
                            <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        </div>

                        <div class="accordion" id="accordion">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <button data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">How will Loyal~n~Save benefit my business?</button>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <button class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Does Loyal~n~Save integrate with my POS?</button>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">                                
                                    <button class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">How soon can I launch a loyalty program at my business?</button>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                        </div>

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
        /*infinite: false,*/
    });

})
</script>

</html>