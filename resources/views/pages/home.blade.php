@extends('layouts.index')
@section('home')
	<section class="home-slider owl-carousel img">
		@foreach($slider as $sliders)
			@if($sliders -> typeid == 1)
				<div class="slider-item" style="background-image: url(images/{{$sliders->background}});">
					<div class="overlay"></div>
					<div class="container">
						<div class="row slider-text align-items-center" data-scrollax-parent="true">
							<div class="col-md-6 col-sm-12 ftco-animate">
								<span class="subheading">{{$sliders->heading}}</span>
								<h1 class="mb-4">{{$sliders->title}}</h1>
								<p class="mb-4 mb-md-5">{{$sliders->content}}</p>
								<p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
							</div>
							<div class="col-md-6 ftco-animate">
								<img src="images/{{$sliders->picture}}" class="img-fluid" alt="">
							</div>
						</div>
					</div>
				</div>
			@endif
			@if($sliders -> typeid == 2)
				<div class="slider-item" style="background-image: url(images/{{$sliders->background}});">
					<div class="overlay"></div>
					<div class="container">
						<div class="row slider-text align-items-center" data-scrollax-parent="true">
							<div class="col-md-6 col-sm-12 order-md-last ftco-animate">
								<span class="subheading">{{$sliders->heading}}</span>
								<h1 class="mb-4">{{$sliders->title}}</h1>
								<p class="mb-4 mb-md-5">{{$sliders->content}}</p>
								<p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
							</div>
							<div class="col-md-6 ftco-animate">
								<img src="images/{{$sliders->picture}}" class="img-fluid" alt="">
							</div>

						</div>
					</div>
				</div>
			@endif
			@if($sliders -> typeid == 3)
				<div class="slider-item" style="background-image: url(images/{{$sliders->background}});">
					<div class="overlay"></div>
					<div class="container">
						<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

							<div class="col-md-7 col-sm-12 text-center ftco-animate">
								<span class="subheading">{{$sliders->heading}}</span>
								<h1 class="mb-4">{{$sliders->title}}</h1>
								<p class="mb-4 mb-md-5">{{$sliders->content}}</p>
								<p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
							</div>

						</div>
					</div>
				</div>
			@endif
		@endforeach
	</section>
	{{--Ene of slider--}}

	{{--Contact & Social media--}}
	@foreach($aboutpage as $about)
		<section class="ftco-intro">
			<div class="container-wrap">
				<div class="wrap d-md-flex">
					<div class="info">
						<div class="row no-gutters">
							<div class="col-md-4 d-flex ftco-animate">
								<div class="icon"><span class="icon-phone"></span></div>
								<div class="text">
									<h3>{{$about->telephone}}</h3>
									<p>{{$about->telephone_content}}</p>
								</div>
							</div>
							<div class="col-md-4 d-flex ftco-animate">
								<div class="icon"><span class="icon-my_location"></span></div>
								<div class="text">
									<h3>{{$about->address}}</h3>
									<p>{{$about->address_content}}</p>
								</div>
							</div>
							<div class="col-md-4 d-flex ftco-animate">
								<div class="icon"><span class="icon-clock-o"></span></div>
								<div class="text">
									<h3>{{$about->workinghour}}</h3>
									<p>{{$about->workinghour_content}}</p>
								</div>
							</div>
						</div>
					</div>
					<div class="social d-md-flex pl-md-5 p-4 align-items-center">
						<ul class="social-icon">
							<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
							<li class="ftco-animate"><a href="https://www.facebook.com/PizzaExpress-506101786822933/?modal=admin_todo_tour" target="_blank"><span class="icon-facebook"></span></a></li>
							<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		{{--End Contact & Social media--}}

		{{--About--}}
		<section class="ftco-about d-md-flex">
			<div class="one-half img" style="background-image: url(images/about.jpg);"></div>
			<div class="one-half ftco-animate">
				<div class="heading-section ftco-animate ">
					<h2 class="mb-4"><span class="flaticon-pizza"></span> {{$about->abouttitle}}</h2>
				</div>
				<div>
					<p>{{$about->aboutcontent}}</p>
				</div>
			</div>
		</section>
	@endforeach
	{{--End About--}}

	{{--Service--}}
	@foreach($ourservice as $os)
		<section class="ftco-section ftco-services">
			<div class="overlay"></div>
			<div class="container">
				<div class="row justify-content-center mb-5 pb-3">
					<div class="col-md-7 heading-section ftco-animate text-center">
						<h2 class="mb-4">{{$os->title}}</h2>
						<p>{{$os->subtitle}}</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 ftco-animate">
						<div class="media d-block text-center block-6 services">
							<div class="icon d-flex justify-content-center align-items-center mb-5">
								<span class="flaticon-diet"></span>
							</div>
							<div class="media-body">
								<h3 class="heading">{{$os->form1_title}}</h3>
								<p>{{$os->form1_content}}</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 ftco-animate">
						<div class="media d-block text-center block-6 services">
							<div class="icon d-flex justify-content-center align-items-center mb-5">
								<span class="flaticon-bicycle"></span>
							</div>
							<div class="media-body">
								<h3 class="heading">{{$os->form2_title}}</h3>
								<p>{{$os->form2_content}}</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 ftco-animate">
						<div class="media d-block text-center block-6 services">
							<div class="icon d-flex justify-content-center align-items-center mb-5"><span class="flaticon-pizza-1"></span></div>
							<div class="media-body">
								<h3 class="heading">{{$os->form3_title}}</h3>
								<p>{{$os->form3_content}}</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	@endforeach
	{{--End Service--}}

