@extends('layouts.index')
@section('menu')
  <section class="home-slider owl-carousel img" style="background-image: url(images/bg_1.jpg);">

      <div class="slider-item" style="background-image: url(images/bg_3.jpg);">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
              <h1 class="mb-3 mt-5 bread">Our Menu</h1>
              <p class="breadcrumbs"><span class="mr-2"><a href="{{route('home-page')}}">Home</a></span> <span>Menu</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>
    
    <section class="ftco-section" style="padding-bottom: 0px;">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Our Menu</h2>
            <p>PizzaExpress has started to apply new recipe for our Tandoori Chicken Curry Pizza by using leftover after making the Crab Spaghetti.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-menu">
      <div class="container-fluid">
        <div class="row d-md-flex">
          <div class="col-lg-12 ftco-animate p-md-5" style="padding-top: 0px !important;">
            <div class="row">
              <div class="col-md-12 nav-link-wrap mb-5">
                <div class="nav ftco-animate nav-pills justify-content-center" style="padding-bottom: 30px;" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Sales</a>

                  <a class="nav-link" id="v-pills-5-tab" data-toggle="pill" href="#v-pills-5" role="tab" aria-controls="v-pills-5" aria-selected="false">Pizza</a>

                  <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Pasta</a>

                  <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Drinks</a>

                  <a class="nav-link" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false">Others</a>
                </div>
              </div>
              <div class="col-md-12 d-flex align-items-center">

                <div class="tab-content ftco-animate" id="v-pills-tabContent">

                  <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
                    <div class="row">
                      @foreach($products as $p)
                        @if($p->prod_promoPrice != 0)
                          <div class="col-md-3 text-center">
                            <div class="menu-wrap">
                              <a href="#" class="menu-img img mb-4" style="background-image: url(images/{{$p->prod_img}}.jpg);"></a>
                              <div class="text">
                                <h3><a href="#">{{$p->prod_name}}</a></h3>
                                <p>{{$p->prod_description}}</p>
                                @if($p->prod_promoPrice == 0)
                                  <p class="price"><span>${{$p->prod_unitPrice}}</span></p>
                                @else
                                  <p class="price"><span><del>${{$p->prod_unitPrice}}</del></span>&nbsp;&nbsp;&nbsp;<span>${{$p->prod_promoPrice}}</span></p>
                                @endif
                                <p><a href="{{route('add-to-cart', $p->prod_id)}}" class="btn btn-white btn-outline-white">Add to cart</a></p>
                              </div>
                            </div>
                          </div>
                        @endif
                      @endforeach
                    </div>
                  </div>

                  <div class="tab-pane fade show" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-5-tab">
                    <div class="row">
                      @foreach($products as $p)
                        @if($p->cat_id == "1")
                      <div class="col-md-3 text-center">
                        <div class="menu-wrap">
                          <a href="#" class="menu-img img mb-4" style="background-image: url(images/{{$p->prod_img}}.jpg);"></a>
                          <div class="text">
                            <h3><a href="#">{{$p->prod_name}}</a></h3>
                            <p>{{$p->prod_description}}</p>
                            @if($p->prod_promoPrice == 0)
                              <p class="price"><span>${{$p->prod_unitPrice}}</span></p>
                            @else
                              <p class="price"><span><del>${{$p->prod_unitPrice}}</del></span>&nbsp;&nbsp;&nbsp;<span>${{$p->prod_promoPrice}}</span></p>
                            @endif
                            <p><a href="{{route('add-to-cart', $p->prod_id)}}" class="btn btn-white btn-outline-white">Add to cart</a></p>
                          </div>
                        </div>
                      </div>
                        @endif
                      @endforeach
                    </div>
                  </div>

                  <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
                    <div class="row">
                      @foreach($products as $p)
                        @if($p->cat_id == "2")
                      <div class="col-md-3 text-center">
                        <div class="menu-wrap">
                          <a href="#" class="menu-img img mb-4" style="background-image: url(images/{{$p->prod_img}}.jpg);"></a>
                          <div class="text">
                            <h3><a href="#">{{$p->prod_name}}</a></h3>
                            <p>{{$p->prod_description}}</p>
                            @if($p->prod_promoPrice == 0)
                              <p class="price"><span>${{$p->prod_unitPrice}}</span></p>
                            @else
                              <p class="price"><span><del>${{$p->prod_unitPrice}}</del></span>&nbsp;&nbsp;&nbsp;<span>${{$p->prod_promoPrice}}</span></p>
                            @endif
                            <p><a href="{{route('add-to-cart', $p->prod_id)}}" class="btn btn-white btn-outline-white">Add to cart</a></p>
                          </div>
                        </div>
                      </div>
                        @endif
                      @endforeach
                    </div>
                  </div>

                  <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
                    <div class="row">
                      @foreach($products as $p)
                        @if($p->cat_id == "3")
                      <div class="col-md-3 text-center">
                        <div class="menu-wrap">
                          <a href="#" class="menu-img img mb-4" style="background-image: url(images/{{$p->prod_img}}.jpg);"></a>
                          <div class="text">
                            <h3><a href="#">{{$p->prod_name}}</a></h3>
                            <p>{{$p->prod_description}}</p>
                            @if($p->prod_promoPrice == 0)
                              <p class="price"><span>${{$p->prod_unitPrice}}</span></p>
                            @else
                              <p class="price"><span><del>${{$p->prod_unitPrice}}</del></span>&nbsp;&nbsp;&nbsp;<span>${{$p->prod_promoPrice}}</span></p>
                            @endif
                            <p><a href="{{route('add-to-cart', $p->prod_id)}}" class="btn btn-white btn-outline-white">Add to cart</a></p>
                          </div>
                        </div>
                      </div>
                        @endif
                      @endforeach
                    </div>
                  </div>

                  <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-4-tab">
                    <div class="row">
                      @foreach($products as $p)
                        @if($p->cat_id == "4")
                      <div class="col-md-3 text-center">
                        <div class="menu-wrap">
                          <a href="#" class="menu-img img mb-4" style="background-image: url(images/{{$p->prod_img}}.jpg);"></a>
                          <div class="text">
                            <h3><a href="#">{{$p->prod_name}}</a></h3>
                            <p>{{$p->prod_description}}</p>
                            @if($p->prod_promoPrice == 0)
                              <p class="price"><span>${{$p->prod_unitPrice}}</span></p>
                            @else
                              <p class="price"><span><del>${{$p->prod_unitPrice}}</del></span>&nbsp;&nbsp;&nbsp;<span>${{$p->prod_promoPrice}}</span></p>
                            @endif
                            <p><a href="{{route('add-to-cart', $p->prod_id)}}" class="btn btn-white btn-outline-white">Add to cart</a></p>
                          </div>
                        </div>
                      </div>
                        @endif
                      @endforeach
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection('menu')
