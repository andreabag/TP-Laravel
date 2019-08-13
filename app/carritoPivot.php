<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class carritoPivot extends Model
{
    public $table = "CarritoPivot";
    public $primarykey ="id";
    public $timestamps = false;
    public $guarded = [];

    public function user(){
        return $this->belongsTo(User::class,'id_user');
    }

    public function product(){
        return $this->belongsTo(Articulo::class,'id_product');
    }

}
