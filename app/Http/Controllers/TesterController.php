<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LaravelPayfort\Facades\Payfort;

class TesterController extends Controller
{
    public function test()
    {

        return Payfort::redirection()->displayRedirectionPage([
            'command' => 'PURCHASE',              # AUTHORIZATION/PURCHASE according to your operation.
            'merchant_reference' => 'ORDR.'.rand(10000,100000),   # You reference id for this operation (Order id for example).
            'amount' => 100,                           # The operation amount.
            'currency' => 'SAR',                       # Optional if you need to use another currenct than set in config.
            'customer_email' => 'example@example.com'  # Customer email.
        ]);
       // return ["ok"];
    }

    public function responsePF(Request $request)
    {
        return $request;
    }

    public function notifay(Request $request)
    {
        return $request;
    }
}
