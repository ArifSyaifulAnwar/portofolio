<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class PortofolioController extends Controller
{
    public function haldepan()
    {
        return view('portofolio');
  
    }
}