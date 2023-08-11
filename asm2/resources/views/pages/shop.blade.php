@extends('index')

@section('title')
    shop
@endsection

@section('page')
    <div class="banner_inner">
        <div class="services-breadcrumb">
            <div class="inner_breadcrumb">

                <ul class="short">
                    <li><a href="{{ route('home') }}">Home</a><i>|</i></li>
                    <li>Shop</li>
                </ul>
            </div>
        </div>

    </div>
    <!--//banner -->

    {{-- <!-- Modal1 -->
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
		<!-- //Modal1 --> --}}
    {{-- <!-- Modal2 -->
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
		<!-- //Modal2 --> --}}
    </div>
    <!--// header_top -->
    <!--about-->
    <div class="ab_content">
        <div class="container">
            <!-- product right -->
            <div class="left-ads-display col-md-9">
                <div class="wrapper_top_shop">
                    <div class="col-md-6 shop_left">
                        <img src="/images/banner3.jpg" alt="">
                        <h6>40% off</h6>
                    </div>
                    <div class="col-md-6 shop_right">
                        <img src="/images/banner2.jpg" alt="">
                        <h6>50% off</h6>
                    </div>
                    <div class="clearfix"></div>
                    <!-- product-sec1 -->
                    <div class="product-sec1">
                        <!--/mens-->
                        @foreach ($productshop as $item)
                            <div class="col-md-4 product-men">
                                <div class="product-surf-info surf">
                                    <div class="men-pro-item">
                                        <div class="men-thumb-item">
                                            <img src="{{ asset('uploads/' . $item->image) }}" alt="">
                                            <div class="men-cart-pro">
                                                <div class="inner-men-cart-pro">
                                                    <a href="{{ route('single') }}" class="link-product-add-cart">Quick
                                                        View</a>
                                                </div>
                                            </div>
                                            <span class="product-new-top">New</span>
                                        </div>
                                        <div class="item-info-product">
                                            <h4>
                                                <a href="{{ route('single') }}">
                                                    {{-- Jacket Canoeing --}}
                                                    {{ $item->productName }} </a>
                                            </h4>
                                            <div class="info-product-price">
                                                <div class="grid_meta">
                                                    <div class="product_price">
                                                        <div class="grid-price ">
                                                            <span class="money ">
                                                                {{-- $675.00  --}}
                                                                ${{ $item->price }}</span>
                                                        </div>
                                                    </div>
                                                    <ul class="stars">
                                                        <li><a href="#"><i class="fa fa-star"
                                                                    aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"
                                                                    aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"
                                                                    aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-half-o"
                                                                    aria-hidden="true"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star-o"
                                                                    aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="surf single-item hvr-outline-out">
                                                    {{-- <form action="/model/addcart.php" method="post">
                                                        <input type="hidden" name="cmd" value="_cart">
                                                        <input type="hidden" name="add" value="1">
                                                        <input type="hidden" name="surf_item" value="Jacket Canoeing">
                                                        <input type="hidden" name="amount" value="675.00">
                                                        <button type="submit" name="addtocart" class="surf-cart psurf-cart"
                                                            value="addtocart"><i class="fa fa-cart-plus"
                                                                aria-hidden="true"></i></button>

                                                        <!-- <a href="#" data-toggle="modal" data-target="#myModal1"></a> -->
                                                    </form> --}}
													<button type="submit" name="addtocart" class="surf-cart psurf-cart"
													value="addtocart"><i class="fa fa-cart-plus"
														aria-hidden="true"></i>
													<a href="{{asset('addCart', ['productId'=>$product->id])}}"></a>
													</button>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        {{-- <div class="col-md-4 product-men">
							<div class="product-surf-info surf">
								<div class="men-pro-item">
									<div class="men-thumb-item">
										<img src="/images/s2.jpg" alt="">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="{{route('single')}}" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
									</div>
									<div class="item-info-product"> 
										<h4>
											<a href="{{route('single')}}">Water Sports Helmet </a>
										</h4>
										<div class="info-product-price">
											<div class="grid_meta">
												<div class="product_price">
													<div class="grid-price ">
														<span class="money ">$405.00</span>
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
													<input type="hidden" name="surf_item" value="Water Sports Helmet">
													<input type="hidden" name="amount" value="405.00">
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
						<div class="col-md-4 product-men">
							<div class="product-surf-info surf">
								<div class="men-pro-item">
									<div class="men-thumb-item">
										<img src="/images/s3.jpg" alt="">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="{{route('single')}}" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
									</div>
									<div class="item-info-product">
										<h4>
											<a href="{{route('single')}}">Backpack</a>
										</h4>
										<div class="info-product-price">
											<div class="grid_meta">
												<div class="product_price">
													<div class="grid-price ">
														<span class="money ">$375.00</span>
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
													<input type="hidden" name="surf_item" value="Backpack">
													<input type="hidden" name="amount" value="375.00">
													<button type="submit" class="surf-cart psurf-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>

													<a href="#" data-toggle="modal" data-target="#myModal1"></a>
												</form>

											</div>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						</div> --}}
                        <!-- //mens -->
                        <!-- /womens -->
                        {{-- <div class="col-md-4 product-men women_two">
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
						<div class="col-md-4 product-men women_two">
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
											<a href="{{route('single')}}">Dry Bag </a>
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
						<div class="col-md-4 product-men women_two">
							<div class="product-surf-info surf">
								<div class="men-pro-item">
									<div class="men-thumb-item">
										<img src="/images/s6.jpg" alt="">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="{{route('single')}}" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
									</div>
									<div class="item-info-product">
										<h4>
											<a href="{{route('single')}}">Watershorts</a>
										</h4>
										<div class="info-product-price">
											<div class="grid_meta">
												<div class="product_price">
													<div class="grid-price ">
														<span class="money ">$425.00</span>
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
													<input type="hidden" name="surf_item" value="Watershorts">
													<input type="hidden" name="amount" value="425.00">
													<button type="submit" class="surf-cart psurf-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>

													<a href="#" data-toggle="modal" data-target="#myModal1"></a>
												</form>

											</div>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						</div> --}}
                        <!-- //womens -->
                        <!-- /mens -->
                        {{-- <div class="col-md-4 product-men">
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
						<div class="col-md-4 product-men">
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
						<div class="col-md-4 product-men">
							<div class="product-surf-info surf">
								<div class="men-pro-item">
									<div class="men-thumb-item">
										<img src="/images/s9.jpg" alt="">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="{{route('single')}}" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
									</div>
									<div class="item-info-product">
										<h4>
											<a href="{{route('single')}}">Kitesurfing </a>
										</h4>
										<div class="info-product-price">
											<div class="grid_meta">
												<div class="product_price">
													<div class="grid-price ">
														<span class="money ">$635.00</span>
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
													<input type="hidden" name="surf_item" value="Kitesurfing ">
													<input type="hidden" name="amount" value="635.00">
													<button type="submit" class="surf-cart psurf-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>

													<a href="#" data-toggle="modal" data-target="#myModal1"></a>
												</form>

											</div>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						</div> --}}
                        <!-- //mens -->
                        <div class="clearfix"></div>

                    </div>

                    <!-- //product-sec1 -->
                    <div class="col-md-6 shop_left shp">
                        <img src="/images/banner4.jpg" alt="">
                        <h6>21% off</h6>
                    </div>
                    <div class="col-md-6 shop_right shp">
                        <img src="/images/banner1.jpg" alt="">
                        <h6>31% off</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- product left -->
            <div class="side-bar col-md-3">
                <div class="search-hotel">
                    <h3 class="agileits-sear-head">Search Here..</h3>
                    <form action="#" method="post">
                        <input type="search" placeholder="Product name..." name="search" required="">
                        <input type="submit" value=" ">
                    </form>
                </div>
                <!-- price range -->
                <div class="range">
                    <h3 class="agileits-sear-head">Price range</h3>
                    <ul class="dropdown-menu6">
                        <li>

                            <div id="slider-range"></div>
                            <input type="text" id="amount"
                                style="border: 0; color: #ffffff; font-weight: normal;" />
                        </li>
                    </ul>
                </div>
                <!-- //price range -->
                <!--preference -->
                <div class="left-side">
                    <h3 class="agileits-sear-head">Deal Offer On</h3>
                    <ul>
                        <li>
                            <input type="checkbox" class="checked">
                            <span class="span">Backpack</span>
                        </li>
                        <li>
                            <input type="checkbox" class="checked">
                            <span class="span">Phone Pocket</span>
                        </li>

                    </ul>
                </div>
                <!-- // preference -->
                <!-- discounts -->
                <div class="left-side">
                    <h3 class="agileits-sear-head">Discount</h3>
                    <ul>
                        <li>
                            <input type="checkbox" class="checked">
                            <span class="span">5% or More</span>
                        </li>
                        <li>
                            <input type="checkbox" class="checked">
                            <span class="span">10% or More</span>
                        </li>
                        <li>
                            <input type="checkbox" class="checked">
                            <span class="span">20% or More</span>
                        </li>
                        <li>
                            <input type="checkbox" class="checked">
                            <span class="span">30% or More</span>
                        </li>
                        <li>
                            <input type="checkbox" class="checked">
                            <span class="span">50% or More</span>
                        </li>
                        <li>
                            <input type="checkbox" class="checked">
                            <span class="span">60% or More</span>
                        </li>
                    </ul>
                </div>
                <!-- //discounts -->
                <!-- reviews -->
                <div class="customer-rev left-side">
                    <h3 class="agileits-sear-head">Customer Review</h3>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <span>5.0</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <span>4.0</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <span>3.5</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <span>3.0</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <span>2.5</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- //reviews -->
                <!-- deals -->
                <div class="deal-leftmk left-side">
                    <h3 class="agileits-sear-head">Special Deals</h3>
                    <div class="special-sec1">
                        <div class="col-xs-4 img-deals">
                            <img src="/images/s4.jpg" alt="">
                        </div>
                        <div class="col-xs-8 img-deal1">
                            <h3>Phone Pocket</h3>
                            <a href="{{ route('single') }}">$180.00</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="special-sec1">
                        <div class="col-xs-4 img-deals">
                            <img src="/images/s2.jpg" alt="">
                        </div>
                        <div class="col-xs-8 img-deal1">
                            <h3>Water Sports Helmet</h3>
                            <a href="{{ route('single') }}">$99.00</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="special-sec1">
                        <div class="col-xs-4 img-deals">
                            <img src="/images/s1.jpg" alt="">
                        </div>
                        <div class="col-xs-8 img-deal1">
                            <h3> Jacket Canoeing</h3>
                            <a href="{{ route('single') }}">$165.00</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="special-sec1">
                        <div class="col-xs-4 img-deals">
                            <img src="/images/s5.jpg" alt="">
                        </div>
                        <div class="col-xs-8 img-deal1">
                            <h3>Dry Bag</h3>
                            <a href="{{ route('single') }}">$225.00</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="special-sec1">
                        <div class="col-xs-4 img-deals">
                            <img src="/images/s3.jpg" alt="">
                        </div>
                        <div class="col-xs-8 img-deal1">
                            <h3>Backpack</h3>
                            <a href="{{ route('single') }}">$169.00</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!-- //deals -->

            </div>
            <!-- //product left -->

            <div class="clearfix"></div>

        </div>
    </div>
    <!--//about-->
@endsection
