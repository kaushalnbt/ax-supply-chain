<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('home');
    }

    public function manage(){
        return view('manage');
    }
    public function order(){
        $category = DB::table('item_category')->get();
        return view('order', compact('category'));
    }
}
