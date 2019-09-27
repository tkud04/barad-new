@extends('layout')

@section('title',"Welcome")

@section('nav')
@include('home-nav')
@stop

@section('content')
@include('home-slider')

		<!-- upcomming-event-section - start
		================================================== -->
		<section id="upcomming-event-section" class="upcomming-event-section sec-ptb-100 clearfix">
			<div class="container">

				<!-- section-title - start -->
				<div class="section-title text-center mb-50">
					<small class="sub-title">upcomming events</small>
					<h2 class="big-title">Latest <strong>Awesome Events</strong></h2>
				</div>
				<!-- section-title - end -->

				<!-- upcomming-event-carousel - start -->
				<div id="upcomming-event-carousel" class="upcomming-event-carousel owl-carousel owl-theme">

                    <?php
					 foreach($events as $evt)
					 {
						 $xx = explode(' ',$evt['posted-at']);
				    ?>
					<!-- item - start -->
					<div class="item">
						<div class="event-item">

							<div class="countdown-timer">
								<ul class="countdown-list" data-countdown="{{$evt['deadline']}}"></ul>
							</div>

							<div class="event-image">
								<img src="{{$evt['img']}}" alt="Image_not_found">
								<div class="post-date">
									<span class="date">{{$xx[0]}}</span>
									<small class="month">{{$xx[1]}}</small>
								</div>
							</div>

							<div class="event-content">
								<div class="event-title mb-30">
									<h3 class="title">
										{{$evt['title']}}
									</h3>
									<span class="ticket-price yellow-color">Tickets from $52</span>
								</div>
								<div class="event-post-meta ul-li-block mb-30">
									<ul>
										<li>
											<span class="icon">
												<i class="far fa-clock"></i>
											</span>
											Start 20:00pm - 22:00pm
										</li>
										<li>
											<span class="icon">
												<i class="fas fa-map-marker-alt"></i>
											</span>
											Manhattan, New York
										</li>
									</ul>
								</div>
								<a href="#!" class="custom-btn">
									tickets & details
								</a>
							</div>

						</div>
					</div>
					<!-- item - end -->
                    <?php
					 }
				    ?>

				</div>
				<!-- upcomming-event-carousel - end -->

			</div>
		</section>
		<!-- upcomming-event-section - end
		================================================== -->





		<!-- about-section - start
		================================================== -->
		<section id="about-section" class="about-section sec-ptb-100 clearfix">
			<div class="container">
				<div class="row">

					<!-- section-title - start -->
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="section-title text-left mb-30">
							<span class="line-style"></span>
							<small class="sub-title">Barad events</small>
							<h2 class="big-title"><strong>No.1</strong> Events Management in Nigeria</h2>
							<p class="black-color mb-50">
								<b>Barad Innovations</b> is the leading event management company in Nigeria. Established in 2017, our goal has been to create bespoke exceptional events for our varied clientele.
