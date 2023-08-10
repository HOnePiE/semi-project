@extends('index')

@section('title')
detail product
@endsection

@section('page')
<!-- banner -->
<div class="banner_inner">
			<div class="services-breadcrumb">
				<div class="inner_breadcrumb">

					<ul class="short">
						<li><a href="{{route('home')}}">Home</a><i>|</i></li>
						<li>Shop</li>
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
<div class="col-md-4 single-right-left ">
				<div class="grid images_3_of_2">
					<div class="flexslider1">

						<ul class="slides">
							<li data-thumb="/images/d2.jpg">
								<div class="thumb-image"> <img src="/images/d2.jpg" data-imagezoom="true" class="img-responsive"> </div>
							</li>
							<li data-thumb="/images/d1.jpg">
								<div class="thumb-image"> <img src="/images/d1.jpg" data-imagezoom="true" class="img-responsive"> </div>
							</li>
							<li data-thumb="/images/d3.jpg">
								<div class="thumb-image"> <img src="/images/d3.jpg" data-imagezoom="true" class="img-responsive"> </div>
							</li>
						</ul>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="col-md-8 single-right-left simpleCart_shelfItem">
				<h3>Water Sports Waistcoat</h3>
				<p><span class="item_price">$650</span>
					<del>$1,199</del>
				</p>
				<div class="rating1">
					<ul class="stars">
						<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="description">
					<h5>Check delivery, payment options and charges at your location</h5>
					<form action="#" method="post">
						<input type="text" value="Enter pincode" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter pincode';}"
						    required="">
						<input type="submit" value="Check">
					</form>
				</div>
				<div class="color-quality">
					<div class="color-quality-right">
						<h5>Quality :</h5>
						<select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
								<option value="null">5 Qty</option>
								<option value="null">6 Qty</option> 
								<option value="null">7 Qty</option>					
								<option value="null">10 Qty</option>								
							</select>
					</div>
				</div>
				<div class="occasional">
					<h5>Types :</h5>
					<div class="colr ert">
						<label class="radio"><input type="radio" name="radio" checked=""><i></i>Dry Bag</label>
					</div>
					<div class="colr">
						<label class="radio"><input type="radio" name="radio"><i></i> Phone Pocket</label>
					</div>
					<div class="colr">
						<label class="radio"><input type="radio" name="radio"><i></i>Waistcoat</label>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="occasion-cart">
					<div class="surf single-item single_page_b">
						<form action="#" method="post">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="add" value="1">
							<input type="hidden" name="surf_item" value="Chikku Loafers">
							<input type="hidden" name="amount" value="405.00">
							<input type="submit" name="submit" value="Add to cart" class="button add">

							<a href="#" data-toggle="modal" data-target="#myModal1"></a>
						</form>

					</div>

				</div>
				<ul class="footer_list_icons single_in">
				         	<li>Share On : </li>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							
						</ul>

			</div>
			<div class="clearfix"> </div>
			<!--/tabs-->
			<div class="responsive_tabs">
				<div id="horizontalTab">
					<ul class="resp-tabs-list">
						<li>Description</li>
						<li>Reviews</li>
						<li>Information</li>
					</ul>
					<div class="resp-tabs-container">
						<!--/tab_one-->
						<div class="tab1">

							<div class="single_page">
								<h6>Lorem ipsum dolor sit amet</h6>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie
									blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt
									ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore
									magna aliqua.</p>
								<p class="para">Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie
									blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt
									ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore
									magna aliqua.</p>
							</div>
						</div>
						<!--//tab_one-->
						<div class="tab2">

							<div class="single_page">
								<div class="bootstrap-tab-text-grids">
									<div class="bootstrap-tab-text-grid">
										<div class="bootstrap-tab-text-grid-left">
											<img src="/images/t1.jpg" alt=" " class="img-responsive">
										</div>
										<div class="bootstrap-tab-text-grid-right">
											<ul>
												<li><a href="#">Admin</a></li>
												<li><a href="#"><i class="fa fa-reply-all" aria-hidden="true"></i> Reply</a></li>
											</ul>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget.Ut enim ad minima veniam,
												quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis
												autem vel eum iure reprehenderit.</p>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="add-review">
										<h4>add a review</h4>
										<form action="#" method="post">
											<input type="text" name="Name" required="Name">
											<input type="email" name="Email" required="Email">
											<textarea name="Message" required=""></textarea>
											<input type="submit" value="SEND">
										</form>
									</div>
								</div>

							</div>
						</div>
						<div class="tab3">

							<div class="single_page">
								<h6>Water Sports Waistcoat </h6>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie
									blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt
									ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore
									magna aliqua.</p>
								<p class="para">Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie
									blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt
									ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore
									magna aliqua.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--//tabs-->
			<!-- /new_arrivals -->
			<div class="new_arrivals">
				<h3>Featured Products</h3>
				<!-- /womens -->
				<div class="col-md-3 product-men women_two">
					<div class="product-surf-info surf">
						<div class="men-pro-item">
							<div class="men-thumb-item">
								<img src="/images/s4.jpg" alt="">
								<div class="men-cart-pro">
									<div class="inner-men-cart-pro">
										<a href="{{route('single')}}" class="link-product-add-cart">Quick View</a>
									</div>
								</div>
								<span class="product-new-top">New</span>
							</div>
							<div class="item-info-product">
								<h4>
									<a href="{{route('single')}}">Phone Pocket </a>
								</h4>
								<div class="info-product-price">
									<div class="grid_meta">
										<div class="product_price">
											<div class="grid-price ">
												<span class="money ">$575.00</span>
											</div>
										</div>
										<ul class="stars">
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="surf single-item hvr-outline-out">
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart">
											<input type="hidden" name="add" value="1">
											<input type="hidden" name="surf_item" value="Phone Pocket">
											<input type="hidden" name="amount" value="575.00">
											<button type="submit" class="surf-cart psurf-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>

											<a href="#" data-toggle="modal" data-target="#myModal1"></a>
										</form>

									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 product-men women_two">
					<div class="product-surf-info surf">
						<div class="men-pro-item">
							<div class="men-thumb-item">
								<img src="/images/s5.jpg" alt="">
								<div class="men-cart-pro">
									<div class="inner-men-cart-pro">
										<a href="{{route('single')}}" class="link-product-add-cart">Quick View</a>
									</div>
								</div>
								<span class="product-new-top">New</span>
							</div>
							<div class="item-info-product">
								<h4>
									<a href="{{route('single')}}">Dry Bag</a>
								</h4>
								<div class="info-product-price">
									<div class="grid_meta">
										<div class="product_price">
											<div class="grid-price ">
												<span class="money ">$325.00</span>
											</div>
										</div>
										<ul class="stars">
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="surf single-item hvr-outline-out">
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart">
											<input type="hidden" name="add" value="1">
											<input type="hidden" name="surf_item" value="Dry Bag">
											<input type="hidden" name="amount" value="325.00">
											<button type="submit" class="surf-cart psurf-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>

											<a href="#" data-toggle="modal" data-target="#myModal1"></a>
										</form>

									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 product-men women_two">
					<div class="product-surf-info surf">
						<div class="men-pro-item">
							<div class="men-thumb-item">
								<img src="/images/s7.jpg" alt="">
								<div class="men-cart-pro">
									<div class="inner-men-cart-pro">
										<a href="{{route('single')}}" class="link-product-add-cart">Quick View</a>
									</div>
								</div>
								<span class="product-new-top">New</span>
							</div>
							<div class="item-info-product">
								<h4>
									<a href="{{route('single')}}">Board Foot Rope</a>
								</h4>
								<div class="info-product-price">
									<div class="grid_meta">
										<div class="product_price">
											<div class="grid-price ">
												<span class="money ">$875.00</span>
											</div>
										</div>
										<ul class="stars">
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="surf single-item hvr-outline-out">
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart">
											<input type="hidden" name="add" value="1">
											<input type="hidden" name="surf_item" value="Board Foot Rope">
											<input type="hidden" name="amount" value="875.00">
											<button type="submit" class="surf-cart psurf-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>

											<a href="#" data-toggle="modal" data-target="#myModal1"></a>
										</form>

									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 product-men women_two">
					<div class="product-surf-info surf">
						<div class="men-pro-item">
							<div class="men-thumb-item">
								<img src="/images/s8.jpg" alt="">
								<div class="men-cart-pro">
									<div class="inner-men-cart-pro">
										<a href="{{route('single')}}" class="link-product-add-cart">Quick View</a>
									</div>
								</div>
								<span class="product-new-top">New</span>
							</div>
							<div class="item-info-product">
								<h4>
									<a href="{{route('single')}}">Fin Key</a>
								</h4>
								<div class="info-product-price">
									<div class="grid_meta">
										<div class="product_price">
											<div class="grid-price ">
												<span class="money ">$505.00</span>
											</div>
										</div>
										<ul class="stars">
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="surf single-item hvr-outline-out">
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart">
											<input type="hidden" name="add" value="1">
											<input type="hidden" name="surf_item" value="Fin Key">
											<input type="hidden" name="amount" value="505.00">
											<button type="submit" class="surf-cart psurf-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>

											<a href="#" data-toggle="modal" data-target="#myModal1"></a>
										</form>

									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				</div>

				<!-- //womens -->
				<div class="clearfix"></div>
			</div>
			<!--//new_arrivals-->




			<div class="clearfix"></div>

		</div>
	</div>
	<!--//about-->
	@endsection