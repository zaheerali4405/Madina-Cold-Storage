<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Containers extends Model
{
    use HasFactory;
    public function orders(){
        return $this->hasMany(Orders::class, 'container_id');
    }
    
}
