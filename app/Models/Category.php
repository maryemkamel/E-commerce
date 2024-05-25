<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = [
        "title",
        "slug",
        "description",

    ];
    public function getRouteKeyName(){
        return "slug";
    }
    public function products(){
        return $this->hasMany(Product::class);
    }
}