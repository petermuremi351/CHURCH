<!DOCTYPE html>
<html lang="en">
<head>
	<title>stpatrickcatholickilifi - Event Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="LibChurch Event Template">
	<meta name="keywords" content="event, libChurch, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lora:400,400i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}"/>
	<link rel="stylesheet" href="{{ asset('css/style.css') }}"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- header top section -->
	<div class="top-nav-section hidden-xs">
		<div class="container">
			<div class="row">
				<div class="col-sm-3 col-md-3 col-lg-3">
					<div class="social">
						<a href="#"><i class="ti-facebook"></i></a>
						<a href="#"><i class="ti-twitter-alt"></i></a>
						<a href="#"><i class="ti-google"></i></a>
						<a href="#"><i class="ti-instagram"></i></a>
					</div>
				</div>
				<div class="col-sm-6 col-md-7 col-lg-6">
					<div class="counter-top">
						<h5>Upcoming Event:</h5>
						<div class="counter">
							<div class="counter-item"><h4>10</h4>Days</div>
							<div class="counter-item"><h4>08</h4>hours</div>
							<div class="counter-item"><h4>40</h4>Mins</div>
							<div class="counter-item"><h4>56</h4>secs</div>
						</div>
						<a href="#" class="top-readmore hidden-sm">readmore</a>
					</div>
				</div>
				<div class="col-sm-3 col-md-2 col-lg-3">
					<div class="user-input">
						<a href="#">My account <i class="fa fa-angle-down"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- header top section end-->


	<!-- Header section  -->
	<header class="header-section">
		<div class="container">
			<!-- logo -->
			<a href="/" class="site-logo"><img src="img/logo.png" alt=""></a>
			<a href="" class="site-btn hidden-xs">send donation</a>
			<!-- nav menu -->
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<nav class="main-menu">
				<ul>
					<li class="active"><a href="/">Home</a></li>
					<li><a href="/about">About Us</a></li>
					<li><a href="/sermons">Sermons</a></li>
					<li><a href="/event">Event</a></li>
					<li><a href="/blog">blog</a></li>
					<li><a href="/contact">Contact</a></li>
				</ul>
			</nav>
		</div>
	</header>


    {{$slot}}
	<!-- Header section end -->


	{{-- <!-- Hero section -->
	<section class="hero-section set-bg" data-setbg="img/bg.jpg">
		<div class="hero-content">
			<div class="hc-inner">
				<div class="container">
					<h2>Living in God’s Amazing Grace!</h2>
					<p>For God did not send his Son into the world to condemn the world, but to save the world through him.</p>
					<a href="" class="site-btn sb-wide sb-line">join with us</a>
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end -->


	<!-- Event section -->
	<section class="event-section">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-lg-6">
					<!-- event info -->
					<div class="event-info">
						<div class="event-date">
							<h2>20</h2>
							may
						</div>
						<h3>Sponsor a Child</h3>
						<p><i class="fa fa-calendar"></i> 8:00 Am — 10:00 Am  <i class="fa fa-map-marker"></i> Central District, Riga, LV-1050, Latvia</p>
					</div>
				</div>
				<div class="col-md-7 col-lg-6">
					<!-- counter -->
					<div class="counter">
						<div class="counter-item"><h4>10</h4>Days</div>
						<div class="counter-item"><h4>08</h4>hours</div>
						<div class="counter-item"><h4>40</h4>Mins</div>
						<div class="counter-item"><h4>56</h4>secs</div>
					</div>
					<a href="" class="site-btn sb-light-line">Read more</a>
				</div>
			</div>
		</div>
	</section>
	<!-- Event section end -->


	<!-- About section -->
	<section class="about-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-6 about-content">
					<h2>Let's Make the World Better Together</h2>
					<p>For God did not send his Son into the world to condemn the world,<br> but to save the world through him.</p>
					<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui<br> officia dese mollit anim id est laborum. Sed ut perspiciatis<br> unde omnis iste.</p>
					<a href="" class="site-btn sb-wide">join with us</a>
				</div>
				<div class="col-md-6 about-img">
					<img src="{{ asset('img/about.jpg') }}" alt="">
				</div>
			</div>
		</div>
	</section>
	<!-- About section end -->


	<!-- Services section -->
	<section class="services-section spad">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="service-box">
						<h4><i class="fa fa-fire"></i>Our Values</h4>
						<p>Excepteur sint occaecat cupidatat non, <br> sunt in culpa qui officia dese mollit anim id est laborum. Sed ut perspiciatis unde omnis iste.</p>
						<a href="#" class="s-readmore">Readmore <i class="fa fa-angle-double-right"></i></a>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="service-box">
						<h4><i class="fa fa-eye"></i>Our Vision</h4>
						<p>Excepteur sint occaecat cupidatat non, <br> sunt in culpa qui officia dese mollit anim id est laborum. Sed ut perspiciatis unde omnis iste.</p>
						<a href="#" class="s-readmore">Readmore <i class="fa fa-angle-double-right"></i></a>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="service-box">
						<h4><i class="fa fa-heart"></i>Our Mission</h4>
						<p>Excepteur sint occaecat cupidatat non, <br> sunt in culpa qui officia dese mollit anim id est laborum. Sed ut perspiciatis unde omnis iste.</p>
						<a href="#" class="s-readmore">Readmore <i class="fa fa-angle-double-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Services section end -->


	<!-- Sermon section -->
	<section class="sermon-section spad">
		<div class="section-title">
			<span>Experience God's Presence</span>
			<h2>Sermon Today</h2>
		</div>
		<div class="sermon-warp">
			<div class="sermon-left-bg set-bg" data-setbg="{{ asset('img/sermon-bg.jpg') }}"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-6">
						<div class="sermon-content">
							<h2>Lord Is Sufficient For All Of Our Needs</h2>
							<ul class="sermon-info">
								<li>Sermon From: <span>Vincent John</span></li>
								<li>Categories: <span>God, Pray</span></li>
								<li><span>On Monday 23 DEC, 2018</span></li>
							</ul>
							<p>For God did not send his Son into the world to condemn the world, but to save the world through him.</p>
							<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia dese mollit anim id est laborum. Sed ut perspiciatis unde omnis iste.</p>
							<div class="icon-links">
								<a href=""><i class="ti-link"></i></a>
								<a href=""><i class="ti-zip"></i></a>
								<a href=""><i class="ti-headphone"></i></a>
								<a href=""><i class="ti-import"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Sermon section end -->


	<!-- Event list section -->
	<section class="event-list-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="section-title title-left">
						<span>Experience God's Presence</span>
						<h2>Upcoming Events</h2>
					</div>
				</div>
				<div class="col-md-6 text-right event-more">
					<a href="" class="site-btn">view all events</a>
				</div>
			</div>
			<div class="event-list">
				<!-- event list item -->
				<div class="el-item">
					<div class="row">
						<div class="col-md-4">
							<div class="el-thubm set-bg" data-setbg="{{ asset('img/event/1.jpg') }}"></div>
						</div>
						<div class="col-md-8">
							<div class="el-content">
								<div class="el-header">
									<div class="el-date">
										<h2>20</h2>
											may
									</div>
									<h3>Give To Help Each Child Grow Up Healthy</h3>
									<div class="el-metas">
										<div class="el-meta"><i class="fa fa-user"></i> Vincent John</div>
										<div class="el-meta"><i class="fa fa-calendar"></i> Monday, 08:00 Am </div>
										<div class="el-meta"><i class="fa fa-map-marker"></i> Central District, Riga, LV-1050, Latvia</div>
									</div>
								</div>
								<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>
								<a href="" class="site-btn sb-line">Read more</a>
							</div>
						</div>
					</div>
				</div>
				<!-- event list item -->
				<div class="el-item">
					<div class="row">
						<div class="col-md-4">
							<div class="el-thubm set-bg" data-setbg="{{ asset('img/event/2.jpg') }}"></div>
						</div>
						<div class="col-md-8">
							<div class="el-content">
								<div class="el-header">
									<div class="el-date">
										<h2>16</h2>
											oct
									</div>
									<h3>Your Support Helps Kids Survive & Thrive</h3>
									<div class="el-metas">
										<div class="el-meta"><i class="fa fa-user"></i> Vincent John</div>
										<div class="el-meta"><i class="fa fa-calendar"></i> Monday, 08:00 Am </div>
										<div class="el-meta"><i class="fa fa-map-marker"></i> Central District, Riga, LV-1050, Latvia</div>
									</div>
								</div>
								<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>
								<a href="" class="site-btn sb-line">Read more</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Event list section end-->


	<!-- Donate section -->
	<section class="donate-section spad set-bg" data-setbg="{{ asset('img/donate-bg.jpg') }}">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-7 donate-content">
					<h2>A Children’s Miracle Network Hospital</h2>
					<ul class="donate-info">
						<li>Sermon From: <span>Vincent John</span></li>
						<li>Categories: <span>God, Pray</span></li>
						<li><span>On Monday 23 DEC, 2018</span></li>
					</ul>
					<p>For God did not send his Son into the world to condemn the world, but to save the world through him. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia dese mollit anim id est laborum. Sed ut perspiciatis unde omnis iste.</p>
				</div>
				<div class="col-md-6 col-lg-5">
					<div class="donate-card">
						<h2>$45.000<span>Remaining to helps</span></h2>
						<div class="donate-progress-bar">
							<div class="pb-inner">
								<span>60%</span>
							</div>
						</div>
						<div class="donate-progress-info">
							<div class="di-left">
								Raised: <span>$50,000</span>
							</div>
							<div class="di-right">
								Goal: <span>$95,000</span>
							</div>
						</div>
						<a href="" class="site-btn sb-full">DONATE NOW</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Donate section end-->


	<!-- Blog section -->
	<section class="blog-section spad">
		<div class="container">
			<div class="section-title">
				<span>Experience God's Presence</span>
				<h2>LATEST NEWS</h2>
			</div>
			<div class="row">
				<div class="col-sm-6 col-md-4">
					<div class="blog-item">
						<div class="bi-thumb set-bg" data-setbg="{{ asset('img/blog/1.jpg') }}"></div>
						<div class="bi-content">
							<div class="date">On Monday 13 May, 2018</div>
							<h4><a href="single-blog.html">Give To End Childhood illnesses</a></h4>
							<div class="bi-author">by <a href="#">Sofia Joelsson</a></div>
							<a href="#" class="bi-cata">Hope & Faithful</a>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="blog-item">
						<div class="bi-thumb set-bg" data-setbg="{{ asset('img/blog/2.jpg') }}"></div>
						<div class="bi-content">
							<div class="date">On Monday 13 May, 2018</div>
							<h4><a href="single-blog.html">Meet Our 2018 Patient Ambassadors</a></h4>
							<div class="bi-author">by <a href="#">Sofia Joelsson</a></div>
							<a href="#" class="bi-cata">color Story</a>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="blog-item">
						<div class="bi-thumb set-bg" data-setbg="{{ asset('img/blog/3.jpg') }}"></div>
						<div class="bi-content">
							<div class="date">On Monday 13 May, 2018</div>
							<h4><a href="single-blog.html">Why We Give Back To Children's Colorado</a></h4>
							<div class="bi-author">by <a href="#">Sofia Joelsson</a></div>
							<a href="#" class="bi-cata">Sermon & Pray</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Blog section end-->


	<!-- Newsletter section -->
	<section class="newsletter-section">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-7">
					<h4>Subscribe And Tell Us Real Story About Your Journey</h4>
				</div>
				<div class="col-sm-8 col-md-5 col-sm-offset-2 col-md-offset-0">
					<form class="newsletter-form">
						<input type="email" placeholder="Enter your email">
						<button class="nl-send-btn">subscribe</button>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- Newsletter section end--> --}}


	<!-- Footer top section -->
	{{-- <section class="footer-top-section spad">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 footer-top-content">
					<div class="section-title title-left">
						<h2>Contact Us</h2>
					</div>
					<h3>New York, USA</h3>
					<p>207 Park Avenue New York, NY 90210</p>
					<p><span>Email:</span> info@colorlib.com</p>
					<h4>Phone:</h4>
					<h5>+1 (409) 987–4567</h5>
				</div>
			</div>
		</div> --}}
		<!-- googel map -->
		{{-- <div class="map-area" id="map-canvas"></div>
	</section> --}}
	<!-- Footer top section end-->


	<!-- Footer section -->



	<footer class="footer-section">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 copyright">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Developed <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Afrix Developers</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				</div>
				<div class="col-sm-6">
					<div class="social">
						<a href="#"><i class="ti-facebook"></i></a>
						<a href="#"><i class="ti-twitter-alt"></i></a>
						<a href="#"><i class="ti-google"></i></a>
						<a href="#"><i class="ti-instagram"></i></a>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('js/jquery.countdown.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>

	<!-- load for map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0YyDTa0qqOjIerob2VTIwo_XVMhrruxo"></script>
	<script src="{{ asset('js/map.js') }}"></script>

</body>
</html>
