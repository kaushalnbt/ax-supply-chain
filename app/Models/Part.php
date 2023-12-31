<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    use HasFactory;

    public function supplierDetails(){
        return $this->belongsTo(Supplier::class, 'supplier', 'id');
    }
}
