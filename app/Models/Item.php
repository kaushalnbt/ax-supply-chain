<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'category',
        'archived',
        'supplier_id',
        'velocity_calc_type',
        'supplier_item_name',
        'supplier_desc',
        'unit_cost',
        'unit_weight',
        'low_point',
        'reorder_amount',
        'case_qty',
        'pallet_qty',
        'case_weight',
        'pallet_weight',
        'image',
    ];
}