We believe every event has got a brand/reputation to protect and promote, that is why we pay the utmost attention to detail in all our undertakings. 
							</p>
							<a href="{{url('about')}}" class="custom-btn">
								about us
							</a>
						</div>
					</div>
					<!-- section-title - end -->

					<!-- about-item-wrapper - start -->
					<div class="col-lg-8 col-md-12 col-sm-12">
						<div class="about-item-wrapper ul-li">
							<ul>

								<li>
									<a href="#!" class="about-item">
										<span class="icon">
											<i class="flaticon-handshake"></i>
										</span>
										<strong class="title">
											Friendly Team
										</strong>
										<small class="sub-title">
											More than 70 members
										</small>
									</a>
								</li>
								<li>
									<a href="#!" class="about-item">
										<span class="icon">
											<i class="flaticon-two-balloons"></i>
										</span>
										<strong class="title">
											perfect venues
										</strong>
										<small class="sub-title">
											in and out of Lagos
										</small>
									</a>
								</li>
								<li>
									<a href="#!" class="about-item">
										<span class="icon">
											<i class="flaticon-cheers"></i>
										</span>
										<strong class="title">
											Unique Scenarios
										</strong>
										<small class="sub-title">
											We think out of the box
										</small>
									</a>
								</li>

								<li>
									<a href="#!" class="about-item">
										<span class="icon">
											<i class="flaticon-clown-hat"></i>
										</span>
										<strong class="title">
											Unforgettable Time
										</strong>
										<small class="sub-title">
											We create an atmosphere your guests will NEVER forget
										</small>
									</a>
								</li>
								<li>
									<a href="#!" class="about-item">
										<span class="icon">
											<i class="flaticon-speech-bubble"></i>
										</span>
										<strong class="title">
											24/7 Support
										</strong>
										<small class="sub-title">
											Anytime anywhere
										</small>
									</a>
								</li>
								<li>
									<a href="#!" class="about-item">
										<span class="icon">
											<i class="flaticon-light-bulb"></i>
										</span>
										<strong class="title">
											Briliant Idea
										</strong>
										<small class="sub-title">
											We have a million ideas
										</small>
									</a>
								</li>

							</ul>
						</div>
					</div>
					<!-- about-item-wrapper - end -->
					
				</div>
			</div>
		</section>
		<!-- about-section - end
		================================================== -->





		<!-- conference-section - start
		================================================== -->
		<section id="conference-section" class="conference-section clearfix">
			<div class="jarallax" style="background-image: url(assets/images/conference/pexels-photo-262669.jpg);">
				<div class="overlay-black sec-ptb-100">

					<div class="mb-50">
						<div class="container">
							<div class="row">

								<!-- section-title - start -->
								<div class="col-lg-6 col-md-12 col-sm-12">
									<div class="section-title text-left">
										<span class="line-style"></span>
										<small class="sub-title">harmoni venues</small>
										<h2 class="big-title">Conference <strong>Rooms & Hotels</strong></h2>
									</div>
								</div>
								<!-- section-title - end -->

								<!-- conference-location - start -->
								<div class="col-lg-6 col-md-12 col-sm-12">
									<div class="conference-location ul-li clearfix">
										<ul>

											<!-- country-select - start -->
											<li class="country-select">
												<form action="#!">
													<label for="country">Country :</label>
													<select class="custom-select" id="country">
														<option selected>Netherland</option>
														<option value="1">USA</option>
														<option value="2">england</option>
														<option value="3">germany</option>
													</select>	
												</form>
											</li>
											<!-- country-select - end -->

											<!-- city-select - start -->
											<li class="city-select">
												<form action="#!">
													<label for="city">city :</label>
													<select class="custom-select" id="city">
														<option selected>Amsterdam</option>
														<option value="1">washington</option>
														<option value="2">london</option>
														<option value="3">berlin</option>
													</select>	
												</form>
											</li>
											<!-- city-select - end -->

										</ul>
									</div>
								</div>
								<!-- conference-location - end -->

							</div>
						</div>
					</div>

					<!-- conference-content-wrapper - start -->
					<div class="tab-wrapper">

						<!-- tab-menu - start -->
						<div class="container">
							<div class="row justify-content-lg-start">
								<div class="col-lg-6 col-md-12 col-sm-12">
									<div class="tab-menu">
										<ul class="nav tab-nav mb-50">

											<li class="nav-item">
												<a class="nav-link active" id="nav-one-tab" data-toggle="tab" href="#nav-one" aria-expanded="true">
													<span class="image">
														<img src="assets/images/conference/RCJAKPP_00016_coddddnversion.jpg" alt="Image_not_found">
													</span>
													<span class="title">
														<strong class="yellow-color">5 <i class="fas fa-star"></i> Chocolato </strong>
														Hotel
													</span>
													<small class="sub-title">Party Room 2.500 seats</small>
													<small class="price yellow-color">Price from $52/night</small>
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" id="nav-two-tab" data-toggle="tab" href="#nav-two" aria-expanded="false">
													<span class="image">
														<img src="assets/images/conference/fresh-conference-room-microphones-decoration-ideas-collection-gallery-to-conference-room-microphones-home-ideas.jpg" alt="Image_not_found">
													</span>
													<span class="title">
														<strong class="yellow-color">4 <i class="fas fa-star"></i> Vanila </strong>
														Hotel
													</span>
													<small class="sub-title">Party Room 2.500 seats</small>
													<small class="price yellow-color">Price from $52/night</small>
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" id="nav-three-tab" data-toggle="tab" href="#nav-three" aria-expanded="false">
													<span class="image">
														<img src="assets/images/conference/RCTORON_00047ss.jpg" alt="Image_not_found">
													</span>
													<span class="title">
														<strong class="yellow-color">3 <i class="fas fa-star"></i> Pear </strong>
														Hotel
													</span>
													<small class="sub-title">Party Room 2.500 seats</small>
													<small class="price yellow-color">Price from $52/night</small>
												</a>
											</li>

											<li class="nav-item">
												<a class="nav-link" id="nav-four-tab" data-toggle="tab" href="#nav-four" aria-expanded="false">
													<span class="image">
														<img src="assets/images/conference/clayton-hotel-leopardstown-meeting-room-1.jpg" alt="Image_not_found">
													</span>
													<span class="title">
														<strong class="yellow-color">5 <i class="fas fa-star"></i> Chocolato </strong>
														Hotel
													</span>
													<small class="sub-title">Party Room 2.500 seats</small>
													<small class="price yellow-color">Price from $52/night</small>
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" id="nav-five-tab" data-toggle="tab" href="#nav-five" aria-expanded="false">
													<span class="image">
														<img src="assets/images/conference/conference-room-with-projection-facilities-3d-model-max.jpg" alt="Image_not_found">
													</span>
													<span class="title">
														<strong class="yellow-color">4 <i class="fas fa-star"></i> Vanila </strong>
														Hotel
													</span>
													<small class="sub-title">Party Room 2.500 seats</small>
													<small class="price yellow-color">Price from $52/night</small>
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" id="nav-six-tab" data-toggle="tab" href="#nav-six" aria-expanded="false">
													<span class="image">
														<img src="assets/images/conference/midlands-park-hotel-meeting-rooms.jpg" alt="Image_not_found">
													</span>
													<span class="title">
														<strong class="yellow-color">3 <i class="fas fa-star"></i> pear </strong>
														Hotel
													</span>
													<small class="sub-title">Party Room 2.500 seats</small>
													<small class="price yellow-color">Price from $52/night</small>
												</a>
											</li>

										</ul>
										<div class="more-btn">
											<a href="#!">
												<strong class="yellow-color">VIEW ALL</strong> HOTEL & RESORT
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- tab-menu - end -->

						<!-- tab-content - start -->
						<div class="tab-content">
							<!-- tab-pane - start -->
							<div class="tab-pane fade active show" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab" aria-expanded="true">
								<div class="image">
									<img src="assets/images/conference/RCJAKPP_00016_coddddnversion.jpg" alt="Image_not_found">
									<a href="#!" class="custom-btn">
										booking now
									</a>
									<div class="badge-item">
										<div class="content">
											<i class="fas fa-star"></i>
											<strong>5.0</strong>
											<small>featured hotel</small>
										</div>
									</div>
								</div>
							</div>
							<!-- tab-pane - end -->

							<!-- tab-pane - start -->
							<div class="tab-pane fade" id="nav-two" role="tabpanel" aria-labelledby="nav-two-tab" aria-expanded="false">
								<div class="image">
									<img src="assets/images/conference/fresh-conference-room-microphones-decoration-ideas-collection-gallery-to-conference-room-microphones-home-ideas.jpg" alt="Image_not_found">
									<a href="#!" class="custom-btn">
										booking now
									</a>
									<div class="badge-item">
										<div class="content">
											<i class="fas fa-star"></i>
											<strong>5.0</strong>
											<small>featured hotel</small>
										</div>
									</div>
								</div>
							</div>
							<!-- tab-pane - end -->

							<!-- tab-pane - start -->
							<div class="tab-pane fade" id="nav-three" role="tabpanel" aria-labelledby="nav-three-tab" aria-expanded="false">
								<div class="image">
									<img src="assets/images/conference/RCTORON_00047ss.jpg" alt="Image_not_found">
									<a href="#!" class="custom-btn">
										booking now
									</a>
									<div class="badge-item">
										<div class="content">
											<i class="fas fa-star"></i>
											<strong>5.0</strong>
											<small>featured hotel</small>
										</div>
									</div>
								</div>
							</div>
							<!-- tab-pane - end -->

							<!-- tab-pane - start -->
							<div class="tab-pane fade" id="nav-four" role="tabpanel" aria-labelledby="nav-four-tab" aria-expanded="false">
								<div class="image">
									<img src="assets/images/conference/clayton-hotel-leopardstown-meeting-room-1.jpg" alt="Image_not_found">
									<a href="#!" class="custom-btn">
										booking now
									</a>
									<div class="badge-item">
										<div class="content">
											<i class="fas fa-star"></i>
											<strong>5.0</strong>
											<small>featured hotel</small>
										</div>
									</div>
								</div>
							</div>
							<!-- tab-pane - end -->

							<!-- tab-pane - start -->
							<div class="tab-pane fade" id="nav-five" role="tabpanel" aria-labelledby="nav-five-tab" aria-expanded="false">
								<div class="image">
									<img src="assets/images/conference/conference-room-with-projection-facilities-3d-model-max.jpg" alt="Image_not_found">
									<a href="#!" class="custom-btn">
										booking now
									</a>
									<div class="badge-item">
										<div class="content">
											<i class="fas fa-star"></i>
											<strong>5.0</strong>
											<small>featured hotel</small>
										</div>
									</div>
								</div>
							</div>
							<!-- tab-pane - end -->

							<!-- tab-pane - start -->
							<div class="tab-pane fade" id="nav-six" role="tabpanel" aria-labelledby="nav-six-tab" aria-expanded="false">
								<div class="image">
									<img src="assets/images/conference/midlands-park-hotel-meeting-rooms.jpg" alt="Image_not_found">
									<a href="#!" class="custom-btn">
										booking now
									</a>
									<div class="badge-item">
										<div class="content">
											<i class="fas fa-star"></i>
											<strong>5.0</strong>
											<small>featured hotel</small>
										</div>
									</div>
								</div>
							</div>
							<!-- tab-pane - end -->

						</div>
						<!-- tab-content - end -->

					</div>
					<!-- conference-content-wrapper - end -->

				</div>
			</div>
		</section>
		<!-- conference-section - end
		================================================== -->

@stop