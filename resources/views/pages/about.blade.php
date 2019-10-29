@extends('layouts.index')
@section('about')
	<section class="home-slider owl-carousel img" style="background-image: url(images/bg_1.jpg);">

		<div class="slider-item" style="background-image: url(images/bg_3.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row slider-text justify-content-center align-items-center">

					<div class="col-md-7 col-sm-12 text-center ftco-animate">
						<h1 class="mb-3 mt-5 bread">About</h1>
						<p class="breadcrumbs"><span class="mr-2"><a href="{{route('home-page')}}">Home</a></span> <span>About</span></p>
					</div>

				</div>
			</div>
		</div>
	</section>
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
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-7 heading-section ftco-animate text-center">
					@foreach($ourchef as $oc)
						@if($oc -> maincolumn == 1)
							<h2 class="mb-4">{{$oc->title}}</h2>
							<p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
							<p class="mt-5">{{$oc->subtitle}}</p>
						@endif
					@endforeach
				</div>
			</div>
			<div class="row">
				@foreach($ourchef as $oc)
					<div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
						<div class="staff">
							<div class="img mb-4" style="background-image: url(images/{{$oc->form_picture}});"></div>
							<div class="info text-center">
								<h3><a href="teacher-single.html">{{$oc->form_title}}</a></h3>
								<span class="position">{{$oc->form_subtitle}}</span>
								<div class="text">
									<p>{{$oc->form_content}}</p>
								</div>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</section>
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


	<section class="ftco-appointment">
		<div class="overlay"></div>
		<div class="container-wrap">
			<div class="row no-gutters d-md-flex align-items-center">
				<div class="col-md-6 d-flex align-self-stretch">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15677.77210499207!2d106.66820907484852!3d10.777340955806523!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ed239
					2c44df%3A0xd2ecb62e0d050fe9!2sFPT-Aptech+Computer+Education+HCM!5e0!3m2!1sen!2s!4v1563712252257!5m2!1sen!2s" width="800" height="700" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
				<div class="col-md-6 appointment ftco-animate">
							<form action="{{route('insertc')}}" method="post" class="contact-form">
							<h3 class="mb-3">Contact Us</h3>
						@foreach($contactform as $contactform)
							{{ csrf_field() }} <!--Anti - Virus: Cross-site request forgery -->
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" id="name" class="form-control" placeholder="{{$contactform->placeholder1}}" name="name">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" id="email" class="form-control" placeholder="{{$contactform->placeholder2}}" name="email">
									</div>
								</div>
							</div>
							<div class="form-group">
								<input type="text" id="subject" class="form-control" placeholder="{{$contactform->placeholder3}}" name="subject">
							</div>
							<div class="form-group">
								<textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="{{$contactform->placeholder4}}"></textarea>
							</div>
							<div class="form-group">
								<input type="submit" value="{{$contactform->submit}}" class="btn btn-primary py-3 px-5">
							</div>
						</form>
					@endforeach
				</div>
			</div>
		</div>
	</section>
@endsection('about')
