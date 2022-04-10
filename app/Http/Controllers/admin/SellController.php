<?php

namespace App\Http\Controllers\admin;

use App\Models\Sell;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\admin\SellController;

class SellController extends Controller
{
    
    public function view() {
      
      return view('backend.pages.Sells.sell');  
    }

    public function add() {
      $sell = Sell::all();
      return view('backend.pages.Sells.list',compact('sell'));
    }

    public function show(Request $request) {

      Sell::create([

        'Buyer_Name'=>$request->Buyer_Name,
        'Buyer_Address'=>$request->Buyer_Address,
        'Buyer_Contact'=>$request->Buyer_Contact,
        'car_name'=>$request->car_name,
        'car_brand'=>$request->car_brand,
        'car_details'=>$request->car_details,

      ]);
        return redirect()-> back();
    }
}
