<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OpsController extends Controller
{
    public function index(){
        return view('ops/index');
    }
}
