<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_items extends Model
{
    use HasFactory;
    protected $table= 'order_items';
    protected $fillable = [
       "user_id",
       "name",
       "qte",
       "total_price",
      " quantite_elem",
       "tracking_no",
       "paid", "delivered"
      
    ];
    public function orders()
    {
        return $this->hasMany(Order::class);
    }

}
