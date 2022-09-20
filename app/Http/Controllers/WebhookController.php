<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebhookController extends Controller
{

    public function index(Request  $request)
    {
        // load from environment variables
        $secret = 'XYZ';
        $content = $request->getContent();

        $sig_calculated = base64_encode(hash_hmac('sha256', $content, $secret, true));

        $sig_sent = $request->headers->get('x-kc-signature');

        // return some more readable response
        return dd(hash_equals($sig_calculated, $sig_sent));
    }
}
