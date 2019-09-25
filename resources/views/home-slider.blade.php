		<!-- slide-section - start
		================================================== -->
		<section id="slide-section" class="slide-section clearfix">
			<div id="main-carousel1" class="main-carousel1 owl-carousel owl-theme">

                <?php
				 foreach($sliders as $s)
				 {
				?>
				<div class="item" style="background-image: url(assets/images/slider/slider-bg1.jpg);">
					<div class="overlay-black">
						<div class="container">
							<div class="slider-item-content">

								<span class="medium-text">{{$s['text-1']}}</span>
								<h1 class="big-text">{{$s['text-2']}}</h1>
								<small class="small-text">{{$s['text-3']}}</small>

								<div class="link-groups">
									<a href="{{url('about')}}" class="about-btn custom-btn">about us</a>
									<a href="{{url('book')}}" class="start-btn">book us</a>
								</div>

							</div>
						</div>
					</div>
				</div>
				<?php
				 }
				?>
				

			</div>
		</section>
		<!-- slide-section - end
		================================================== -->