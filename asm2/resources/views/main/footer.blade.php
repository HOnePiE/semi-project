<!-- footer -->
<footer>
	<div class="footer-top-w3-agileits">
		<div class="container">
			<div class="footer-grid-wthree-agiles">
				<div class="col-md-5 footer-grid-wthree-agile">
					<h3>About us</h3>
					<p>Welcome to SunnyBee Surf Shop, where the sun-kissed waves beckon you to an incredible surfing experience! 
						We are thrilled to be your go-to destination for all things surf-related. 
						Whether you're a seasoned surfer seeking the perfect board or a beginner eager to catch your first wave, 
						our shop is brimming with high-quality surf stuffs to elevate your ocean adventures.
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
				<p>© 2023 SunnyBee. All rights reserved | Design by <a href="http://Tuan95vn.com/">Pham Anh Tuan</a></p>
			</div>
		</div>
	</div>

</footer>
<!-- //footer -->
<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- js -->
<script type="text/javascript" src="{{asset('/js/jquery-2.1.4.min.js')}}"></script>

<!--search-bar-->
<script src="{{asset('/js/search.js')}}"></script>
<!--//search-bar-->
<!-- cart-js -->
<script src="{{asset('/js/minicart.js')}}"></script>
<script>
	surf.render();

	surf.cart.on('surf_checkout', function(evt) {
		var items, len, i;

		if (this.subtotal() > 0) {
			items = this.items();

			for (i = 0, len = items.length; i < len; i++) {}
		}
	});
</script>
<!-- //cart-js -->
<!-- price range (top products) -->
<script src="{{asset('js/jquery-ui.js')}}"></script>
<script>
	//<![CDATA[ 
	$(window).load(function () {
		$("#slider-range").slider({
			range: true,
			min: 0,
			max: 9000,
			values: [50, 6000],
			slide: function (event, ui) {
				$("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
			}
		});
		$("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

	}); //]]>
</script>
<!-- //price range (top products) -->
<!-- easy-responsive-tabs -->
<script src="{{asset('/js/easy-responsive-tabs.js')}}"></script>
<script>
	$(document).ready(function() {
		$('#horizontalTab').easyResponsiveTabs({
			type: 'default', //Types: default, vertical, accordion           
			width: 'auto', //auto or any width like 600px
			fit: true, // 100% fit in a container
			closed: 'accordion', // Start closed if in accordion view
			activate: function(event) { // Callback function if tab is switched
				var $tab = $(this);
				var $info = $('#tabInfo');
				var $name = $('span', $info);
				$name.text($tab.text());
				$info.show();
			}
		});
		$('#verticalTab').easyResponsiveTabs({
			type: 'vertical',
			width: 'auto',
			fit: true
		});
	});
</script>

<!-- credit-card -->
<script type="text/javascript" src="{{asset('/js/creditly.js')}}"></script>
<link rel="stylesheet" href="{{asset('/css/creditly.css')}}" type="text/css" media="all" />

<script type="text/javascript">
	$(function() {
		var creditly = Creditly.initialize(
			'.creditly-wrapper .expiration-month-and-year',
			'.creditly-wrapper .credit-card-number',
			'.creditly-wrapper .security-code',
			'.creditly-wrapper .card-type');

		$(".creditly-card-form .submit").click(function(e) {
			e.preventDefault();
			var output = creditly.validate();
			if (output) {
				// Your validated credit card output
				console.log(output);
			}
		});
	});
</script>
<!-- //credit-card -->


<!-- start-smoth-scrolling -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="{{asset('/js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/jquery.easing.min.js')}}"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event) {
			event.preventDefault();

			$('html,body').animate({
				scrollTop: $(this.hash).offset().top
			}, 1000);
		});
	});
</script>
<!-- //end-smooth-scrolling -->
<!-- Pricing-Popup-Box-JavaScript -->
<script src="{{asset('/js/jquery.magnific-popup.js')}}" type="text/javascript"></script>
<!-- //Pricing-Popup-Box-JavaScript -->
<script>
	$('ul.dropdown-menu li').hover(function() {
		$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
	}, function() {
		$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
	});
</script>
<!-- js for portfolio lightbox -->
<script src="{{asset('/js/jquery.chocolat.js')}} "></script>
<link rel="stylesheet " href="{{asset('/css/chocolat.css')}} " type="text/css " media="screen ">
<!--light-box-files -->
<script type="text/javascript ">
	$(function() {
		$('.portfolio-grids a').Chocolat();

	});
</script>
<!-- /js for portfolio lightbox -->

<!-- smooth-scrolling-of-move-up -->
<script type="text/javascript">
	$(document).ready(function() {
		/*
		var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
		};
		*/

		$().UItoTop({
			easingType: 'easeOutQuart'
		});

	});
</script>
<!-- //smooth-scrolling-of-move-up -->
<!-- Pricing-Popup-Box-JavaScript -->
<script src="{{asset('/js/jquery.magnific-popup.js')}}" type="text/javascript"></script>
<!-- //Pricing-Popup-Box-JavaScript -->
<script type="text/javascript" src="{{asset('/js/bootstrap.js')}}"></script>
</body>

</html>