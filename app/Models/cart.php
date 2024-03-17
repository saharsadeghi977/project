<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    use HasFactory;
    //Create an empty array because by default the basket is empty
    public $product=[];
    public $count=0;
    public $price=0;
    public $address=null;

   
    public function addtocart($product){
        if(array_key_exists($product->id,$this->products)){
           $this->products[$product->id]=["product"=>$product,"count"=>$this->products['count']+1
        ];

        }
        else{
            $this->products[$product->id]=[
                "product"=>$product,"count"=>1];
            
        }
        $this->price +=$product->price;
        $this->count +=1;
    
    }
}