{{--Service--}}
{{--    <section class="ftco-section">--}}
{{--    	<div class="container">--}}
{{--    		<div class="row justify-content-center mb-5 pb-3">--}}
{{--          <div class="col-md-7 heading-section ftco-animate text-center">--}}
{{--            <h2 class="mb-4">Hot Pizza Meals</h2>--}}
{{--            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--    	</div>--}}
{{--    	<div class="container-wrap">--}}
{{--    		<div class="row no-gutters d-flex">--}}
{{--    			<div class="col-lg-4 d-flex ftco-animate">--}}
{{--    				<div class="services-wrap d-flex">--}}
{{--    					<a href="#" class="img" style="background-image: url(images/pizza-1.jpg);"></a>--}}
{{--    					<div class="text p-4">--}}
{{--    						<h3>Italian Pizza</h3>--}}
{{--    						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia </p>--}}
{{--    						<p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>--}}
{{--    					</div>--}}
{{--    				</div>--}}
{{--    			</div>--}}
{{--    			<div class="col-lg-4 d-flex ftco-animate">--}}
{{--    				<div class="services-wrap d-flex">--}}
{{--    					<a href="#" class="img" style="background-image: url(images/pizza-2.jpg);"></a>--}}
{{--    					<div class="text p-4">--}}
{{--    						<h3>Greek Pizza</h3>--}}
{{--    						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>--}}
{{--    						<p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>--}}
{{--    					</div>--}}
{{--    				</div>--}}
{{--    			</div>--}}
{{--    			<div class="col-lg-4 d-flex ftco-animate">--}}
{{--    				<div class="services-wrap d-flex">--}}
{{--    					<a href="#" class="img" style="background-image: url(images/pizza-3.jpg);"></a>--}}
{{--    					<div class="text p-4">--}}
{{--    						<h3>Caucasian Pizza</h3>--}}
{{--    						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>--}}
{{--    						<p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>--}}
{{--    					</div>--}}
{{--    				</div>--}}
{{--    			</div>--}}

