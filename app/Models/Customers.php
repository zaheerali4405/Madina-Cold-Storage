<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customers extends Model
{
    use HasFactory;
    public function orders()
{
    return $this->hasMany(Orders::class, 'customer_id');
}

    public function dispatches()
{
    return $this->hasManyThrough(Dispatches::class, Orders::class);
}

}
