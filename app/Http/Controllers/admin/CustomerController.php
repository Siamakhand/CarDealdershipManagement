<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    
    public function view() {

        return view('backend.pages.Customer.customers');
    }
}
