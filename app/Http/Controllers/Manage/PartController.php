<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PartController extends Controller
{
    public function index(){
        return view('manage.part.part-list');
    }
}
