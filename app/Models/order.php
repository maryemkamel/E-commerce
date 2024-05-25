<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $fillable = [
        "user_id", "orderitem_id","product_name", "qty",
        "price", "total",
       
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function orderitems()
    {
        return $this->belongsTo(order_items::class)->withTimestamps();;
    }
    
}
