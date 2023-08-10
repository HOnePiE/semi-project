@extends('index')

@section('title')
Home Page
@endsection

@section('page')
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1" class=""></li>
            <li data-target="#myCarousel" data-slide-to="2" class=""></li>
            <li data-target="#myCarousel" data-slide-to="3" class=""></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <div class="container">
                    <div class="carousel-caption">
                        <h3>Surfing is a <span>real life</span></h3>
                        <h4>Sea Sand & Surf</h4>
                        <p>Add Some Description</p>

                    </div>
                </div>
            </div>
            <div class="item item2">
                <div class="container">
                    <div class="carousel-caption">
                        <h3>Shine <span>with waves </span></h3>
                        <h4>Do it like a Surfer</h4>
                        <p>Add Some Description</p>
                    </div>
                </div>
            </div>
            <div class="item item3">
                <div class="container">
                    <div class="carousel-caption">
                        <h3>Surfing is a <span>real life</span></h3>
                        <h4>Do it like a Surfer</h4>
                        <p>Add Some Description</p>

                    </div>
                </div>
            </div>
            <div class="item item4">
                <div class="container">
                    <div class="carousel-caption">
                        <h3>Rise <span>with waves </span></h3>
                        <h4>Sea Sand & Surf</h4>
                        <p>Add Some Description</p>
                    </div>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!-- The Modal -->
    </div>
    <!--//banner -->
    <!--//banner -->

    <!-- Modal1 -->
    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                    <div class="signin-form profile">
                        <h3 class="sign">Sign In</h3>
                        <div class="login-form">
                            <form action="#" method="post">
                                <input type="email" name="email" placeholder="E-mail" required="">
                                <input type="password" name="password" placeholder="Password" required="">
                                <div class="tp">
                                    <input type="submit" value="Sign In">
                                </div>
                            </form>
                        </div>
                        <div class="login-social-grids">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div>
                        <p><a href="#" data-toggle="modal" data-target="#myModal3"> Don't have an account?</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //Modal1 -->
    <!-- Modal2 -->
    <div class="modal fade" id="myModal3" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                    <div class="signin-form profile">
                        <h3 class="sign">Sign Up</h3>
                        <div class="login-form">
                            <form action="#" method="post">
                                <input type="text" name="name" placeholder="Username" required="">
                                <input type="email" name="email" placeholder="Email" required="">
                                <input type="password" name="password" placeholder="Password" required="">
                                <input type="password" name="password" placeholder="Confirm Password" required="">
                                <input type="submit" value="Sign Up">
                            </form>
                        </div>
                        <p><a href="#"> By clicking Sign up, I agree to your terms</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //Modal2 -->
    </div>
    <!--// header_top -->
    <!--about-->
    <div class="ab_content">
        <div class="container">
            <h3 class="tittle-w3ls">About Us</h3>
            <div class="about-top">
                <h3 class="subheading">With love for the sport of Surf Inn</h3>
                <p class="paragraph">Welcome to Surf Stuffs Shop, your one-stop destination for all your surfing needs!
                    At Surf Stuffs, we are passionate about surfing and believe in providing top-quality gear to enhance
                    your surfing experience.
                    Our shop offers a wide range of products, from surfboards to wetsuits, accessories, and more.
                    Let's dive in and explore the world of surf with SunnyBee
                </p>
            </div>
            <div class="about-main">
                <div class="col-md-6 about-left">
                </div>

                <div class="col-md-6 about-right">
                    <h3>Towards wind and waves</h3>
                    <p class="paragraph">
                        where we embrace the thrill of surfing and sailing with the passion of adventurers.
                        Join us as we ride the winds and conquer the waves, exploring the vast ocean's wonders.
                        Let's set sail together on an unforgettable journey of excitement and freedom.
                    </p>

                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="about-main sec">

                <div class="col-md-6 about-right two">
                    <h3>Towards wind and waves</h3>
                    <p class="paragraph">
                        Welcome to SunnyBee Surf Shop, where the sun-kissed waves beckon you to an incredible surfing
                        experience!
                        We are thrilled to be your go-to destination for all things surf-related.
                        Whether you're a seasoned surfer seeking the perfect board or a beginner eager to catch your first
                        wave,
                        our shop is brimming with high-quality surf stuffs to elevate your ocean adventures.</p>

                </div>
                <div class="col-md-6 about-left two">
                </div>

                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!--//about-->
    <!--/works-->
    <div class="works">
        <div class="container">
            <h3 class="tittle-w3ls cen">What we Provide</h3>
            <div class="inner_sec_info_w3ls_agile">
                <div class="ser-first">
                    <div class="col-md-6 ser-first-grid text-center">
                        <span class="fa fa-shield" aria-hidden="true"></span>
                        <h3>Stand Up Paddle</h3>
                        <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                    </div>
                    {{-- <div class="col-md-3 ser-first-grid text-center">
				<span class="fa fa-pencil" aria-hidden="true"></span>
				<h3>Day Tours</h3>
				<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
			</div> --}}
                    {{-- <div class="col-md-3 ser-first-grid text-center">
				<span class="fa fa-star" aria-hidden="true"></span>
				<h3>After Schools</h3>
				<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
			</div> --}}
                    <div class="col-md-6 ser-first-grid text-center">
                        <span class="fa fa-thumbs-up" aria-hidden="true"></span>
                        <h3>Gift Vouchers</h3>
                        <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>

        </div>
    </div>
    <!--/works-->
    <!-- /portfolio-->
    <div class="portfolio-project">
        <div class="container">
            <h3 class="tittle-w3ls cen">Gallery</h3>
            <div class="inner_sec_info_w3ls_agile">
                <div class="col-md-6 portfolio-grids_left">
                    <div class="col-md-6 portfolio-grids" data-aos="zoom-in">
                        <a href="/images/g1.jpg" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
                            <img src="/images/g1.jpg" class="img-responsive" alt=" " />
                            <div class="b-wrapper">
                                <h4>Surf Inn</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 portfolio-grids" data-aos="zoom-in">
                        <a href="/images/g2.jpg" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
                            <img src="/images/g2.jpg" class="img-responsive" alt=" " />
                            <div class="b-wrapper">
                                <h4>Surf Inn</h4>

                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 portfolio-grids" data-aos="zoom-in">
                        <a href="/images/g3.jpg" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
                            <img src="/images/g3.jpg" class="img-responsive" alt=" " />
                            <div class="b-wrapper">
                                <h4>Surf Inn</h4>

                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 portfolio-grids sec_img" data-aos="zoom-in">
                    <a href="/images/g10.jpg" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
                        <img src="/images/g10.jpg" class="img-responsive" alt=" " />
                        <div class="b-wrapper">
                            <h4>Surf Inn</h4>

                        </div>
                    </a>
                </div>
                <div class="col-md-6 portfolio-grids sec_img" data-aos="zoom-in">
                    <a href="/images/g11.jpg" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
                        <img src="/images/g11.jpg" class="img-responsive" alt=" " />
                        <div class="b-wrapper">
                            <h4>Surf Inn</h4>

                        </div>
                    </a>
                </div>
                <div class="col-md-6 portfolio-grids_left">
                    <div class="col-md-6 portfolio-grids" data-aos="zoom-in">
                        <a href="/images/g5.jpg" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
                            <img src="/images/g5.jpg" class="img-responsive" alt=" " />
                            <div class="b-wrapper">
                                <h4>Surf Inn</h4>

                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 portfolio-grids" data-aos="zoom-in">
                        <a href="/images/g4.jpg" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
                            <img src="/images/g4.jpg" class="img-responsive" alt=" " />
                            <div class="b-wrapper">
                                <h4>Surf Inn</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 portfolio-grids" data-aos="zoom-in">
                        <a href="/images/g6.jpg" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
                            <img src="/images/g6.jpg" class="img-responsive" alt=" " />
                            <div class="b-wrapper">
                                <h4>Surf Inn</h4>

                            </div>
                        </a>
                    </div>

                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>

    <!--/ pricing-->
    {{-- <div class="pricing">
        <div class="container">
            <h3 class="tittle-w3ls cen">Pricing Table</h3>
            <div class="inner_sec_info_w3ls_agile">
                <div class="col-md-4 pricing_inner_main">
                    <div class="pricing-top">
                        <h3>Starter</h3>
                        <p>$<span>35</span></p>
                    </div>
                    <div class="pricing-bottom">
                        <div class="pricing-bottom-bottom">
                            <p>Colorful and Fun</p>
                            <p>Rarely Lets You Down</p>
                            <p>Environmentally Friendly</p>
                            <p>Sometimes Disappears</p>

                        </div>

                        <div class="sign text-center">
                            <a class="popup-with-zoom-anim" href="#" data-toggle="modal"
                                data-target="#myModal4">BOOK NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 pricing_inner_main active">
                    <div class="pricing-top orange">
                        <h3>Advanced</h3>
                        <p>$<span>175</span></p>
                    </div>
                    <div class="pricing-bottom">
                        <div class="pricing-bottom-bottom">
                            <p>Feels Great</p>
                            <p>Mildly Confusing</p>
                            <p>Mildly Confusing</p>
                            <p>Colorless on Wednesday</p>

                        </div>

                        <div class="sign text-center">
                            <a class="popup-with-zoom-anim orange active" href="#" data-toggle="modal"
                                data-target="#myModal4">BOOK NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 pricing_inner_main">
                    <div class="pricing-top purple">
                        <h3>Developer</h3>
                        <p>$<span>190</span></p>
                    </div>
                    <div class="pricing-bottom">
                        <div class="pricing-bottom-bottom">
                            <p>Really the Best</p>
                            <p>Sometimes the Best</p>
                            <p>Not Quite the Best</p>
                            <p>Truly a must have</p>

                        </div>

                        <div class="sign text-center">
                            <a class="popup-with-zoom-anim purple" href="#" data-toggle="modal"
                                data-target="#myModal4">BOOK NOW</a>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div> --}}
    <!-- Popup-Box -->
    <!-- Modal2 -->
    <div class="modal fade" id="myModal4" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                    <div class="pop_up">
                        <div class="payment-online-form-left">
                            <form action="#" method="post">
                                <h4>Personal Details</h4>
                                <ul>
                                    <li><input type="text" name="First Name" placeholder="First Name" required="">
                                    </li>
                                    <li><input type="text" name="Last Name" placeholder="Last Name" required="">
                                    </li>
                                </ul>
                                <ul>
                                    <li><input type="email" class="email" name="Email" placeholder="Email"
                                            required=""></li>
                                    <li><input type="text" name="Number" placeholder="Mobile Number" required="">
                                    </li>
                                </ul>
                                <textarea name="Message" placeholder="Address..." required=""></textarea>
                                <div class="clearfix"></div>

                                <ul class="payment-sendbtns">
                                    <li><input type="reset" value="Reset"></li>
                                    <li><input type="submit" name="Send" value="Send"></li>
                                </ul>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //Popup-Box -->

    <!--// pricing-->

    <!-- Testimonials -->
    <div class="testimonials">
        <div class="container">
            <h3 class="tittle-w3ls">What people says</h3>
            <div class="inner_sec_info_w3ls_agile">
                <div class="col-md-6 testimonials-main">
                    <div class="carousel slide two" data-ride="carousel" id="quote-carousel">
                        <!-- Bottom Carousel Indicators -->
                        <ol class="carousel-indicators two">
                            <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#quote-carousel" data-slide-to="1"></li>
                            <li data-target="#quote-carousel" data-slide-to="2"></li>
                        </ol>

                        <div class="carousel-inner">
                            <div class="item active">

                                <div class="inner-testimonials">
                                    <img src="/images/1.jpg" alt=" " class="img-responsive" />
                                    <div class="teastmonial-info">
                                        <h5>Andy Wovel</h5>
                                        <span>Lorem Ipsum</span>
                                        <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
                                            hendrerit lobortis elementum, Quis nostrum exercitationem
                                            ullam corporis suscipit laboriosam. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">

                                <div class="inner-testimonials">
                                    <img src="/images/2.jpg" alt=" " class="img-responsive" />
                                    <div class="teastmonial-info">
                                        <h5>Bernard Russo</h5>
                                        <span>Lorem Ipsum</span>
                                        <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
                                            hendrerit lobortis elementum, Quis nostrum exercitationem
                                            ullam corporis suscipit laboriosam. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">

                                <div class="inner-testimonials">
                                    <img src="/images/3.jpg" alt=" " class="img-responsive" />
                                    <div class="teastmonial-info">
                                        <h5>Alex Merphy</h5>
                                        <span>Lorem Ipsum</span>
                                        <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
                                            hendrerit lobortis elementum, Quis nostrum exercitationem
                                            ullam corporis suscipit laboriosam. </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Carousel Buttons Next/Prev -->
                            <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i
                                    class="fa fa-chevron-left"></i></a>
                            <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i
                                    class="fa fa-chevron-right"></i></a>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- //Testimonials -->
@endsection
