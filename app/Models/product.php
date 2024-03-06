<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'price', 'image', 'description'];
    protected $attributes = [
        'hit' => 300
    ];
}
public function categories()
{
    return $this->belongsToMany(Category::class);
}

public function user()
{
    return $this->belongsTo(User::class);
}