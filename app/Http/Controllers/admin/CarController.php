<?php

namespace App\Http\Controllers\admin;

use App\Models\Car;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\admin\CarController;

class CarController extends Controller
{
    //


    public function view() {
        $car = Car::all();

        return view('backend.pages.allcars',compact('car'));
    }

    public function add() {

        return view('backend.pages.addnewcars');
    }

    public function available() {

        return view ('backend.pages.carsavailable');
    }

    public function sold() {

        return view ('backend.pages.carsold');
    }

    public function category() {

        return view ('backend.pages.carcategory');
    }


    public function show(Request $request) {

        Car::create(
            [

        'car_name'=>$request->car_name,
        'car_brand'=>$request->car_brand,
        'car_details'=>$request->car_details,
        'car_quantity'=>$request->car_quantity,
        'car_varient'=>$request->car_varient,
        'car_price'=>$request->car_price,

            ]
            );
            return redirect()->route('car.view');

    }

}

