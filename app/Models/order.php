<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $fillable=[
        "price",
        "address",
        "status",
    ];
    public function user(){
        return $this->belongsTo(user::class);
    }
    public function products(){
        return $this->belongsToMany(product::class)->withPivot("count","price");
    }
}
