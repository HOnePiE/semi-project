@extends('index')

@section('title')
about
@endsection

@section('page')
<!-- banner -->
<div class="banner_inner">
                   <div class="services-breadcrumb">
						<div class="inner_breadcrumb">

							<ul class="short">
								<li><a href="{{route('home')}}">Home</a><i>|</i></li>
								<li>About</li>
							</ul>
						</div>
					</div>

		  </div>
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
				<p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis tristique est, et egestas odio. Mauris ac tristique
					arcu, sed interdum risus.Integer quis tristique est, et egestas odio. Mauris ac tristique arcu, sed interdum risus.
				</p>
			</div>
			<div class="about-main">
				<div class="col-md-6 about-left">
				</div>

				<div class="col-md-6 about-right">
					<h3>Towards wind and waves</h3>
					<p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis tristique est, et egestas odio, sed interdum risus.</p>

				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="about-main sec">

				<div class="col-md-6 about-right two">
					<h3>Towards wind and waves</h3>
					<p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis tristique est, et egestas odio, sed interdum risus.</p>

				</div>
				<div class="col-md-6 about-left two">
				</div>

				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//about-->
		<!-- top Products -->
	<div class="ads-grid_shop">
		<div class="container">
			<div class="inner_sec_info_w3ls_agile">
				<div class="col-md-6 news-left">
					<img src="/images/g10.jpg" alt=" " class="img-responsive">
				</div>
				<div class="col-md-6 news-right">
					<h4>Quisque lacinia quam sed</h4>
					<p class="sub_p">Etiam faucibus viverra libero vel efficitur. Ut semper nisl ut laoreet ultrices. Maecenas dictum arcu purus, sit amet
						volutpat purus viverra sit amet. Quisque lacinia quam sed tortor interdum, malesuada congue nunc ornare. Cum sociis
						In semper lorem eget tortor pulvinar ultricies.
					</p>
					<p>Etiam faucibus viverra libero vel efficitur. Ut semper nisl ut laoreet ultrices. Maecenas dictum arcu purus, sit amet
						volutpat purus viverra sit amet..
					</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>

	</div>
			<div class="mid_services">
			<div class="col-md-6 according_inner_grids">
				<h3 class="heading two">Who We Are</h3>
				<div class="according_info">
					<div class="panel-group about_panel" id="accordion" role="tablist" aria-multiselectable="true">
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingOne">
								<h4 class="panel-title asd">
									<a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true"
									    aria-controls="collapseOne">
							  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>assumenda est cliche voluptate
							</a>
								</h4>
							</div>
							<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
								<div class="panel-body panel_text">
									Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
									cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingTwo">
								<h4 class="panel-title asd">
									<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
									    aria-controls="collapseTwo">
							  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Itaque earum rerum
							</a>
								</h4>
							</div>
							<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
								<div class="panel-body panel_text">
									Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
									cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingThree">
								<h4 class="panel-title asd">
									<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false"
									    aria-controls="collapseThree">
							  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>autem accusamus terry qui
							</a>
								</h4>
							</div>
							<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
								<div class="panel-body panel_text">
									Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
									cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingThree">
								<h4 class="panel-title asd">
									<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false"
									    aria-controls="collapseThree">
							  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>autem accusamus terry qui
							</a>
								</h4>
							</div>
							<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
								<div class="panel-body panel_text">
									Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
									cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
			<div class="col-md-6 mid_services_img">
				<div class="bar-grids">
					<h3 class="heading two three">Our Skills</h3>
					<div class="skill_info">
						<h6>Development<span> 95% </span></h6>
						<div class="progress">
							<div class="progress-bar progress-bar-striped active" style="width: 95%">
							</div>
						</div>
						<h6>Pricing<span> 85% </span></h6>
						<div class="progress">
							<div class="progress-bar progress-bar-striped active" style="width: 85%">
							</div>
						</div>
						<h6>Production <span>90% </span></h6>
						<div class="progress">
							<div class="progress-bar progress-bar-striped active" style="width: 90%">
							</div>
						</div>
						<h6>Advertising <span>86% </span></h6>
						<div class="progress prgs-last">
							<div class="progress-bar progress-bar-striped active" style="width: 86%">
							</div>
						</div>
					</div>
				</div>

			</div>
			<div class="clearfix"> </div>
		</div>

	<!--/works-->
	<div class="works">
		<div class="container">
			<h3 class="tittle-w3ls cen">What we Provide</h3>
			<div class="inner_sec_info_w3ls_agile">
				<div class="ser-first">
					<div class="col-md-3 ser-first-grid text-center">
						<span class="fa fa-shield" aria-hidden="true"></span>
						<h3>Stand Up Paddle</h3>
						<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
					</div>
					<div class="col-md-3 ser-first-grid text-center">
						<span class="fa fa-pencil" aria-hidden="true"></span>
						<h3>Day Tours</h3>
						<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
					</div>
					<div class="col-md-3 ser-first-grid text-center">
						<span class="fa fa-star" aria-hidden="true"></span>
						<h3>After Schools</h3>
						<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
					</div>
					<div class="col-md-3 ser-first-grid text-center">
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
											<p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis hendrerit lobortis elementum, Quis nostrum exercitationem
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
											<p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis hendrerit lobortis elementum, Quis nostrum exercitationem
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
											<p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis hendrerit lobortis elementum, Quis nostrum exercitationem
												ullam corporis suscipit laboriosam. </p>
										</div>
									</div>
								</div>
								<!-- Carousel Buttons Next/Prev -->
							<a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
							<a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>

						</div>
				</div>

				</div>
			</div>
		</div>
	</div>
	<!-- //Testimonials -->
	@endsection