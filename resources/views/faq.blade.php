@extends('layout')

@section('title',"Frequently Asked Questions")

@section('nav')
@include('nav-2')
@stop

@section('content')
<?php
$ajasa = "common questions asked";
?>
@include('slider-2')

		<!-- faq-section - start
		================================================== -->
		<section id="faq-section" class="faq-section sec-ptb-100 clearfix">
			<div class="container">

				<!-- section-title - start -->
				<div class="section-title mb-50">
					<div class="row">
						<div class="col-lg-8 col-md-12 col-sm-12">
							<h2 class="big-title">1. about <strong>account</strong></h2>
						</div>
						<div class="col-lg-4 col-md-12 col-sm-12">
							<div class="text-right">
								<a href="#!" class="custom-btn">make a question</a>
							</div>
						</div>
					</div>
				</div>
				<!-- section-title - end -->

				<!-- faq-content-wrapper - start -->
				<div class="faq-content-wrapper mb-80">
					<div class="row">

						<!-- faq-accordion - start -->
						<div class="col-lg-6 col-md-12 col-sm-12">
							<div id="faq-accordion" class="faq-accordion">

								<div class="card">
									<div class="card-header" id="headingone">
										<button class="btn collapsed" data-toggle="collapse" data-target="#collapseone" aria-expanded="true" aria-controls="collapseone">
											<span>01.</span> How to join Harmoni Event Management?
										</button>
									</div>

									<div id="collapseone" class="collapse" aria-labelledby="headingone" data-parent="#faq-accordion">
										<div class="card-body">
											<h3>answer</h3>
											Bring people together, or turn your passion into a business. Harmoni gives you everything you need to host your best event yet. lorem ipsum diamet.
										</div>
									</div>
								</div>

								<div class="card">
									<div class="card-header" id="headingtwo">
										<button class="btn" data-toggle="collapse" data-target="#collapsetwo" aria-expanded="false" aria-controls="collapsetwo">
											<span>02.</span> How to make my own event?
										</button>
									</div>
									<div id="collapsetwo" class="collapse show" aria-labelledby="headingtwo" data-parent="#faq-accordion">
										<div class="card-body">
											<h3>answer</h3>
											Bring people together, or turn your passion into a business. Harmoni gives you everything you need to host your best event yet. lorem ipsum diamet.
										</div>
									</div>
								</div>

								<div class="card">
									<div class="card-header" id="headingthree">
										<button class="btn collapsed" data-toggle="collapse" data-target="#collapsethree" aria-expanded="false" aria-controls="collapsethree">
											<span>03.</span> About the price to make new event?
										</button>
									</div>
									<div id="collapsethree" class="collapse" aria-labelledby="headingthree" data-parent="#faq-accordion">
										<div class="card-body">
											<h3>answer</h3>
											Bring people together, or turn your passion into a business. Harmoni gives you everything you need to host your best event yet. lorem ipsum diamet.
										</div>
									</div>
								</div>

								<div class="card">
									<div class="card-header" id="headingfour">
										<button class="btn collapsed" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
											<span>04.</span> About the price to make new event?
										</button>
									</div>
									<div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#faq-accordion">
										<div class="card-body">
											<h3>answer</h3>
											Bring people together, or turn your passion into a business. Harmoni gives you everything you need to host your best event yet. lorem ipsum diamet.
										</div>
									</div>
								</div>

							</div>
						</div>
						<!-- faq-accordion - end -->

						<!-- faq-accordion - start -->
						<div class="col-lg-6 col-md-12 col-sm-12">
							<div id="faq-accordion2" class="faq-accordion">

								<div class="card">
									<div class="card-header" id="headingfive">
										<button class="btn" data-toggle="collapse" data-target="#collapsfive" aria-expanded="true" aria-controls="collapsfive">
											<span>05.</span> How to join Harmoni Event Management?
										</button>
									</div>

									<div id="collapsfive" class="collapse show" aria-labelledby="headingfive" data-parent="#faq-accordion2">
										<div class="card-body">
											<h3>answer</h3>
											Bring people together, or turn your passion into a business. Harmoni gives you everything you need to host your best event yet. lorem ipsum diamet.
										</div>
									</div>
								</div>

								<div class="card">
									<div class="card-header" id="headingsix">
										<button class="btn collapsed" data-toggle="collapse" data-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
											<span>06.</span> How to make my own event?
										</button>
									</div>
									<div id="collapsesix" class="collapse" aria-labelledby="headingsix" data-parent="#faq-accordion2">
										<div class="card-body">
											<h3>answer</h3>
											Bring people together, or turn your passion into a business. Harmoni gives you everything you need to host your best event yet. lorem ipsum diamet.
										</div>
									</div>
								</div>

								<div class="card">
									<div class="card-header" id="headingseven">
										<button class="btn collapsed" data-toggle="collapse" data-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
											<span>07.</span> About the price to make new event?
										</button>
									</div>
									<div id="collapseseven" class="collapse" aria-labelledby="headingseven" data-parent="#faq-accordion2">
										<div class="card-body">
											<h3>answer</h3>
											Bring people together, or turn your passion into a business. Harmoni gives you everything you need to host your best event yet. lorem ipsum diamet.
										</div>
									</div>
								</div>

								<div class="card">
									<div class="card-header" id="headingeight">
										<button class="btn collapsed" data-toggle="collapse" data-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
											<span>08.</span> About the price to make new event?
										</button>
									</div>
									<div id="collapseeight" class="collapse" aria-labelledby="headingeight" data-parent="#faq-accordion2">
										<div class="card-body">
											<h3>answer</h3>
											Bring people together, or turn your passion into a business. Harmoni gives you everything you need to host your best event yet. lorem ipsum diamet.
										</div>
									</div>
								</div>

							</div>
						</div>
						<!-- faq-accordion - end -->
						
					</div>
				</div>
				<!-- faq-content-wrapper - end -->


				<!-- section-title - start -->
				<div class="section-title mb-50">
					<div class="row">
						<div class="col-lg-8 col-md-12 col-sm-12">
							<h2 class="big-title">2. about <strong>our events</strong></h2>
						</div>
						<div class="col-lg-4 col-md-12 col-sm-12">
							<div class="text-right">
								<a href="#!" class="custom-btn">make a question</a>
							</div>
						</div>
					</div>
				</div>
				<!-- section-title - end -->

				<!-- faq-content-wrapper - start -->
				<div class="faq-content-wrapper">
					<div class="row">

						<!-- faq-accordion - start -->
						<div class="col-lg-6 col-md-12 col-sm-12">
							<div id="faq-accordion3" class="faq-accordion">

								<div class="card">
									<div class="card-header" id="headingnine">
										<button class="btn collapsed" data-toggle="collapse" data-target="#collapsenine" aria-expanded="true" aria-controls="collapsenine">
											<span>01.</span> How to join Harmoni Event Management?
										</button>
									</div>

									<div id="collapsenine" class="collapse" aria-labelledby="headingnine" data-parent="#faq-accordion3">
										<div class="card-body">
											<h3>answer</h3>
											Bring people together, or turn your passion into a business. Harmoni gives you everything you need to host your best event yet. lorem ipsum diamet.
										</div>
									</div>
								</div>

								<div class="card">
									<div class="card-header" id="headingten">
										<button class="btn" data-toggle="collapse" data-target="#collapseten" aria-expanded="false" aria-controls="collapseten">
											<span>02.</span> How to make my own event?
										</button>
									</div>
									<div id="collapseten" class="collapse show" aria-labelledby="headingten" data-parent="#faq-accordion3">
										<div class="card-body">
											<h3>answer</h3>
											Bring people together, or turn your passion into a business. Harmoni gives you everything you need to host your best event yet. lorem ipsum diamet.
										</div>
									</div>
								</div>

								<div class="card">
									<div class="card-header" id="headingeleven">
										<button class="btn collapsed" data-toggle="collapse" data-target="#collapseeleven" aria-expanded="false" aria-controls="collapseeleven">
											<span>03.</span> About the price to make new event?
										</button>
									</div>
									<div id="collapseeleven" class="collapse" aria-labelledby="headingeleven" data-parent="#faq-accordion3">
										<div class="card-body">
											<h3>answer</h3>
											Bring people together, or turn your passion into a business. Harmoni gives you everything you need to host your best event yet. lorem ipsum diamet.
										</div>
									</div>
								</div>

								<div class="card">
									<div class="card-header" id="headingtwelve">
										<button class="btn collapsed" data-toggle="collapse" data-target="#collapsetwelve" aria-expanded="false" aria-controls="collapsetwelve">
											<span>04.</span> About the price to make new event?
										</button>
									</div>
									<div id="collapsetwelve" class="collapse" aria-labelledby="headingtwelve" data-parent="#faq-accordion3">
										<div class="card-body">
											<h3>answer</h3>
											Bring people together, or turn your passion into a business. Harmoni gives you everything you need to host your best event yet. lorem ipsum diamet.
										</div>
									</div>
								</div>

							</div>
						</div>
						<!-- faq-accordion - end -->

						<!-- faq-accordion - start -->
						<div class="col-lg-6 col-md-12 col-sm-12">
							<div id="faq-accordion4" class="faq-accordion">

								<div class="card">
									<div class="card-header" id="headingthirteen">
										<button class="btn" data-toggle="collapse" data-target="#collapsthirteen" aria-expanded="true" aria-controls="collapsthirteen">
											<span>05.</span> How to join Harmoni Event Management?
										</button>
									</div>

									<div id="collapsthirteen" class="collapse show" aria-labelledby="headingthirteen" data-parent="#faq-accordion4">
										<div class="card-body">
											<h3>answer</h3>
											Bring people together, or turn your passion into a business. Harmoni gives you everything you need to host your best event yet. lorem ipsum diamet.
										</div>
									</div>
								</div>

								<div class="card">
									<div class="card-header" id="headingfourteen">
										<button class="btn collapsed" data-toggle="collapse" data-target="#collapsefourteen" aria-expanded="false" aria-controls="collapsefourteen">
											<span>06.</span> How to make my own event?
										</button>
									</div>
									<div id="collapsefourteen" class="collapse" aria-labelledby="headingfourteen" data-parent="#faq-accordion4">
										<div class="card-body">
											<h3>answer</h3>
											Bring people together, or turn your passion into a business. Harmoni gives you everything you need to host your best event yet. lorem ipsum diamet.
										</div>
									</div>
								</div>

								<div class="card">
									<div class="card-header" id="headingfifteen">
										<button class="btn collapsed" data-toggle="collapse" data-target="#collapsefifteen" aria-expanded="false" aria-controls="collapsefifteen">
											<span>07.</span> About the price to make new event?
										</button>
									</div>
									<div id="collapsefifteen" class="collapse" aria-labelledby="headingfifteen" data-parent="#faq-accordion4">
										<div class="card-body">
											<h3>answer</h3>
											Bring people together, or turn your passion into a business. Harmoni gives you everything you need to host your best event yet. lorem ipsum diamet.
										</div>
									</div>
								</div>

								<div class="card">
									<div class="card-header" id="headingsixteen">
										<button class="btn collapsed" data-toggle="collapse" data-target="#collapsesixteen" aria-expanded="false" aria-controls="collapsesixteen">
											<span>08.</span> About the price to make new event?
										</button>
									</div>
									<div id="collapsesixteen" class="collapse" aria-labelledby="headingsixteen" data-parent="#faq-accordion4">
										<div class="card-body">
											<h3>answer</h3>
											Bring people together, or turn your passion into a business. Harmoni gives you everything you need to host your best event yet. lorem ipsum diamet.
										</div>
									</div>
								</div>

							</div>
						</div>
						<!-- faq-accordion - end -->
						
					</div>
				</div>
				<!-- faq-content-wrapper - end -->

			</div>
		</section>
		<!-- faq-section - end
		================================================== -->




@stop