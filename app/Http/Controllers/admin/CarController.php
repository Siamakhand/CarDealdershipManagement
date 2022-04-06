<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarController extends Controller
{
    //


    public function view() {

        return view('backend.pages.allcars');
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

}

