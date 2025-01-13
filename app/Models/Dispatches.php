<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dispatches extends Model
{
    use HasFactory;
    public function getOrder(){
        return $this->belongsTo(Orders::class, 'order_id', 'id');
    }

    public function order()
    {
    return $this->belongsTo(Orders::class);
    }
    
}
