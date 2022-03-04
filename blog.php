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
                            <h1>Blog & Updates</h1>
                            <p>Browse our database of just about everything you need to know about a loyalty program and how one can be beneficial to your business. Also included are recent updates or bug fixes to Loyal~n~Save and announcements of new integrations and features.</p>
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

        <section class="section-header-boxes">
            <div class="container">
                <div class="row">
                    <div class="col-24 col-lg-20 offset-lg-2">
                        <div class="shb-form-box">
                            <!-- <form class="form shb-form-field">
                                <input type="text" placeholder="Search" class="form-control" />
                                <button class="btn"><svg aria-hidden="true" role="img"><use href="#search" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#search"></use></svg></button>
                            </form> -->
                            <div class="shb-categrory">
                                <a href="#" class="active">All <span class="counter"> 6</span></a>
                                <a href="#">Strategy</a>
                                <a href="#">Loyalty</a>
                                <a href="#">Gamification</a>
                                <a href="#">Trends</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-content">
            <div class="container">
                <div class="row">
                    <div class="col-24 col-lg-20 offset-lg-2">
                        <div class="header-title-2 text-center">
                            <h3 class="title">Read Our Most Recent Posts</h3>
                        </div>
                        <div class="blog-lists">
                            <?php for ($x = 1; $x <= 2; $x++) { ?>
                                <div class="blog-box col-24 col-lg-12">
                                    <div class="image">
                                        <img src="assets/img/new/blog-img.jpg" alt="" />
                                    </div>
                                    <div class="text">
                                        <p><span>Strategy</span> June 8, 2021</p>
                                        <h4>How To Determine The Points Model For Loyalty Programs</h4>
                                    </div>
                                    <a href="#!" class="link-full"></a>
                                </div>
                            <?php } ?>
                        </div>

                        <div class="resource-category">
                            <a href="#"><span>Whitepapers</span></a>
                            <a href="#"><span>Videos</span></a>
                            <a href="#"><span>Release Note</span></a>
                        </div>

                        <div class="blog-lists">
                            <?php for ($x = 1; $x <= 9; $x++) { ?>
                                <div class="blog-box col-24 col-lg-8">
                                    <div class="image">
                                        <img src="assets/img/new/blog-img.jpg" alt="" />
                                    </div>
                                    <div class="text">
                                        <p><span>Strategy</span> June 8, 2021</p>
                                        <h4>How To Determine The Points Model For Loyalty Programs</h4>
                                    </div>
                                    <a href="#!" class="link-full"></a>
                                </div>
                            <?php } ?>
                        </div>

                        <div class="paginations">
                            <ul class="pagination">                        
                                <li class="page-item prev disabled"><span class="page-link">Prev</span></li>
                                <li class="page-item active"><span class="page-link">1</span></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item next"><a class="page-link" href="#" rel="next">Next</a></li>
                            </ul>
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
    

})
</script>

</html>