{{--    			<div class="col-lg-4 d-flex ftco-animate">--}}
{{--    				<div class="services-wrap d-flex">--}}
{{--    					<a href="#" class="img order-lg-last" style="background-image: url(images/pizza-4.jpg);"></a>--}}
{{--    					<div class="text p-4">--}}
{{--    						<h3>American Pizza</h3>--}}
{{--    						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia </p>--}}
{{--    						<p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>--}}
{{--    					</div>--}}
{{--    				</div>--}}
{{--    			</div>--}}
{{--    			<div class="col-lg-4 d-flex ftco-animate">--}}
{{--    				<div class="services-wrap d-flex">--}}
{{--    					<a href="#" class="img order-lg-last" style="background-image: url(images/pizza-5.jpg);"></a>--}}
{{--    					<div class="text p-4">--}}
{{--    						<h3>Tomatoe Pie</h3>--}}
{{--    						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>--}}
{{--    						<p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>--}}
{{--    					</div>--}}
{{--    				</div>--}}
{{--    			</div>--}}
{{--    			<div class="col-lg-4 d-flex ftco-animate">--}}
{{--    				<div class="services-wrap d-flex">--}}
{{--    					<a href="#" class="img order-lg-last" style="background-image: url(images/pizza-6.jpg);"></a>--}}
{{--    					<div class="text p-4">--}}
{{--    						<h3>Margherita</h3>--}}
{{--    						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>--}}
{{--    						<p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>--}}
{{--    					</div>--}}
{{--    				</div>--}}
{{--    			</div>--}}
{{--    		</div>--}}
{{--    	</div>--}}


		<!--Menu Pricing-->
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3 mt-5 pt-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">Our Menu Pricing</h2>
            <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
            <p class="mt-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                @foreach($products->slice(0,4) as $p)
                    <div class="pricing-entry d-flex ftco-animate">
                        <div class="img" style="background-image: url(images/{{$p->prod_img}}.jpg);"></div>
                        <div class="desc pl-3">
                            <div class="d-flex text align-items-center">
                                <h3><span>{{$p->prod_name}}</span></h3>
                                <span class="price">{{$p->prod_unitPrice}}</span>
                            </div>
                            <div class="d-block">
                                <p>{{$p->prod_description}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="col-md-6">
                @foreach($products->slice(4,4) as $p)
                    <div class="pricing-entry d-flex ftco-animate">
                        <div class="img" style="background-image: url(images/{{$p->prod_img}}.jpg);"></div>
                        <div class="desc pl-3">
                            <div class="d-flex text align-items-center">
                                <h3><span>{{$p->prod_name}}</span></h3>
                                <span class="price">{{$p->prod_unitPrice}}</span>
                            </div>
                            <div class="d-block">
                                <p>{{$p->prod_description}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        </div>
    </section>
{{--End Menu Pricing--}}

{{--4Banners--}}
    <section class="ftco-gallery">
    	<div class="container-wrap">
    		<div class="row no-gutters">
					<div class="col-md-3 ftco-animate">
						<a href="#" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-1.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="#" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-2.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="#" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-3.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="#" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-4.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
        </div>
    	</div>
    </section>
{{--End 4Banners--}}

{{--Counter--}}
		<section class="ftco-counter ftco-bg-dark img" id="section-counter" style="background-image: url(images/bg_2.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center">
        	<div class="col-md-10">
        		<div class="row">
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-pizza-1"></span></div>
		              	<strong class="number" data-number="100">0</strong>
		              	<span>Pizza Branches</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-medal"></span></div>
		              	<strong class="number" data-number="85">0</strong>
		              	<span>Number of Awards</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-laugh"></span></div>
		              	<strong class="number" data-number="10567">0</strong>
		              	<span>Happy Customer</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-chef"></span></div>
		              	<strong class="number" data-number="900">0</strong>
		              	<span>Staff</span>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
        </div>
      </div>
    </section>
{{--Counter--}}

{{--    <section class="ftco-menu">--}}
{{--    	<div class="container-fluid">--}}
{{--    		<div class="row d-md-flex">--}}
{{--	    		<div class="col-lg-4 ftco-animate img f-menu-img mb-5 mb-md-0" style="background-image: url(images/about.jpg);">--}}
{{--	    		</div>--}}
{{--	    		<div class="col-lg-8 ftco-animate p-md-5">--}}
{{--		    		<div class="row">--}}
{{--		          <div class="col-md-12 nav-link-wrap mb-5">--}}
{{--		            <div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">--}}
{{--		              <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Pizza</a>--}}

{{--		              <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Drinks</a>--}}

{{--		              <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Burgers</a>--}}

{{--		              <a class="nav-link" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false">Pasta</a>--}}
{{--		            </div>--}}
{{--		          </div>--}}
{{--		          <div class="col-md-12 d-flex align-items-center">--}}
{{--		            --}}
{{--		            <div class="tab-content ftco-animate" id="v-pills-tabContent">--}}

{{--		              <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">--}}
{{--		              	<div class="row">--}}
{{--		              		<div class="col-md-4 text-center">--}}
{{--		              			<div class="menu-wrap">--}}
{{--		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/pizza-1.jpg);"></a>--}}
{{--		              				<div class="text">--}}
{{--		              					<h3><a href="#">Itallian Pizza</a></h3>--}}
{{--		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>--}}
{{--		              					<p class="price"><span>$2.90</span></p>--}}
{{--		              					<p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>--}}
{{--		              				</div>--}}
{{--		              			</div>--}}
{{--		              		</div>--}}
{{--		              		<div class="col-md-4 text-center">--}}
{{--		              			<div class="menu-wrap">--}}
{{--		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/pizza-2.jpg);"></a>--}}
{{--		              				<div class="text">--}}
{{--		              					<h3><a href="#">Itallian Pizza</a></h3>--}}
{{--		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>--}}
{{--		              					<p class="price"><span>$2.90</span></p>--}}
{{--		              					<p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>--}}
{{--		              				</div>--}}
{{--		              			</div>--}}
{{--		              		</div>--}}
{{--		              		<div class="col-md-4 text-center">--}}
{{--		              			<div class="menu-wrap">--}}
{{--		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/pizza-3.jpg);"></a>--}}
{{--		              				<div class="text">--}}
{{--		              					<h3><a href="#">Itallian Pizza</a></h3>--}}
{{--		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>--}}
{{--		              					<p class="price"><span>$2.90</span></p>--}}
{{--		              					<p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>--}}
{{--		              				</div>--}}
{{--		              			</div>--}}
{{--		              		</div>--}}
{{--		              	</div>--}}
{{--		              </div>--}}

{{--		              <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">--}}
{{--		                <div class="row">--}}
{{--		              		<div class="col-md-4 text-center">--}}
{{--		              			<div class="menu-wrap">--}}
{{--		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/drink-1.jpg);"></a>--}}
{{--		              				<div class="text">--}}
{{--		              					<h3><a href="#">Lemonade Juice</a></h3>--}}
{{--		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>--}}
{{--		              					<p class="price"><span>$2.90</span></p>--}}
{{--		              					<p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>--}}
{{--		              				</div>--}}
{{--		              			</div>--}}
{{--		              		</div>--}}
{{--		              		<div class="col-md-4 text-center">--}}
{{--		              			<div class="menu-wrap">--}}
{{--		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/drink-2.jpg);"></a>--}}
{{--		              				<div class="text">--}}
{{--		              					<h3><a href="#">Pineapple Juice</a></h3>--}}
{{--		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>--}}
{{--		              					<p class="price"><span>$2.90</span></p>--}}
{{--		              					<p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>--}}
{{--		              				</div>--}}
{{--		              			</div>--}}
{{--		              		</div>--}}
{{--		              		<div class="col-md-4 text-center">--}}
{{--		              			<div class="menu-wrap">--}}
{{--		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/drink-3.jpg);"></a>--}}
{{--		              				<div class="text">--}}
{{--		              					<h3><a href="#">Soda Drinks</a></h3>--}}
{{--		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>--}}
{{--		              					<p class="price"><span>$2.90</span></p>--}}
{{--		              					<p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>--}}
{{--		              				</div>--}}
{{--		              			</div>--}}
{{--		              		</div>--}}
{{--		              	</div>--}}
{{--		              </div>--}}

{{--		              <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">--}}
{{--		                <div class="row">--}}
{{--		              		<div class="col-md-4 text-center">--}}
{{--		              			<div class="menu-wrap">--}}
{{--		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/burger-1.jpg);"></a>--}}
{{--		              				<div class="text">--}}
{{--		              					<h3><a href="#">Itallian Pizza</a></h3>--}}
{{--		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>--}}
{{--		              					<p class="price"><span>$2.90</span></p>--}}
{{--		              					<p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>--}}
{{--		              				</div>--}}
{{--		              			</div>--}}
{{--		              		</div>--}}
{{--		              		<div class="col-md-4 text-center">--}}
{{--		              			<div class="menu-wrap">--}}
{{--		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/burger-2.jpg);"></a>--}}
{{--		              				<div class="text">--}}
{{--		              					<h3><a href="#">Itallian Pizza</a></h3>--}}
{{--		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>--}}
{{--		              					<p class="price"><span>$2.90</span></p>--}}
{{--		              					<p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>--}}
{{--		              				</div>--}}
{{--		              			</div>--}}
{{--		              		</div>--}}
{{--		              		<div class="col-md-4 text-center">--}}
{{--		              			<div class="menu-wrap">--}}
{{--		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/burger-3.jpg);"></a>--}}
{{--		              				<div class="text">--}}
{{--		              					<h3><a href="#">Itallian Pizza</a></h3>--}}
{{--		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>--}}
{{--		              					<p class="price"><span>$2.90</span></p>--}}
{{--		              					<p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>--}}
{{--		              				</div>--}}
{{--		              			</div>--}}
{{--		              		</div>--}}
{{--		              	</div>--}}
{{--		              </div>--}}

{{--		              <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-4-tab">--}}
{{--		                <div class="row">--}}
{{--		              		<div class="col-md-4 text-center">--}}
{{--		              			<div class="menu-wrap">--}}
{{--		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/pasta-1.jpg);"></a>--}}
{{--		              				<div class="text">--}}
{{--		              					<h3><a href="#">Itallian Pizza</a></h3>--}}
{{--		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>--}}
{{--		              					<p class="price"><span>$2.90</span></p>--}}
{{--		              					<p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>--}}
{{--		              				</div>--}}
{{--		              			</div>--}}
{{--		              		</div>--}}
{{--		              		<div class="col-md-4 text-center">--}}
{{--		              			<div class="menu-wrap">--}}
{{--		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/pasta-2.jpg);"></a>--}}
{{--		              				<div class="text">--}}
{{--		              					<h3><a href="#">Itallian Pizza</a></h3>--}}
{{--		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>--}}
{{--		              					<p class="price"><span>$2.90</span></p>--}}
{{--		              					<p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>--}}
{{--		              				</div>--}}
{{--		              			</div>--}}
{{--		              		</div>--}}
{{--		              		<div class="col-md-4 text-center">--}}
{{--		              			<div class="menu-wrap">--}}
{{--		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/pasta-3.jpg);"></a>--}}
{{--		              				<div class="text">--}}
{{--		              					<h3><a href="#">Itallian Pizza</a></h3>--}}
{{--		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>--}}
{{--		              					<p class="price"><span>$2.90</span></p>--}}
{{--		              					<p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>--}}
{{--		              				</div>--}}
{{--		              			</div>--}}
{{--		              		</div>--}}
{{--		              	</div>--}}
{{--		              </div>--}}
{{--		            </div>--}}
{{--		          </div>--}}
{{--		        </div>--}}
{{--		      </div>--}}
{{--		    </div>--}}
{{--    	</div>--}}
{{--    </section>--}}


	<section class="ftco-appointment">
		<div class="overlay"></div>
		<div class="container-wrap">
			<div class="row no-gutters d-md-flex align-items-center">
				<div class="col-md-6 d-flex align-self-stretch">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15677.77210499207!2d106.66820907484852!3d10.777340955806523!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ed2392c44df%3A0xd2ecb62e0d050fe9!2sFPT-Aptech+Computer+Education+HCM!5e0!3m2!1sen!2s!4v1563712252257!5m2!1sen!2s" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
				<div class="col-md-6 appointment ftco-animate">
					<h3 class="mb-3">NEWSLETTER</h3>
					<form action="{{route('insert')}}" method="post" class="appointment-form">
						<div class="d-md-flex">
							<div class="form-group">
								{{csrf_field()}}
								<input type="email" class="form-control" placeholder="E-mail" name="email">
							</div>
						</div>
						<div class="form-group">
						</div>
						<div class="form-group">
							<input type="submit" value="Send" class="btn btn-primary py-3 px-4">
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	@endsection('home')
