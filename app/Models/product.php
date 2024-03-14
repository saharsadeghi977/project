<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable = ['title','name', 'price', 'image', 'description'];
  

public function categories()
{
    return $this->belongsToMany(Category::class);
}

public function user()
{
    return $this->belongsTo(User::class);

   
}
public function getImageShowAttribute(){
    return url()->asset("storage/".$this->image);

}
public function getHrefurlAttribute(){
    return route("productDetail",['product' =>$this->id]);

}

}