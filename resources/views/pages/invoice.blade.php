<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Invoice - #123</title>

    <style type="text/css">
        .invoice-box {
            max-width: 100%;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, .15);
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #000;
            background-color: rgba(217,217,217,0.8);
            width: 800px;
        }

        .invoice-box table {
            width: 100%;
            text-align: left;
        }

        .invoice-box table td {
            padding: 5px;
            vertical-align: top;
        }

        .invoice-box table tr td:nth-child(2) {
            text-align: right;
        }

        .invoice-box table tr.top table td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.top table td.title {
            font-size: 45px;
            color: #333;
        }

        .invoice-box table tr.information table td {
            padding-bottom: 40px;
        }

        .invoice-box table tr.heading td {
            background: #eee;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
        }

        .invoice-box table tr.details td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.item td{
            border-bottom: 1px solid #eee;
        }

        .invoice-box table tr.item.last td {
            border-bottom: none;
        }

        .invoice-box table tr.total td:nth-child(2) {
            border-top: 2px solid #eee;
            font-weight: bold;
        }

        @media only screen and (max-width: 600px) {
            .invoice-box table tr.top table td {
                width: 100%;
                display: block;
                text-align: center;
            }

            .invoice-box table tr.information table td {
                width: 100%;
                display: block;
                text-align: center;
            }
        }

        /** RTL **/
        .rtl {
            direction: rtl;
            font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        }

        .rtl table {
            text-align: right;
        }

        .rtl table tr td:nth-child(2) {
            text-align: left;
        }
    </style>

</head>
<body>
</div>
<div class="row">
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="4">
                    <table>
                        <tr>
                            <td class="title">
                                <div style="width:100%; max-width:300px;"><span class="flaticon-pizza-1 mr-1" style="color: #fac564;"></span><span style="color: #fff; font-family: 'Josefin Sans';">Pizza</span><br><small style="color: #fac564; font-family: 'Josefin Sans';">Express</small></div>

                            </td>
                            <td>
                                Invoice #: {{$data['order_number']}}<br>
                                Purchaser: {{$data['buyer_email']}}<br>
                                Order Date: {{$data['order_date']}}
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="information">
                <td colspan="4">
                    <table>
                        <tr>
                            <td>
                                Pizza Express Inc.<br>
                                590, CMT8, District 3<br>
                                HCMC, 700000
                            </td>

                            <td>
                                Pizza Express<br>
                                Alex Cue<br>
                                alex.c@pizza-express.com
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="heading">
                <td></td>
                <td style="text-align: center">
                    Item
                </td>
                <td style="text-align: center">
                    Quantity
                </td>
                <td style="text-align: center">
                    Unit Price
                </td>
            </tr>
            @foreach($op_orderNo as $p)
                <tr class="item">
                    <td></td>
                    <td style="text-align: center;">
                        {{$p->prod_name}}
                    </td>
                    <td style="text-align: center;">
                        {{$p->prod_qty}}
                    </td>
                    <td style="text-align: center;">
                        {{$p->prod_price}}
                    </td>
                </tr>
            @endforeach
            <tr class="total">
                <td></td>
                <td></td>
                <td></td>
                <td>
                    Subtotal: ${{$data['order_totalPayment']}}
                    <br>
                    Service Charge (5%): ${{number_format($data['order_totalPayment']*0.05,2)}}
                    <br>
                    Grand Payment: ${{number_format(($data['order_totalPayment']+$data['order_totalPayment']*0.05),2)}}
                </td>
            </tr>
        </table>
    </div>
</div>
</body>
</html><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Invoice - #123</title>

    <style type="text/css">
        .invoice-box {
            max-width: 100%;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, .15);
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #000;
            background-color: rgba(217,217,217,0.8);
            width: 800px;
        }

        .invoice-box table {
            width: 100%;
            text-align: left;
        }

        .invoice-box table td {
            padding: 5px;
            vertical-align: top;
        }

        .invoice-box table tr td:nth-child(2) {
            text-align: right;
        }

        .invoice-box table tr.top table td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.top table td.title {
            font-size: 45px;
            color: #333;
        }

        .invoice-box table tr.information table td {
            padding-bottom: 40px;
        }

        .invoice-box table tr.heading td {
            background: #eee;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
        }

        .invoice-box table tr.details td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.item td{
            border-bottom: 1px solid #eee;
        }

        .invoice-box table tr.item.last td {
            border-bottom: none;
        }

        .invoice-box table tr.total td:nth-child(2) {
            border-top: 2px solid #eee;
            font-weight: bold;
        }

        @media only screen and (max-width: 600px) {
            .invoice-box table tr.top table td {
                width: 100%;
                display: block;
                text-align: center;
            }

            .invoice-box table tr.information table td {
                width: 100%;
                display: block;
                text-align: center;
            }
        }

        /** RTL **/
        .rtl {
            direction: rtl;
            font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        }

        .rtl table {
            text-align: right;
        }

        .rtl table tr td:nth-child(2) {
            text-align: left;
        }
    </style>

</head>
<body>
</div>
<div class="row">
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="4">
                    <table>
                        <tr>
                            <td class="title">
                                <div style="width:100%; max-width:300px;"><span class="flaticon-pizza-1 mr-1" style="color: #fac564;"></span><span style="color: #fff; font-family: 'Josefin Sans';">Pizza</span><br><small style="color: #fac564; font-family: 'Josefin Sans';">Express</small></div>

                            </td>
                            <td>
                                Invoice #: {{$data['order_number']}}<br>
                                Purchaser: {{$data['buyer_email']}}<br>
                                Order Date: {{$data['order_date']}}
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="information">
                <td colspan="4">
                    <table>
                        <tr>
                            <td>
                                Pizza Express Inc.<br>
                                590, CMT8, District 3<br>
                                HCMC, 700000
                            </td>

                            <td>
                                Pizza Express<br>
                                Alex Cue<br>
                                alex.c@pizza-express.com
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="heading">
                <td></td>
                <td style="text-align: center">
                    Item
                </td>
                <td style="text-align: center">
                    Quantity
                </td>
                <td style="text-align: center">
                    Unit Price
                </td>
            </tr>
            @foreach($op_orderNo as $p)
                <tr class="item">
                    <td></td>
                    <td style="text-align: center;">
                        {{$p->prod_name}}
                    </td>
                    <td style="text-align: center;">
                        {{$p->prod_qty}}
                    </td>
                    <td style="text-align: center;">
                        {{$p->prod_price}}
                    </td>
                </tr>
            @endforeach
            <tr class="total">
                <td></td>
                <td></td>
                <td></td>
                <td>
                    Subtotal: ${{$data['order_totalPayment']}}
                    <br>
                    Service Charge (5%): ${{number_format($data['order_totalPayment']*0.05,2)}}
                    <br>
                    Grand Payment: ${{number_format(($data['order_totalPayment']+$data['order_totalPayment']*0.05),2)}}
                </td>
            </tr>
        </table>
    </div>
</div>
</body>
</html>
