
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
                @if (Session::has('message'))
                    <div class="alert alert-info">{{ Session::get('message') }}</div>
                @endif
                <div class="row">
                    <h2 class="yourOrderTitle">YOUR ORDER</h2>
                </div>
                <div class="row">
                    <table class="table" style="color: #fff !important;">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col"></th>
                            <th scope="col">Products</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Price</th>
{{--                            <th scope="col" colspan="2">Optional</th>--}}
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

{{--                                <td>--}}
{{--                                    <div class="btn-group">--}}
{{--                                        <a href="#" class="btn btn-primary">Select...</a>--}}
{{--                                        <a href="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">--}}
{{--                                            <span class="caret"></span>--}}
{{--                                        </a>--}}
{{--                                        <ul class="dropdown-menu" style="padding: 10px" id="myDiv">--}}
{{--                                            @foreach($top as $t)--}}
{{--                                                <li><p><input type="checkbox" value="{{$t->top_price}}" id="topping" >&nbsp;&nbsp;{{$t->top_name}}</p></li>--}}
{{--                                            @endforeach--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </td>--}}
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
                            <td colspan="6"><a class="btn btn-primary" href="{{route('guestPurchase')}}" style="float: right;">Purchase</a> </td>
{{--                            <td colspan="6"><a href="{{route('send-mail')}}" style="float: right;">Send Email</a> </td>--}}
                        </tr>
                        </tfoot>
                    </table>
                </div>

{{--                <div class="row">--}}
{{--                    <h2>BILLING INFORMATION</h2>--}}
{{--                </div>--}}
{{--                <div class="row">--}}
{{--                    <form action="route{{route('purchase')}}" method="post">--}}
{{--                        <div class="form-row col">--}}
{{--                            <div class="form-group col-md-6">--}}
{{--                                <input type="text" class="form-control" name="buyer_fullName" placeholder="Name">--}}
{{--                            </div>--}}
{{--                            <div class="form-group col-md-6">--}}
{{--                                <input type="text" class="form-control" name="buyer_email" placeholder="E-mail">--}}
{{--                            </div>--}}
{{--                            <div class="form-group col-md-6">--}}
{{--                                <input type="text" class="form-control" name="buyer_address" placeholder="Address">--}}
{{--                            </div>--}}
{{--                            <div class="form-group col-md-6">--}}
{{--                                <input type="tel" class="form-control" pattern="[0-9]{10,11}" name="buyer_phone" placeholder="Cellphone">--}}
{{--                            </div>--}}
{{--                            <div class="form-group col-md-12">--}}
{{--                                <textarea class="form-control" rows="6" name="buyer_note" placeholder="Notice Message..."></textarea>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                    <button type="submit" class="btn btn-primary">Purchase</button>--}}
{{--                </div>--}}
                </div>
            </div>




        </div>
    </div>


@endsection

