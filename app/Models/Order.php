<?php

namespace App\Models;
use App\Models\Orderitems;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public function contact(){
    return $this->hasone(Orderitems::class );
    
    }
}
