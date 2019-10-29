@extends('layouts.index')
@section('billing')
            <div class="container">
            <div class="row" style="padding: 50px; margin: 0 auto; width: 1050px;">
                @if (Session::has('message'))
                    <div class="alert alert-success">{{ Session::get('message') }}</div>
                @endif
                <form action="{{route('getGuestInfo')}}" method="post">
                    @csrf
                    <div class="row" style="width: 960px;">
                    <h2>BILLING INFORMATION</h2>
                    <br>
                        <div class="col">
                            <input type="text" class="form-control form-control-lg" name="fullName" placeholder="Name" required="true" pattern="[a-zA-Z]{1,15}">
                        </div>
                        <div class="col">
                            <input type="email" class="form-control form-control-lg" name="email" placeholder="E-mail" required="true">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control form-control-lg" name="address" placeholder="Address" required="true">
                        </div>
                        <div class="col">
                            <input type="tel" class="form-control form-control-lg" name="phone" placeholder="Cellphone" pattern="[0-9]{10,11}" required="true">
                        </div>
                    </div>

                    <div class="row" style="margin-top: 15px;">
                        <div class="col">
                            <textarea name="note" cols="115" rows="5" placeholder="Writing something for us..."></textarea>
                        </div>
                    </div>

                    <button class="btn btn-primary" type="submit" style="margin-top: 10px;">Submit</button>
                </form>

            </div>
            </div>

@endsection('billing')


