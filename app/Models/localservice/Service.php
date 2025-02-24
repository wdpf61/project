<?php

namespace App\Models\localservice;
use Illuminate\Database\Eloquent\Model;
class Service extends Model{



    function category(){
        return $this->belongsTo(Category::class);
    }
    function provider(){
        return $this->belongsTo(Provider::class);
    }
    function review(){
        return $this->hasOne(Review::class);
    }

}
?>
