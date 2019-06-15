<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PayController extends Controller
{
    public function index()
    {
        return view('event');
    }
    public function pay(Request $request)
    {

        $api = new \Instamojo\Instamojo(
            config('services.instamojo.api_key'),
            config('services.instamojo.auth_token'),
            config('services.instamojo.url')
        );


        $response = $api->paymentRequestCreate(array(
            "purpose" => " Testing",
            "amount" => $request->amount,
            "buyer_name" => "$request->name",
            "send_email" => true,
            "email" => "$request->email",
            "phone" => "$request->mobile_number",
            /*"redirect_url" => "http://127.0.0.1/pay-success",*/
            "redirect_url" => "http://localhost/PaymentInstamojo/public/status",

        ));

        header('Location: ' . $response['longurl']);
        exit();
    }

    public function success(Request $request){
            $api = new \Instamojo\Instamojo(
                config('services.instamojo.api_key'),
                config('services.instamojo.auth_token'),
                config('services.instamojo.url')
            );

            $response = $api->paymentRequestStatus(request('payment_request_id'));

            if( !isset($response['payments'][0]['status']) ) {
                dd('payment failed');
            } else if($response['payments'][0]['status'] != 'Credit') {
                dd('payment failed');
            }

        dd($response);
    }
}
