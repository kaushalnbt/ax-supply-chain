<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = [
        'display_name',
        'name',
        'name2',
        'address1',
        'address2',
        'city',
        'state',
        'zip',
        'phone',
        'fax',
        'email',
        'order_template',
        'dba_rx',
    ];
}
