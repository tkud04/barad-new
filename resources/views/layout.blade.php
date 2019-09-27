
<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">

		<title>@yield('title') | Barad Innovations NG</title>
		<link rel="shortcut icon" href="assets/images/logo.jpg">

		<!-- fraimwork - css include -->
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

		<!-- icon css include -->
		<link rel="stylesheet" type="text/css" href="assets/css/fontawesome-all.css">
		<link rel="stylesheet" type="text/css" href="assets/css/flaticon.css">

		<!-- carousel css include -->
		<link rel="stylesheet" type="text/css" href="assets/css/slick.css">
		<link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css">
		<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
		<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/owl.theme.default.min.css">

		<!-- others css include -->
		<link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
		<link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/calendar.css">

		<!-- color switcher css include -->
		<link rel="stylesheet" type="text/css" href="assets/css/colors/style-switcher.css">
		<link id="color_theme" rel="stylesheet" type="text/css" href="assets/css/colors/color-3.css">

		<!-- custom css include -->
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">

	</head>


	<body>




		
		<!-- backtotop - start -->
		<div id="thetop" class="thetop"></div>
		<div class='backtotop'>
			<a href="#thetop" class='scroll'>
				<i class="fas fa-angle-double-up"></i>
			</a>
		</div>
		<!-- backtotop - end -->

		<!-- preloader - start -->
		<div id="preloader"></div>
		<!-- preloader - end -->
		
		
		<?php 
		//include("home-nav.php");
		//include("nav-2.php");
		?>
		
		@yield('nav')
		
		
			<!-- altranative-header - start
		================================================== -->
		<div class="header-altranative">
			<div class="container">
				<div class="logo-area float-left">
					<a href="{{url('/')}}">
						<img src="assets/images/logo.jpg" style="height: 50px; width: 141px;" alt="logo_not_found">
					</a>
				</div>

				<button type="button" id="sidebarCollapse" class="alt-menu-btn float-right">
					<i class="fas fa-bars"></i>
				</button>
			</div>

			<!-- sidebar menu - start -->
			<div class="sidebar-menu-wrapper">
				<div id="sidebar" class="sidebar">
					<span id="sidebar-dismiss" class="sidebar-dismiss">
						<i class="fas fa-arrow-left"></i>
					</span>

					<div class="sidebar-header">
						<a href="#!">
							<img src="assets/images/logo.jpg" style="height: 50px; width: 141px;" alt="logo_not_found">
						</a>
					</div>

					<!-- sidebar-form - start -->
					<div class="sidebar-form">
						<form action="#">
							<input id="altmenu-sidebar-search" type="search" placeholder="Search">
							<label for="altmenu-sidebar-search"><i class="fas fa-search"></i></label>
						</form>
					</div>
					<!-- sidebar-form - end -->

					<!-- main-pages-links - start -->
					<div class="menu-link-list main-pages-links">
						<h2 class="menu-title">Main links</h2>
						<ul>
							<li class="active">
								<a href="{{url('/')}}">
									<span class="icon"><i class="fas fa-home"></i></span>
									Home
								</a>
							</li>
							<li>
								<a href="{{url('about')}}">
									<span class="icon"><i class="fas fa-home"></i></span>
									About
								</a>
							</li>
							<li>
								<a href="{{url('services')}}">
									<span class="icon"><i class="fas fa-home"></i></span>
									Services
								</a>
							</li>
							<li>
								<a href="{{url('faq')}}">
									<span class="icon"><i class="fas fa-home"></i></span>
									FAQ
								</a>
							</li>
						</ul>
					</div>
					<!-- main-pages-links - end -->

					<!-- other-pages-links - start -->
					<div class="menu-link-list other-pages-links">
						<h2 class="menu-title">spend time</h2>
						<ul>
							<li>
								<a href="{{url('gallery')}}">
									<span class="icon"><i class="fas fa-home"></i></span>
									Gallery
								</a>
							</li>
							<li>
								<a href="{{url('events')}}">
									<span class="icon"><i class="fas fa-home"></i></span>
									Events
								</a>
							</li>
							<li>
								<a href="{{url('blog')}}">
									<span class="icon"><i class="fas fa-home"></i></span>
									Blog
								</a>
							</li>
							
							<li>
								<a href="{{url('contact')}}">
									<span class="icon"><i class="fas fa-home"></i></span>
									contact us
								</a>
							</li>
						</ul>
					</div>
					<!-- other-pages-links - end -->


					<!-- login-btn-group - start -->
					<div class="login-btn-group">
						<ul>

							<li>
								<a href="#alt-login-modal" class="login-modal-btn">
									Login
								</a>
								<div id="alt-login-modal" class="reglog-modal-wrapper mfp-hide clearfix" style="background-image: url(assets/images/login-modal-bg.jpg);">
									<div class="overlay-black clearfix">

										<!-- leftside-content - start -->
															<div class="leftside-content">
																<div class="site-logo-wrapper mb-80">
																	<a href="#!" class="logo">
																		<img src="assets/images/logo.jpg" style="width: 300px;" alt="logo_not_found">
																	</a>
																</div>
																<div class="register-login-link mb-80">
																	<ul>
																		<li class="active"><a id="log-m" href="#!">Login</a></li>
															            
		
																	</ul>
																</div>
																<div class="copyright-text">
																<p class="m-0 text-white">&copy; <script>document.write(new Date().getFullYear());</script>  <a href="#!" class="site-link">Barad Events,</a> all right reserved | <i class="fas fa-bolt"></i> Powered by <a href="http://www.disenado.com.ng" class="author-link" target="_blank"><strong>Disenado NG</strong></a></p>
																</div>
															</div>
															<!-- leftside-content - end -->

															<!-- rightside-content - start -->
															<div class="rightside-content text-center">

																<div class="mb-30">
																	<h2 class="form-title title-large white-color"> <strong>Login</strong></h2>
																	<span class="form-subtitle white-color">Login to access your dashboard</span>
																</div>

																<div class="fb-login-btn mb-30">
																	<a href="#!">
																		<span class="icon">
																			<i class="fab fa-facebook-f"></i>
																		</span>
																		login with facebook
																	</a>
																</div>

																<div class="or-text mb-30">
																	<span>or sign in</span>
																</div>

																<div class="login-form text-center mb-50">
																	<form action="#!">
																		<div class="form-item">
																			<input type="email" placeholder="example@gmail.com">
																		</div>
																		<div class="form-item">
																			<input type="password" placeholder="Password">
																		</div>
																		<button type="submit" class="login-btn">login now</button>
																	</form>
																</div>

																<div class="bottom-text white-color">
																	<p class="m-0">
																		* Denotes mandatory field.
																	</p>																	
																	</div>

															</div>
															<!-- rightside-content - end -->

										<a class="popup-modal-dismiss" href="#!">
											<i class="fas fa-times"></i>
										</a>

									</div>
								</div>
							</li>
							
						</ul>
					</div>
					<!-- login-btn-group - end -->

					<!-- social-links - start -->
					<div class="social-links">
						<h2 class="menu-title">get in touch</h2>
						<div class="mb-15">
							<h3 class="contact-info">
								<i class="fas fa-phone"></i>
								(234) 805 123 4576
							</h3>
							<h3 class="contact-info">
								<i class="fas fa-envelope"></i>
								info@baradinnovations.com.ng
							</h3>
						</div>
						<ul>
							<li>
								<a href="#!"><i class="fab fa-facebook-f"></i></a>
							</li>
							<li>
								<a href="#!"><i class="fab fa-instagram"></i></a>
							</li>
						</ul>
						<a href="{{url('contact')}}" class="contact-btn">contact us</a>
					</div>
					<!-- social-links - end -->

					<div class="overlay"></div>
				</div>
			</div>
			<!-- sidebar menu - end -->
		</div>
		<!-- altranative-header - end
		================================================== -->



