<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Zarinpal\Zarinpal;
use App\Zaarinpal;

class ZarinpalController extends Controller
{
    public function request(Zarinpal $zarinpal) {
        $payment = [
            'CallbackURL' => route('invoice'), // Required
            'Amount'      => 5000,            // Required
            'Description' => 'a short description',   // Required
            'Email'       => 'saeedp47@gmail.com',    // Optional
            'Mobile'      => '0933xxx7694'            // Optional
        ];
        $response = $zarinpal->request($payment);
        if($response['Status'] === 100) {
            $authority = $response['Authority'];
            return $zarinpal->redirect($authority);
        }
        return 'Error,
        Status: '.$response['Status'].',
        Message: '.$response['Message'];

        
    }

    
}
