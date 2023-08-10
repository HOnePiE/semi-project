@extends('index')

@section('title')
HTTP 404
@endsection

@section('page')
<!-- banner -->
<div class="banner_inner">
                   <div class="services-breadcrumb">
						<div class="inner_breadcrumb">

							<ul class="short">
								<li><a href="{{route('home')}}">Home</a><i>|</i></li>
								<li>404</li>
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
		<div class="error_page">
				<h4>404</h4>
				<p>This link dead link</p>
				<form action="#" method="post">
					<input class="serch" type="search" name="serch" placeholder="Search here" required="">
					<button class="btn1"><i class="fa fa-search" aria-hidden="true"></i></button>
					<div class="clearfix"> </div>
				</form>
                      <ul class="footer_list_icons error">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
						</ul>
				<a class="b-home" href="index.php">Back to Home</a>
			</div>

		</div>
	</div>
	<!--//about-->
	@endsection