<!--------- Session notifications-------------->
        	<?php
               $pop = ""; $val = "";
               
               if(isset($signals))
               {
                  foreach($signals['okays'] as $key => $value)
                  {
                    if(session()->has($key))
                    {
                  	$pop = $key; $val = session()->get($key);
                    }
                 }
              }
              
             ?> 

                 @if($pop != "" && $val != "")
                   @include('session-status',['pop' => $pop, 'val' => $val])
                 @endif
        	<!--------- Input errors -------------->
                    @if (count($errors) > 0)
                          @include('input-errors', ['errors'=>$errors])
                     @endif
					 
@yield('content')


			<!-- testimonial5-section - start
		================================================== -->
		<section id="testimonial5-section" class="testimonial5-section sec-ptb-100 clearfix">
			<div class="container">

				<!-- section-title - start -->
				<div class="section-title text-center mb-80 sr-fade1">
					<small class="sub-title">testimonials</small>
					<h2 class="big-title">clients <strong>testimonial</strong></h2>
				</div>
				<!-- section-title - end -->

				<!-- testimonial5-carousel - start -->
				<div id="testimonial5-carousel" class="testimonial5-carousel sr-fade2 owl-carousel owl-theme">

					<div class="item text-center">
						<span class="quote-icon">
							<i class="fas fa-quote-right"></i>
						</span>
						<p class="clients-comment">
							“My wedding was an absolute success, thanks so much guys”
						</p>
						<div class="client-info">
							<h3 class="client-name">Jenni Hernandes</h3>
							<span class="client-sub-title">Graphic Designer</span>
						</div>
					</div>

					<div class="item text-center">
						<span class="quote-icon">
							<i class="fas fa-quote-right"></i>
						</span>
						<p class="clients-comment">
							“My wedding was an absolute success, thanks so much guys”
						</p>
						<div class="client-info">
							<h3 class="client-name">Jenni Hernandes</h3>
							<span class="client-sub-title">Graphic Designer</span>
						</div>
					</div>

					<div class="item text-center">
						<span class="quote-icon">
							<i class="fas fa-quote-right"></i>
						</span>
						<p class="clients-comment">
							“My wedding was an absolute success, thanks so much guys”
						</p>
						<div class="client-info">
							<h3 class="client-name">Jenni Hernandes</h3>
							<span class="client-sub-title">Graphic Designer</span>
						</div>
					</div>

					<div class="item text-center">
						<span class="quote-icon">
							<i class="fas fa-quote-right"></i>
						</span>
						<p class="clients-comment">
							“My wedding was an absolute success, thanks so much guys”
						</p>
						<div class="client-info">
							<h3 class="client-name">Jenni Hernandes</h3>
							<span class="client-sub-title">Graphic Designer</span>
						</div>
					</div>

				</div>
				<!-- testimonial5-carousel - end -->

			</div>
		</section>
		<!-- testimonial5-section - end
		================================================== -->


