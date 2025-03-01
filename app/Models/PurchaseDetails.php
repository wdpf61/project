<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseDetails extends Model
{
    use HasFactory;
    protected $table="purchase_details";
    protected $fillable =['purchase_id','product_id','qty', 'price', 'vat', 'discount'];

    function product(){
        return $this->belongsTo(Product::class);
    }
    
}
