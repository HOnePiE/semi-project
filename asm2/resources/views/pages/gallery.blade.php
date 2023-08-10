@extends('index')

@section('title')
Gallery
@endsection

@section('page')
<!-- banner -->
<div class="banner_inner">
                   <div class="services-breadcrumb">
						<div class="inner_breadcrumb">

							<ul class="short">
								<li><a href="{{route('home')}}">Home</a><i>|</i></li>
								<li>Gallery</li>
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
	<!--//about-->
		
	<!-- footer -->
	<footer>
		<div class="footer-top-w3-agileits">
			<div class="container">
				<div class="footer-grid-wthree-agiles">
					<div class="col-md-5 footer-grid-wthree-agile">
						<h3>About us</h3>
						<p>Lorem ipsum dolor sit consectetur elit. Nam eget egestas erat. In hachabi tasse platea dictumst. hachabi tasse platea
							dictumst
						</p>
						<p>Lorem ipsum dolor sit consectetur elit. Nam eget egestas erat. In hachabi tasse platea dictumst.</p>
						<ul class="footer_list_icons">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
						</ul>
					</div>
					<div class="col-md-3 footer-grid-wthree-agile">
						<h3>Links</h3>
						<ul class="footer-list">
							<li> <a href="about.html">About</a> </li>
							<li> <a href="gallery.html">Gallery</a> </li>
							<li> <a href="shop.html">Shop</a> </li>
							<li> <a href="blog.html">Blog</a> </li>
							<li> <a href="404.html">Events</a> </li>
							<li> <a href="{{route('contact')}}">Contact</a> </li>
						</ul>
					</div>
					<div class="col-md-4 footer-grid-wthree-agile">
						<h3>Newsletter</h3>
						<form action="#" method="post">
							<input type="text" name="text" placeholder="Name" required="">
							<input type="email" name="Email" placeholder="Email" required="">
							<input type="submit" value="subscribe now">
						</form>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="copy_right">
					<p>©  2018 Surf Inn. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
				</div>
			</div>
		</div>
@endsection