<!-- special-offer-section - start
		================================================== -->
		<section id="special-offer-section" class="special-offer-section clearfix" style="background-image: url(assets/images/special-offer-bg.png);">
			<div class="container">
				<div class="row">

					<!-- special-offer-content - start -->
					<div class="col-lg-9">
						<div class="special-offer-content">
							<h2>Looking for something <span>special for your moment?</span></h2>
							<p class="m-0">
								Book us now and we will make your event unique & unforgettable
							</p>
						</div>
					</div>
					<!-- special-offer-content - end -->

					<!-- event-makeing-btn - start -->
					<div class="col-lg-3">
						<div class="event-makeing-btn">
							<a href="{{url('book')}}">book us</a>
						</div>
					</div>
					<!-- event-makeing-btn - end -->

				</div>
			</div>
		</section>
		<!-- special-offer-section - end
		================================================== -->





		<!-- google map - start
		================================================== -->
		<section id="map-section" class="map-section clearfix">
			<div class="address-wrapper">

				<!-- address-info-topbar - start -->
				<div class="address-info-topbar mb-30 clearfix">
					<div class="address-info-left">
						<h3 class="title-text">barad events</h3>
						<p class="m-0">
							Oworonshoki<br>
							Lagos, Nigeria
						</p>
					</div>

					<div class="address-info-right">
						<ul>
							<li>
								<button type="button">
									<span class="icon"><i class="fas fa-street-view"></i></span>
									<small>Direction</small>
								</button>
							</li>
							<li>
								<button type="button">
									<span class="icon"><i class="fas fa-rss"></i></span>
									<small>Save</small>
								</button>
							</li>
						</ul>
					</div>
				</div>
				<!-- address-info-topbar - end -->

				<!-- address-info-bottombar - start -->
				<div class="address-info-bottombar clearfix">
					<div class="address-info-left">
						<div class="rating-star">
							<span class="rating-point">4.5</span>
							<ul>
								<li><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star-half"></i></li>
							</ul>
						</div>
						<p class="m-0">105 reviews</p>
					</div>

					<div class="address-info-right">
						<button type="button" class="map-larger-btn">
							view larger map
						</button>
					</div>
				</div>
				<!-- address-info-bottombar - end -->
					
			</div>
			<div id="google-map">
				<div id="googleMaps" class="google-map-container"></div>
			</div>
		</section>
		<!-- google map - end
		================================================== -->





		<!-- default-footer-section - start
		================================================== -->
		<footer id="footer-section" class="footer-section default-footer-section clearfix">

			<!-- footer-top - start -->
			<div class="footer-top sec-ptb-100 clearfix">
				<div class="container">
					<div class="row">

						<!-- basic-info - start -->
						<div class="col-lg-12 col-md-12 col-md-12">
							<div class="basic-info mb-50 clearfix">
								<div class="row">

									<!-- basic-info-item - start -->
									<div class="col-lg-4 col-md-6 col-sm-12">
										<div class="basic-info-item">
											<span class="icon">
												<i class="fas fa-map-marker-alt"></i>
											</span>
											<div class="info-content">
												<p>Oworonshoki</p>
												<h3>Lagos, NG</h3>
											</div>
										</div>
									</div>
									<!-- basic-info-item - end -->

									<!-- basic-info-item - start -->
									<div class="col-lg-4 col-md-6 col-sm-12">
										<div class="basic-info-item">
											<span class="icon">
												<i class="fas fa-envelope"></i>
											</span>
											<div class="info-content">
												<p><a href="#!">email us</a></p>
												<h3><a href="mailto:info@baradinnovations.com.ng">click here</a></h3>
											</div>
										</div>
									</div>
									<!-- basic-info-item - end -->

									<!-- basic-info-item - start -->
									<div class="col-lg-4 col-md-6 col-sm-12">
										<div class="basic-info-item">
											<span class="icon">
												<i class="fas fa-phone"></i>
											</span>
											<div class="info-content">
												<p><a href="#!">phone</a></p>
												<h3><a href="tel://2347081234576">(234) 708 123 4576</a></h3>
											</div>
										</div>
									</div>
									<!-- basic-info-item - end -->
									
								</div>
							</div>
						</div>
						<!-- basic-info - end -->

						<!-- about-wrapper - start -->
						<div class="col-lg-3 col-md-6 col-sm-12">
							<div class="about-wrapper">

								<!-- site-logo-wrapper - start -->
								<div class="site-logo-wrapper mb-30">
									<a href="{{url('/')}}" class="logo">
										<img src="assets/images/logo.jpg" style="height: 50px; width: 141px;" alt="logo_not_found">
										<img src="assets/images/logo.jpg" style="height: 50px; width: 141px;" alt="logo_not_found">
									</a>
								</div>
								<!-- site-logo-wrapper - end -->

								<p class="mb-30 text-white">
									We are a creative event management company.<br> We are passionate about creating a one-of-a-kind experience for your wedding or event occassions
								</p>

								<!-- social-links - start -->
								<div class="social-links ul-li">
									<h3 class="social-title">network</h3>
									<ul>
										<li>
											<a href="#!"><i class="fab fa-facebook-f"></i></a>
										</li>
										<li>
											<a href="#!"><i class="fab fa-twitter"></i></a>
										</li>
										<li>
											<a href="#!"><i class="fab fa-instagram"></i></a>
										</li>
									</ul>
								</div>
								<!-- social-links - end -->
								
							</div>
						</div>
						<!-- about-wrapper - end -->

						<!-- usefullinks-wrapper - start -->
						<div class="col-lg-3 col-md-6 col-sm-12">
							<div class="usefullinks-wrapper ul-li-block">
								<h3 class="footer-item-title">
									useful <strong>links</strong>
								</h3>
								<ul>
									<li><a href="{{url('/')}}">Home</a></li>
									<li><a href="{{url('about')}}">About Us</a></li>
									<li><a href="{{url('services')}}">Services</a></li>
								</ul>
								
							</div>
						</div>
						<!-- usefullinks-wrapper - end -->

						<!-- usefullinks-wrapper - start -->
						<div class="col-lg-3 col-md-6 col-sm-12">
							<div class="usefullinks-wrapper ul-li-block">
								<h3 class="footer-item-title">
									useful <strong>links</strong>
								</h3>
								<ul>
									<li><a href="{{url('gallery')}}">Gallery</a></li>
									<li><a href="{{url('faq')}}">FAQ</a></li>
									<li><a href="{{url('contact')}}">Contact us</a></li>
								
							</div>
						</div>
						<!-- usefullinks-wrapper - end -->

						<!-- instagram-wrapper - start -->
						<div class="col-lg-3 col-md-6 col-sm-12">
							<div class="instagram-wrapper ul-li">
								<h3 class="footer-item-title">
								 <strong>instagram</strong> feeds
								</h3>
								<ul>
									<li class="image-wrapper">
										<img src="assets/images/footer/instagram/img1.png" alt="Image_not_found">
										<a href="#!"><i class="fab fa-instagram"></i></a>
									</li>
									<li class="image-wrapper">
										<img src="assets/images/footer/instagram/img2.png" alt="Image_not_found">
										<a href="#!"><i class="fab fa-instagram"></i></a>
									</li>
									<li class="image-wrapper">
										<img src="assets/images/footer/instagram/img3.png" alt="Image_not_found">
										<a href="#!"><i class="fab fa-instagram"></i></a>
									</li>
									<li class="image-wrapper">
										<img src="assets/images/footer/instagram/img4.png" alt="Image_not_found">
										<a href="#!"><i class="fab fa-instagram"></i></a>
									</li>
								</ul>
								<h4 class="followus-link">
									Follow Our Instagram <a href="#!">#baradevents</a>
								</h4>
							</div>
						</div>
						<!-- instagram-wrapper - end -->

					</div>
				</div>
			</div>
			<!-- footer-top - end -->

			<div class="footer-bottom">
				<div class="container">
					<div class="row">

						<!-- copyright-text - start -->
						<div class="col-lg-7 col-md-12 col-sm-12">
							<div class="copyright-text">
								<p class="m-0 text-white">&copy; <script>document.write(new Date().getFullYear());</script>  <a href="#!" class="site-link">Barad Events,</a> all right reserved | <i class="fas fa-bolt"></i> Powered by <a href="http://www.disenado.com.ng" class="author-link" target="_blank"><strong>Disenado NG</strong></a></p>
							</div>
						</div>
						<!-- copyright-text - end -->

						<!-- footer-menu - start -->
						<div class="col-lg-5 col-md-12 col-sm-12">
							<div class="footer-menu">
								<ul>
									<li><a href="{{url('contact')}}">Contact us</a></li>
									<li><a href="{{url('about')}}">About us</a></li>
									<li><a href="{{url('sitemap')}}">Site map</a></li>
									<li><a href="{{url('privacy')}}">Privacy policy</a></li>
								</ul>
							</div>
						</div>
						<!-- footer-menu - end -->

					</div>
				</div>
			</div>

		</footer>
		<!-- default-footer-section - end
		================================================== -->










		<!-- fraimwork - jquery include -->
		<script src="assets/js/jquery-3.3.1.min.js"></script>
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>

		<!-- carousel jquery include -->
		<script src="assets/js/slick.min.js"></script>
		<script src="assets/js/owl.carousel.min.js"></script>

		<!-- map jquery include -->
		<script src="assets/js/gmap3.min.js"></script>
		<script src="http://maps.google.com/maps/api/js?key=AIzaSyC61_QVqt9LAhwFdlQmsNwi5aUJy9B2SyA"></script>

		<!-- calendar jquery include -->
		<script src="assets/js/atc.min.js"></script>

		<!-- others jquery include -->
		<script src="assets/js/jquery.magnific-popup.min.js"></script>
		<script src="assets/js/isotope.pkgd.min.js"></script>
		<script src="assets/js/jarallax.min.js"></script>
		<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>

		<!-- gallery img loaded - jqury include -->
		<script src="assets/js/imagesloaded.pkgd.min.js"></script>

		<!-- multy count down - jqury include -->
		<script src="assets/js/jquery.countdown.js"></script>


		<!-- custom jquery include -->
		<script src="assets/js/custom.js"></script>
		
		<!-- custom js -->
		<script src="assets/js/me.js"></script>





	</body>
</html>
