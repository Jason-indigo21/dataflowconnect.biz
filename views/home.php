    <div class="banner-area content-bg circle-shape mt-5">
        <!-- Background -->
        <div class="bg" style="background-image: url(assets/img/banner/1.jpg);"></div>
        <!-- End Background -->
        <div class="item">
            <div class="container">
                <div class="row align-center">

                    <div class="col-lg-7 offset-lg-5">
                        <div class="content">
                            <h2 class="wow fadeInDown">WHERE EVERY CALL BECOMES AN OPPORTUNITY </h2>
                            <p class="wow fadeInLeft">
                                At DATAFLOW CONNECT, S.A., we propel your call center into a new horizon. We offer customized strategies that drive your business growth, optimize your operations, and improve your customer experience.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="choose-us-area overflow-hidden reverse default-padding bg-gray">
        <div class="container">
            <div class="row align-center">

                <div class="col-lg-6 info wow fadeInUp">
                    <h5 class="area-title">Our secret?</h5>
                    <p>
                        A 360° vision that ranges from direct customer service to deep data analysis, combining digital marketing, telemarketing, and operational support tools.
                    </p>
                    <h5>More than a Consultancy, Your Strategic Partner</h5>
                    <p>We focus on connecting your company with its true potential. We implement solutions that strengthen customer relationships, optimize processes, and position your business effectively in the market.</p>

                    <h4 class="mt-5"> Ready to make a difference?</h4>
                    <p>
                        <a href="#" class="btn-animate wow fadeInRight">
                            <span class="circle">
                                <span class="icon arrow"></span>
                            </span>
                            <span class="button-text mr-2">Let's talk today! </span>
                        </a>
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="thumb wow fadeInRight" data-wow-delay="0.6s">
                        <img src="assets/img/illustration/1.png" alt="Thumb">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="default-services-area default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="single-item col-lg-4 col-md-6">
                    <h5>Our Services</h5>
                    <h2 class="area-title">We provide IT & Business solutions</h2>
                    <div class="devider"></div>
                    <p>
                        Outlived no dwelling denoting in peculiar as he believed. Behaviour excellent middleton be as it curiosity departure ourselves very extreme.
                    </p>
                    <a class="btn btn-gradient effect btn-md" href="#">See More</a>
                </div>
                <?php foreach ($services as $service): ?>
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <i class="flaticon-padlock"></i>
                            <h4><a href=""><?= $service['title'] ?></a></h4>
                            <p>
                                <?= $service['home-content'] ?>
                            </p>
                        </div>
                    </div>

                <?php endforeach; ?>



            </div>
        </div>
    </div>