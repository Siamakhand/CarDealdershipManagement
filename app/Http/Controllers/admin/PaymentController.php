<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    
    public function view() {

        return view('backend.pages.Payment.paymenthistory');
    }
}
