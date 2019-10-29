<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pizza Express</title>
</head>
<body>
	<!-- Nav -->
{{--	@guest--}}
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
		      <a class="navbar-brand" href="{{route('home-page')}}"><span class="flaticon-pizza-1 mr-1"></span>Pizza<br><small>Express</small></a>
		      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
		        <span class="oi oi-menu"></span> Menu
		      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="{{route('home-page')}}" class="nav-link">Home</a></li>
				<li class="nav-item"><a href="{{route('about-page')}}" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="{{route('menu-page')}}" class="nav-link">Menu</a></li>
	          <li class="nav-item"><a href="{{route('contact-page')}}" class="nav-link">Contact</a></li>
				<li class="nav-item"><a href="{{route('getInvoice')}}" class="nav-link">Your Bills</a></li>
{{--				<li class="nav-item"><a href="{{route('log-in')}}" class="nav-link"><i class="fas fa-sign-in-alt"></i> Log-in</a></li>--}}
{{--				<li class="nav-item"><a href="{{route('register')}}" class="nav-link"><i class="far fa-user"></i> Register</a></li>--}}
				<li class="nav-item">
					<div class="dropdown nav-link">
						<div class="cart">
                        <button class="btn btn-white btn-outline-white dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="{{ route('get.list.cart') }}">
							<span>
									<i class="fas fa-shopping-cart"></i>&nbsp;
								</span>
							<span id="qty">{{Cart::count()}}&nbsp;|&nbsp;</span>
							<span id="price">${{Cart::subtotal()}}</span>
						</button>



						<div class="dropdown-menu p-4 text-muted" style="overflow-y: scroll; max-height: 400px; width: 400px; transform: translateX(-30%)" aria-labelledby="dropdownMenu2">
                            @foreach(Cart::content() as $p)
								<img class="table-responsive" style="width: 50px; float: left" src="images/{{$p->options->img}}.jpg" alt="{{$p->options->img}}">
								<h6>&nbsp;&nbsp;&nbsp;&nbsp;{{$p->name}}</h6>
                                <a href="{{route('remove1', $p->rowId)}}"><i class="fa fa-times" style="float: right;"></i></a>
                                <p style="font-style: italic;">&nbsp;&nbsp;&nbsp;&nbsp;{{$p->qty}} &nbsp; * &nbsp; {{$p->price}}  </p>

                            @endforeach
                            <div class="dropdown-divider"></div>
							<h6>Total Payment: <span style="float: right;">{{Cart::subtotal()}}</span></h6>
                                <a href="{{route('cart')}}" style="color: #2a9055;">CHECK OUT</a>
                                <a href="{{route('deleteCart')}}" style="float: right; color: #c51f1a;">REFRESH</a>

						</div>
                        </div>
					</div>
				</li>
	        </ul>
	      </div>
		  </div>
	  </nav>
{{--	@else--}}
{{--		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">--}}
{{--			<div class="container">--}}
{{--				<a class="navbar-brand" href="{{route('home-page')}}"><span class="flaticon-pizza-1 mr-1"></span>Pizza<br><small>Delicous</small></a>--}}
{{--				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--					<span class="oi oi-menu"></span> Menu--}}
{{--				</button>--}}
{{--				<div class="collapse navbar-collapse" id="ftco-nav">--}}
{{--					<ul class="navbar-nav ml-auto">--}}
{{--						<li class="nav-item"><a href="{{route('home-page')}}" class="nav-link">Home</a></li>--}}
{{--						<li class="nav-item"><a href="{{route('about-page')}}" class="nav-link">About</a></li>--}}
{{--						<li class="nav-item"><a href="{{route('menu-page')}}" class="nav-link">Menu</a></li>--}}
{{--						<li class="nav-item"><a href="{{route('contact-page')}}" class="nav-link">Contact</a></li>--}}
{{--						<li class="nav-item"><a href="{{route('getInvoice')}}" class="nav-link">Your Bills</a></li>--}}
{{--						<li class="nav-item"><a href="" class="nav-link">Hello {{Auth::user()->name}}</a></li>--}}
{{--                        <li class="nav-item"><a href="{{route('log-out')}}" class="nav-link"><i class="fas fa-sign-out-alt"></i></a></li>--}}
{{--						<li class="nav-item">--}}
{{--							<div class="dropdown nav-link">--}}
{{--								<div class="cart">--}}
{{--									<button class="btn btn-white btn-outline-white dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="{{ route('get.list.cart') }}">--}}
{{--							<span>--}}
{{--									<i class="fas fa-shopping-cart"></i>&nbsp;--}}
{{--								</span>--}}
{{--										<span id="qty">{{Cart::count()}}&nbsp;|&nbsp;</span>--}}
{{--										<span id="price">${{Cart::subtotal()}}</span>--}}
{{--									</button>--}}



{{--									<div class="dropdown-menu p-4 text-muted" style="overflow-y: scroll; max-height: 400px; width: 400px; transform: translateX(-30%)" aria-labelledby="dropdownMenu2">--}}
{{--										@foreach(Cart::content() as $p)--}}
{{--											<img class="table-responsive" style="width: 50px; float: left" src="images/{{$p->options->img}}.jpg" alt="{{$p->options->img}}">--}}
{{--											<h6>&nbsp;&nbsp;&nbsp;&nbsp;{{$p->name}}</h6>--}}
{{--											<a href="{{route('remove1', $p->rowId)}}"><i class="fa fa-times" style="float: right;"></i></a>--}}
{{--											<p style="font-style: italic;">&nbsp;&nbsp;&nbsp;&nbsp;{{$p->qty}} &nbsp; * &nbsp; {{$p->price}}  </p>--}}

{{--										@endforeach--}}
{{--										<div class="dropdown-divider"></div>--}}
{{--										<h6>Total Payment: <span style="float: right;">{{Cart::subtotal()}}</span></h6>--}}
{{--										<a href="{{route('cart')}}" style="color: #2a9055;">CHECK OUT</a>--}}
{{--										<a href="{{route('deleteCart')}}" style="float: right; color: #c51f1a;">REFRESH</a>--}}

{{--									</div>--}}
{{--								</div>--}}
{{--							</div>--}}
{{--						</li>--}}
{{--					</ul>--}}
{{--				</div>--}}
{{--			</div>--}}
{{--		</nav>--}}
{{--		@endguest--}}

    <!-- END nav -->
</body>
</html>