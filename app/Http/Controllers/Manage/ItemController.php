<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        return view('manage.item.item-list');
    }

    // $items = Item::all();

    //$suppliers = Supplier::first();

    //return view('manage.item.item-list', compact('items', 'suppliers'));
}
