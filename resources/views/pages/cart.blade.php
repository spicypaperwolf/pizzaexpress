@extends('layouts.index')
@section('cart')
    <script>
        jQuery(document).ready(function($){
           @foreach(Cart::content() as $p)
            $("#upCart{{$p->id}}").on('change keyup', function () {
              var newQty = $("#upCart{{$p->id}}").val();
              var rowId = $("#rowId{{$p->id}}").val();
              $.ajax({
                url:'{{url('/cart/update')}}',
                  data: 'rowId=' +  rowId + '&newQty=' + newQty,
                  type:'get',
                  success: function (response) {
                      console.log(response);
                  }
              });
           });
            @endforeach
        });
    </script>
{{--<nav class="navbar navbar-expand-md navbar-dark bg-dark">--}}
{{--    <div class="container">--}}
{{--        <a class="navbar-brand" href="index.html">Simple Ecommerce</a>--}}
{{--            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--                <span class="navbar-toggler-icon"></span>--}}
{{--            </button>--}}

{{--            <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">--}}
{{--                <ul class="navbar-nav m-auto">--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="index.html">Home</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item active">--}}
{{--                        <a class="nav-link" href="category.html">Categories <span class="sr-only">(current)</span></a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="product.html">Product</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="cart.html">Cart</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="contact.html">Contact</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}

{{--            <form class="form-inline my-2 my-lg-0">--}}
{{--                <div class="input-group input-group-sm">--}}
{{--                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Search...">--}}
{{--                    <div class="input-group-append">--}}
{{--                        <button type="button" class="btn btn-secondary btn-number">--}}
{{--                            <i class="fa fa-search"></i>--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <a class="btn btn-success btn-sm ml-3" href="{{ route('get.list.cart') }}">--}}
{{--                    <i class="fa fa-shopping-cart"></i> Cart--}}
{{--                    <span class="badge badge-light">{{ Cart::count() }}</span>--}}
{{--                </a>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div></nav>--}}
{{--<section class="jumbotron text-center">--}}
{{--    <div class="container">--}}
{{--        <h1 class="jumbotron-heading">E-COMMERCE CATEGORY</h1>--}}
{{--        <p class="lead text-muted mb-0">Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte...</p>--}}
{{--    </div></section>--}}
{{--<div class="container">--}}
{{--    <div class="row">--}}
{{--        <div class="col">--}}
{{--            <nav aria-label="breadcrumb">--}}
{{--                <ol class="breadcrumb">--}}
{{--                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>--}}
{{--                    <li class="breadcrumb-item"><a href="category.html">Category</a></li>--}}
{{--                    <li class="breadcrumb-item active" aria-current="page">Sub-category</li>--}}
{{--                </ol>--}}
{{--            </nav>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<div class="container cart-sidebar">
    <div class="row">
        <div class="col-12 col-sm-3">
            <div class="card bg-light mb-3">
                <div class="card-header bg-primary text-white text-uppercase"><i class="fa fa-list"></i> Categories</div>
                <ul class="list-group category_block">
                    @foreach($product_cat as $pc)
                    <li class="list-group-item"><a href="{{route('menu-page')}}">{{$pc->cat_name}}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="card bg-light mb-3">
                <div class="card-header text-white text-uppercase new-product">Last product</div>
                @foreach($prod as $p)
                <div class="card-body new-product-body">
                    <img class="img-fluid" src="images/{{$p->prod_img}}.jpg" />
                    <h5 class="card-title" style="color: #fac564; margin-top: 12px;">{{$p->prod_name}}</h5>
{{--                    <p class="card-text">{{$p->prod_description}}</p>--}}
                    @if($p->prod_promoPrice != 0)
                        <p class="bloc_left_price"><del>${{$p->prod_unitPrice}}</del> &nbsp;&nbsp; ${{$p->prod_promoPrice}}</p>
                    @else
                        <p class="bloc_left_price" style="margin-bottom: 0">${{$p->prod_unitPrice}}</p>
                    @endif
                </div>
                    @endforeach
            </div>
        </div>
        <div class="col">
            <div class="row">
                <h2 class="yourOrderTitle">YOUR ORDER</h2>
            </div>
            <div class="row">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col"></th>
                        <th scope="col">Products</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Price</th>
                        <th scope="col" colspan="2">Optional</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach(Cart::content() as $p)
                    <tr>
                        <td>1</td>
                        <td><img class="table-responsive" style="width: 100px;" src="images/{{$p->options->img}}.jpg" alt="{{$p->options->img}}"></td>
                        <td>{{$p->name}}</td>
                        <td>
                            <input type="hidden" value="{{$p->rowId}}" id="rowId{{$p->id}}">
                            <input type="number" class="btn btn-primary" value="{{$p->qty}}" min="1" id="upCart{{$p->id}}">
                        </td>
                        <td>${{$p->price*$p->qty}}</td>

                        <td>
                            <div class="btn-group">
                                <a href="#" class="btn btn-primary">Select...</a>
                                <a href="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" style="padding: 10px" id="myDiv">
                                    @foreach($top as $t)
                                    <li><p><input type="checkbox" value="{{$t->top_price}}" id="topping" >&nbsp;&nbsp;{{$t->top_name}}</p></li>
                                    @endforeach
                                </ul>
                            </div>
                        </td>
                        <td><a href="{{route('remove1', $p->rowId)}}"><i class="fa fa-times" style="float: right;"></i></a></td>

                    </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <td colspan="4">Total Payment</td>
                        <td colspan="4" style="text-align: right" id="subtotal">${{Cart::subtotal()}}</td>
                    </tr>
                    <tr>
                        <td colspan="4">Service Charge (5%)</td>
                        <td colspan="4" style="text-align: right" id="subtotal">${{number_format(Cart::subtotal()*0.05,2)}}</td>
                    </tr>
                    <tr>
                        <td colspan="4">Grand Payment</td>
                        <td colspan="4" style="text-align: right" id="subtotal">${{number_format((Cart::subtotal()+Cart::subtotal()*0.05),2)}}</td>
                    </tr>
                    <tr>
                        <td colspan="6"><a href="{{route('checkout')}}" style="float: right;">Purchase</a> </td>
                    </tr>
                    </tfoot>
                </table>









{{--                @foreach($products as $product)--}}
{{--                    <div class="col-12 col-md-6 col-lg-4">--}}
{{--                        <div class="card">--}}
{{--                            <img class="card-img-top" src="https://dummyimage.com/600x400/55595c/fff" alt="Card image cap">--}}
{{--                            <div class="card-body">--}}
{{--                                <h4 class="card-title"><a href="product.html" title="View Product">{{ $product->name }}</a></h4>--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col">--}}
{{--                                        <p class="btn btn-danger btn-block">{{ number_format($product->price,0,',','.') }} đ</p>--}}
{{--                                        <p class="btn btn-danger btn-block">Số lượng {{ $product->qty }}</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endforeach--}}
            </div>
        </div>

    </div>
</div>


    @endsection
