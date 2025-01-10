<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    public function getCustomer(){
        return $this->belongsTo(Customers::class, 'customer_id', 'id');
    }

    public function getProduct(){
        return $this->belongsTo(Products::class , 'product_id', 'id');
    }
    
    public function getContainer(){
        return $this->belongsTo(Containers::class , 'container_id', 'id');
    }

    public function customer()
    {
    return $this->belongsTo(Customers::class);
    }

    public function dispatches()
    {
    return $this->hasMany(Dispatches::class, 'order_id');
    }

}
