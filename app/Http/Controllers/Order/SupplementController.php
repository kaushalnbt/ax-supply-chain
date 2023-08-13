<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;


class SupplementController extends Controller
{
    //
    public function index(){
        
        return view('order.supplement.supplement');
    }
}
