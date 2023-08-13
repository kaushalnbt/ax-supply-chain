<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'sku',
        'short_name',
        'unit_cost',
        'sale_price',
        'unit_id',
        'role',
        'ao_module',
        'pick_free_mult',
        'digital',
        'kit_sku',
        'company',
        'archive',
        'category',
        'add_to_awebar',
        'awebar_list',
        'awebar_tags',
        'group_tag',
        'allow_in_feed',
        'product_url',
        'product_image_url',
        'sub_category',
        'tags',
    ];
}
