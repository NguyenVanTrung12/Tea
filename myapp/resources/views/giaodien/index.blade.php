@extends('giaodien.index')

@section('title', 'Trang Chủ')

@section('main')

<div id="banner">
        <div class="slider-wrapper">
            <div class="nivoSlider">
                <img src="../images/home/slider/slider-1.jpg" alt="" title="#nivoCaption-1" /> <img
                    src="../images/home/slider/slider-2.jpg" alt="" title="#nivoCaption-2" /> <img
                    src="../images/home/slider/slider-3.jpg" alt="" title="" />
            </div>
            <div id="nivoCaption-1" class="nivo-html-caption">
                <div class="nivo-caption-img-1 animated animation-delay-50" data-animate="fadeInUp">
                    <img alt="" src="../images/home/slider/img-1.png">
                </div>
                <div class="nivo-caption-img-2 animated" data-animate="fadeInUp">
                    <img alt="" src="../images/home/slider/img-2.png">
                </div>
                <div class="nivo-caption-content">
                    <h1 class="line-title title animated animation-delay-75" data-animate="fadeInUp">
                        Advertising based<i class="fa">&#xf111;</i>
                    </h1>
                    <p class="desc animated animation-delay-100" data-animate="fadeInUp">Coffee culture is a
                        great coffee
                        taste and it rests on the basis of responsible &amp; respectful</p>
                </div>
            </div>
            <div id="nivoCaption-2" class="nivo-html-caption">
                <div class="nivo-caption-img-1 animated" data-animate="fadeInUp">
                    <img alt="" src="../images/home/slider/img-3.png">
                </div>
                <div class="nivo-caption-img-2 animated animation-delay-50" data-animate="fadeInUp">
                    <img alt="" src="../images/home/slider/img-4.png">
                </div>
                <div class="nivo-caption-content">
                    <h1 class="line-title title animated animation-delay-75" data-animate="fadeInUp">
                        Pack a big punch<i class="fa">&#xf111;</i>
                    </h1>
                    <p class="desc animated animation-delay-100" data-animate="fadeInUp">Grown traditionally,
                        harvested
                        naturally and roasted lovingly, they're the star of every cup</p>
                </div>
            </div>
        </div>
    </div>
