<?php

namespace App\Http\Controllers;

use App\buyer;
use App\contactform;
use App\product_cat;
use App\products;
use App\shoppingcart;
use App\slider;
use App\aboutpage;
use App\ourservice;
use App\ourchef;
use App\contact;
use App\contactuser;
use App\newsletter;
use http\Cookie;
use App\order;
use App\orderProduct;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Session ;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
//PDF Print out
use PDF;
//for Mail
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../vendor/autoload.php';

class indexController extends Controller
{
    public function returnIndex(){
        $products = products::all();
        $slider = slider::all();
        $aboutpage = aboutpage::all();
        $ourservice = ourservice::all();
        return view('pages.home', compact('products','slider','aboutpage','ourservice'));
    }

    public function returnMenu(){
        $products = products::all();
        return view('pages.menu', compact('products'));
    }

    public function returnAbout(){
        $products = products::all();
        $aboutpage = aboutpage::all();
        $ourchef = ourchef::all();
        $contact = contact::all();
        $contactform = contactform::all();
        return view('pages.about', compact('products','aboutpage','ourchef','contact','contactform'));
    }

    public function returnContact(){
        $products = products::all();
        $contact = contact::all();
        $contactform = contactform::all();
        return view('pages.contact', compact('products','contact','contactform'));
    }

    public function returnBilling(){
        return view('pages.billing1');
    }

    public function getAdd2Cart($id){
        $product = products::find($id);
        if ($product)
        {
            if($product->prod_promoPrice == 0){
                $cart = \Cart::add($id,$product->prod_name,1,$product->prod_unitPrice,0,['img' => $product->prod_img],0,0);
            } else {
                $cart = \Cart::add($id,$product->prod_name,1,$product->prod_promoPrice,0,['img' => $product->prod_img],0,0);
            }
            return redirect()->route('menu-page', ['data' => $cart]);
        }
    }

    public function listCartProduct()
    {
        $products = \Cart::content();
        $product_cat = product_cat::all();
//        $top = topping::all();
//        $users = user::all();
        $prod = products::all()->sortByDesc('prod_id')->take(2);

        $viewData = [
            'products' => $products,
            'product_cat' => $product_cat,
            'prod' => $prod,
        ];
        return view('pages.cart',$viewData);
    }

    public function refresh(){
        \Cart::destroy();
        return redirect()->back();
    }

    public function remove1($id){
        \Cart::remove($id);
        return redirect()->back();
    }

    public function guestPurchase(){
        return view('pages.billing');
    }

    public function getGuestInfo(Request $r){
        $test = mt_rand(1,10000);
        $product = \Cart::content();

            $o = new order;
            $o -> buyer_email = $r->email;
            $o -> order_number = $test;
            $o -> order_totalQty = \Cart::count();
            $o -> order_totalPayment = \Cart::subtotal();
            $o -> save();

         $order_id = DB::getPdo()->lastInsertId();

        foreach ($product as $p) {
            $op = new orderProduct;
            $op->order_id = $order_id;
            $op -> order_number = $test;
            $op->prod_id = $p->id;
            $op->prod_name = $p->name;
            $op->prod_price = $p->price;
            $op->prod_qty = $p->qty;
            $op->save();
        }

        \Session::flash('message', "Successfully Purchase, Your order: {$test}");

        //Sending E-mail to user with Order Number
            $mail = new PHPMailer(true);                              // Passing `true` enables
            try {
                //Server settings
                $mail->SMTPDebug = 2;                                 // Enable verbose debug output
                $mail->isSMTP();                                      // Set mailer to use SMTP
                $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                $mail->SMTPAuth = true;                               // Enable SMTP authentication
                $mail->Username = 'passion22021@gmail.com';                 // email username
                $mail->Password = 'Pp29031995';                           // email password
                $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 587;
                $mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );                                    // TCP port to connect to
                //Recipients
                $mail->setFrom('passion22021@gmail.com', 'Pizza Express'); //sender
                $mail->addReplyTo('passion22021@gmail.com', 'Pizza Express'); //reply to
                $mail->addAddress("{$r->email}", "{$r->fullname}"); // add receiver
                //Content
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = "Pizza Express - Order #{$test}";
                $mail->Body    = "Thank you for choosing our service. <br> Your order number is <b>#{$test}</b>. <br>In order to obtain the invoice please kindly direct to <a href='http://localhost:8080/pizzaexpress/public/getInvoice'>here</a>
                                    <br> Best regards, <br> Pizza Express Vietnam.";
                $mail->AltBody = "This is the body in plain text for non-HTML mail clients. Your order number is #{$test}";
                $mail->send();
            } catch (Exception $e) {
                echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
            }

            $buyer = new buyer;
            $buyer -> identifier = $test;
            $buyer -> buyer_fullName = $r -> fullName;
            $buyer -> buyer_email = $r -> email;
            $buyer -> buyer_address = $r -> address;
            $buyer -> buyer_phone = $r -> phone;
            $buyer -> buyer_note = $r -> note;
            $buyer->save();

        \Cart::destroy();

        return \redirect()->back();
    }

    public function getNewsletter(Request $req){
        $newsletter = new newsletter;
        $newsletter -> email = $req -> email;
        $newsletter -> save();
        return redirect()->back();
    }

    public function getContact(Request $req){
        $contactuser = new contactuser;
        $contactuser -> name = $req -> name;
        $contactuser -> email = $req -> email;
        $contactuser -> subject = $req -> subject;
        $contactuser -> message = $req -> message;
        $contactuser->save();
        return redirect()->back();
    }

    public function returnInvoice(){
        return view('pages.billing1');
    }

    public function getInvoice(){
        $cart = shoppingcart::all();
        return view('pages.billing1', compact('cart'));
    }

    public function getNumber(Request $r){
        $op_orderNo = orderProduct::all()->where('order_number', $r->orderNo);
        $o_orderNo = order::all()->where('order_number', $r->orderNo);
        $data=0;
        switch ($r->submitBtn){
            case 'getInvoice':
                if(($o_orderNo!=''))
                {
                    foreach($o_orderNo as $o){
                        $data = [
                            'order_number' => $o->order_number,
                            'buyer_email' => $o->buyer_email,
                            'order_totalQty' => $o->order_totalQty,
                            'order_totalPayment' => $o->order_totalPayment,
                            'order_date' => $o->order_date,
                        ];
                    }
                    return view('pages.billing1', compact('data', 'op_orderNo'));
                }
                else
                {
                    \Session::flash('message', "Fail to print out invoice. Please check your Order Number again.");
                    return redirect()->back();
                }
                break;
            case 'printInvoice':
                foreach($o_orderNo as $o){
                    $data = [
                        'order_number' => $o->order_number,
                        'buyer_email' => $o->buyer_email,
                        'order_totalQty' => $o->order_totalQty,
                        'order_totalPayment' => $o->order_totalPayment,
                        'order_date' => $o->order_date,
                    ];
                }
                $pdf = \App::make('dompdf.wrapper');
                $pdf->loadView('pages.invoice',compact('data', 'op_orderNo'))->setPaper('a4', 'landscape')->save('invoice.pdf');
                return $pdf->stream();
                break;
            default:
                \Session::flash('message2', "Incorrect Order Number or empty. Please check your Order Number again.");
                return \redirect()->back();
                break;
        }
    }
    public function logIn(){
        return Redirect::to('admin');
    }
}
