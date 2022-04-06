<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployesController extends Controller
{
    Public function view() {

        return view ('backend.pages.Employes.employes');
    }
}
