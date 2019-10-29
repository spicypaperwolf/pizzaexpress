@extends('layouts.index')
@section('contact')
  <section class="home-slider owl-carousel img" style="background-image: url(images/bg_1.jpg);">

    <div class="slider-item" style="background-image: url(images/bg_3.jpg);">
      <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text justify-content-center align-items-center">

          <div class="col-md-7 col-sm-12 text-center ftco-animate">
            <h1 class="mb-3 mt-5 bread">Contact Us</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="{{route('home-page')}}">Home</a></span> <span>Contact</span></p>
          </div>

        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section contact-section">
    <div class="container mt-5">
      <div class="row block-9">
        <div class="col-md-4 contact-info ftco-animate">
          <div class="row">
            @foreach($contact as $contact)
              <div class="col-md-12 mb-4">
                @if($contact -> maincolumn == 1)
                  <h2 class="h4">{{$contact->title}}</h2>
                @endif
              </div>
              <div class="col-md-12 mb-3">
                <p><span>{{$contact->subtitle}}:</span> {{$contact->subtitle_content}}</p>
              </div>
            @endforeach
          </div>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-6 ftco-animate">
          @foreach($contactform as $contactform)
            <form action="{{route('insertc')}}" method="post" class="contact-form">
              {{ csrf_field() }}
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

  <div id="map"></div>
@endsection('contact')
