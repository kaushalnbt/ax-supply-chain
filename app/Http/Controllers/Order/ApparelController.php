<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApparelController extends Controller
{
    //
    public function index(){
        
        return view('order.apparel.apparel');
    }
}