<section id="infoUs" class="section infoUs"
				style="background-image: url(../images/home/info/info-bg.jpg); background-position: right center; background-repeat: no-repeat;">
				<div class="container">
					<div class="row">
						<div class="col-sm-6 col-sm-push-6">
							<figure>
								<img alt="" src="../images/home/info/info-img-1.png" class="animated" data-animate="fadeInRight animation animation-delay-25">
								<img alt="" src="../images/home/info/info-img-2.png" class="animated" data-animate="fadeInRight animation">
							</figure>
						</div>

						<div class="col-sm-6 col-sm-pull-6">
							<h1 class="title line-title">
								Welcome to our Retation<i class="fa">&#xf111;</i>
							</h1>
							<aside>
								<p>Cmspresso is the process that slowly and gradually
									releases the purest of essence. As tea leaves unravel and
									coffee patiently drips, it is the best representation of the
									making of tea and coffee. We want the tea and coffee from
									Cmspresso to express their many levels of character through a
									thoughtful and caring hand.</p>
								<p>Cmspresso is a concept that we wish to pass for-ward.
									Cmspresso means a healthy and positive outlook for the adopters
									of this great attitude.</p>
							</aside>
						</div>
					</div>
				</div>
			</section>

			<section id="services" class="section services"
				style="background-image: url(../images/home/services/bg_menu.jpg); background-repeat: no-repeat; background-position: center top; background-size: 100% auto;">
				<div class="container">
					<!--
					<ul class="service-effect">
						<li><img alt="" src="../images/home/services/service-1.png"  class="animated animation-duration-15" data-animate="fadeInLeft animation"></li>
						<li><img alt="" src="../images/home/services/service-2.png"  class="animated animation-duration-15" data-animate="fadeInDown animation"></li>
						<li><img alt="" src="../images/home/services/service-3.png"  class="animated animation-duration-15" data-animate="fadeInDown animation"></li>
						<li><img alt="" src="../images/home/services/service-4.png"  class="animated animation-duration-15" data-animate="fadeInDown animation"></li>
						<li><img alt="" src="../images/home/services/service-5.png"  class="animated animation-duration-15" data-animate="fadeInDown animation"></li>
						<li><img alt="" src="../images/home/services/service-6.png"  class="animated animation-duration-15" data-animate="fadeInRight animation"></li>
					</ul> -->
					<ul id="services-item">
						<li class="service">
							<aside>
								<div class="service-inner">
									<h3>
										<a href="menu.html#coffee" title="Coffee">Coffee</a>
									</h3>
									<p>We the same levels of commitment to cocktail know-how
										from all of the people we work with</p>
								</div>
							</aside>
							<em class="animated animation infinite bullets"></em>
						</li>
						<li class="service">
							<aside>
								<div class="service-inner">
									<h3>
										<a href="menu.html#cocktail" title="Cocktail">Cocktail</a>
									</h3>
									<p>We the same levels of commitment to cocktail know-how
										from all of the people we work with</p>
								</div>
							</aside>
							<em class="animated animation infinite bullets animation-delay-50"></em>
						</li>
						<li class="service">
							<aside>
								<div class="service-inner">
									<h3>
										<a href="menu.html#tea" title="Tea">Tea</a>
									</h3>
									<p>We the same levels of commitment to cocktail know-how
										from all of the people we work with</p>
								</div>
							</aside>
							<em class="animated animation infinite bullets animation-delay-100"></em>
						</li>
						<li class="service">
							<aside>
								<div class="service-inner">
									<h3>
										<a href="menu.html#cake" title="Cake">Cake</a>
									</h3>
									<p>We the same levels of commitment to cocktail know-how
										from all of the people we work with</p>
								</div>
							</aside>
							<em class="animated animation infinite bullets animation-delay-150"></em>
						</li>
						<li class="service">
							<aside>
								<div class="service-inner">
									<h3>
										<a href="menu.html#milk" title="Milk">Milk</a>
									</h3>
									<p>We the same levels of commitment to cocktail know-how
										from all of the people we work with</p>
								</div>
							</aside>
							<em class="animated animation infinite bullets animation-delay-200"></em>
						</li>
						<li class="service">
							<aside>
								<div class="service-inner">
									<h3>
										<a href="menu.html#beverages" title="Beverages">Beverages</a>
									</h3>
									<p>We the same levels of commitment to cocktail know-how
										from all of the people we work with</p>
								</div>
							</aside>
							<em class="animated animation infinite bullets animation-delay-250"></em>
						</li>
					</ul>
				</div>
			</section>

			<section id="latest" class="section latest"
				style="background-image: url(../images/home/latest/bg.png); background-position: right top; background-repeat: no-repeat;">
				<div class="container">
					<div class="row">
						<div class="col-sm-7">
							<h1 class="title line-title">
								Latest Update<i class="fa">&#xf111;</i>
							</h1>
							<ul class="posts_list">
								<li>
									<figure>
										<a href="#"> <img alt="" src="../images/home/latest/img-1.png">
										</a>
									</figure>
									<aside>
										<h4 class="title">
											<a href="#">Happy Hour, between 4pm &amp; 5pm</a>
										</h4>
										<p>In specialty coffee culture an ability to properly brew
											coffee is summing it all up. In one cup of coffee we bring
											together efforts of all of those who worked o...</p>
									</aside>
								</li>
								<li>
									<figure>
										<a href="#"> <img alt="" src="../images/home/latest/img-2.png">
										</a>
									</figure>
									<aside>
										<h4 class="title">
											<a href="#">Brew coffee is summing it all up</a>
										</h4>
										<p>In specialty coffee culture an ability to properly brew
											coffee is summing it all up. In one cup of coffee we bring
											together efforts of all of those who worked o...</p>
									</aside>
								</li>
							</ul>
						</div>
						<div class="col-sm-5">
							<div class="widget-gallery">
								<ul>
									<li>
										<figure>
											<img class="animated" data-animate="zoomIn animation" alt="" src="../images/home/gallery/img-1.jpg" >
											<figcaption>
												<a class="gallery-ajax" href="#" data-url="../ajax/gallery-v2-1.html" data-toggle="modal" data-target="#myModal-1"></a>
											</figcaption>
										</figure>
									</li>
									<li>
										<figure>
											<img class="animated" data-animate="zoomIn animation" alt="" src="../images/home/gallery/img-2.jpg" >
											<figcaption>
												<a class="gallery-ajax" href="#" data-url="../ajax/gallery-v2-2.html" data-toggle="modal" data-target="#myModal-2"></a>
											</figcaption>
										</figure>
									</li>
									<li>
										<figure>
											<img class="animated" data-animate="zoomIn animation animation-delay-50" alt="" src="../images/home/gallery/img-3.jpg" >
											<figcaption>
												<a class="gallery-ajax" href="#" data-url="../ajax/gallery-v2-2.html" data-toggle="modal" data-target="#myModal-3"></a>
											</figcaption>
										</figure>
									</li>
									<li>
										<figure>
											<img class="animated" data-animate="zoomIn animation animation-delay-50" alt="" src="../images/home/gallery/img-4.jpg" >
											<figcaption>
												<a class="gallery-ajax" href="#" data-url="../ajax/gallery-v2-1.html" data-toggle="modal" data-target="#myModal-4"></a>
											</figcaption>
										</figure>
									</li>
									<li>
										<figure>
											<img class="animated" data-animate="zoomIn animation animation-delay-100" alt="" src="../images/home/gallery/img-5.jpg" >
											<figcaption>
												<a class="gallery-ajax" href="#" data-url="../ajax/gallery-v2-1.html" data-toggle="modal" data-target="#myModal-5"></a>
											</figcaption>
										</figure>
									</li>
									<li>
										<figure>
											<img class="animated" data-animate="zoomIn animation animation-delay-100" alt="" src="../images/home/gallery/img-6.jpg" >
											<figcaption>
												<a class="gallery-ajax" href="#" data-url="../ajax/gallery-v2-2.html" data-toggle="modal" data-target="#myModal-6"></a>
											</figcaption>
										</figure>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="modal" id="myModal-1">
					<div class="modal-content">

						<div class="modal-header">
							<div class="container">
								<button aria-label="Close" data-dismiss="modal" class="close"
									type="button">
									<span aria-hidden="true">×</span>
								</button>
							</div>
						</div>
						<div class="modal-body"></div>

					</div>
					<!-- /.modal-content -->
				</div>
				<div class="modal" id="myModal-2">
					<div class="modal-content">

						<div class="modal-header">
							<div class="container">
								<button aria-label="Close" data-dismiss="modal" class="close"
									type="button">
									<span aria-hidden="true">×</span>
								</button>
							</div>
						</div>
						<div class="modal-body"></div>

					</div>
					<!-- /.modal-content -->
				</div>
				<div class="modal" id="myModal-3">
					<div class="modal-content">

						<div class="modal-header">
							<div class="container">
								<button aria-label="Close" data-dismiss="modal" class="close"
									type="button">
									<span aria-hidden="true">×</span>
								</button>
							</div>
						</div>
						<div class="modal-body"></div>

					</div>
					<!-- /.modal-content -->
				</div>
				<div class="modal" id="myModal-4">
					<div class="modal-content">

						<div class="modal-header">
							<div class="container">
								<button aria-label="Close" data-dismiss="modal" class="close"
									type="button">
									<span aria-hidden="true">×</span>
								</button>
							</div>
						</div>
						<div class="modal-body"></div>

					</div>
					<!-- /.modal-content -->
				</div>
				<div class="modal" id="myModal-5">
					<div class="modal-content">

						<div class="modal-header">
							<div class="container">
								<button aria-label="Close" data-dismiss="modal" class="close"
									type="button">
									<span aria-hidden="true">×</span>
								</button>
							</div>
						</div>
						<div class="modal-body"></div>

					</div>
					<!-- /.modal-content -->
				</div>
				<div class="modal" id="myModal-6">
					<div class="modal-content">

						<div class="modal-header">
							<div class="container">
								<button aria-label="Close" data-dismiss="modal" class="close"
									type="button">
									<span aria-hidden="true">×</span>
								</button>
							</div>
						</div>
						<div class="modal-body"></div>

					</div>
					<!-- /.modal-content -->
				</div>

			</section>

			<section id="info-recipe" class="section info-recipe">
				<div class="container">
					<div class="row">
						<div class="col-sm-7">
							<figure class="animated" data-animate="fadeInUp animation">
								<img alt="" src="../images/home/info/info-img-3.png">
							</figure>
							<aside>
								<h4 class="title">Do you want to Retation the video recipe?</h4>
								<p>Coffee is a ritual, a small treat in the morning, “fuel”,
									a break, chat, affair that makes up our lives. Making the
									coffee better, we make our lives better.</p>
							</aside>
						</div>
						<div class="col-sm-5">

							<ul class="nav video-recipe">
								<li>
									<div class="embed-responsive embed-responsive-16by9">
										<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/D-tjyNq7drk"></iframe>
									</div>
									<h5 class="title">work with green and roasted coffee provides</h5>
								</li>

								<li>
									<div class="embed-responsive embed-responsive-16by9">
										<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/aBLYSO0DSVI"></iframe>
									</div>
									<h5 class="title">Gather more knowledge from coffee</h5>
								</li>
							</ul>

						</div>
					</div>
				</div>
			</section>

			<section id="bulletproof" class="section bulletproof">
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<figure class="animated" data-animate="fadeInLeft animation">
								<img alt="" src="../images/home/image3.png">
							</figure>
						</div>
						<div class="col-sm-6">
							<aside>
								<h3 class="title">Get your Bulletproof Coffee Making Kit</h3>
								<ul>
									<li>1 cup unsweetened cocoa powder</li>
									<li>1/2 cup butter, cut into 1&ndash;inch pieces</li>
									<li>1 1/4 cups granulated sugar</li>
									<li>1/2 cup firmly packed dark brown sugar</li>
									<li>1 1/4 tsp baking soda</li>
									<li>Add a Klean Kanteen Insulated Coffee Flask / Shaker
										&amp; a Cafe Cap</li>
								</ul>
							</aside>
						</div>
					</div>
					<h4 class="title">“The easiest and most convenient way I have used in making
						Bulletproof coffee. We use it very day.”</h4>
				</div>
			</section>

@endsection