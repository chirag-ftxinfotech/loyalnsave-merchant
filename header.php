<!-- Page Loader -->
<div class="page-loader">
    <span><img src="assets/img/loading.gif" alt="" /></span>
</div>
<!-- Page Loader -->

<!-- Page SVG -->
<?php include('svg.php'); ?>
<!-- Page SVG -->

<!-- Mobile Navigation -->
<section class="mobile-nav">
	<a href="#!" class="mobile-nav__close">
        <svg class="svg svg-close" aria-hidden="true" role="img"><use href="#svg-close" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-close"></use></svg>
    </a>
	<div class="mobile-nav-inner" id="mobile-nav">
		<!-- Mobile navigation code move here -->    
	</div>
</section>
<!-- Mobile Navigation -->
<div id="main">
<header id="header" class="sticky">
    <div class="logo">
        <a href="index.php"><img src="assets/img/logo.png" alt="" /></a>
    </div>
    <div class="phone"><a href="tel:+1-434-5454-443">
        <!-- <svg class="svg svg-phone" aria-hidden="true" role="img"><use href="#svg-phone" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-phone"></use></svg> -->
        <img src="assets/img/new-images/call.png" width="20" height="20" alt="call icon" >
        <span>+1 434 5454 443</span></a></div>
    <div class="header-right">
        <a href="#!" class="mobile-nav__toggle"><svg class="svg svg-bar" aria-hidden="true" role="img"><use href="#svg-bar" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-bar"></use></svg></a>
        <nav class="navigation" id="desktop-nav">
            <ul>
             
                <li><a href="about-us.php">About Us</a></li>
                <li><a href="deals.php">Deals</a></li>
                <li><a href="how-it-works.php">How it works</a></li>
                <li class="sub">
                    <a href="features.php">Features</a>
                    <span class="darrow"></span>
                    <div class="dropdown">
                        <ul>
                            <li><a href="team-reward.php">Team Reward</a></li>    
                            <li><a href="gamification.php">Gamification</a></li>    
                            <li><a href="swagshop.php">Swag Shop</a></li>                    
                            <li><a href="manufacturers.php">Manufacturers</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="pricing.php">Pricing</a></li>
                <!-- <li><a href="blog.php">Blog</a></li> -->
                <!-- <li><a href="contact-us.php">Contact</a></li> -->
            </ul>
        </nav>
        <a href="#!" data-toggle="modal" data-target="#requestQuote" class="button btn-get-quote"><img src="assets/img/quote.png" alt="" /><span>Get in Touch</span></a>
    </div>
</header>