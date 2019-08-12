<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    public $table = "articulos";
    public $primarykey ="id";
    public $timestamps = false;
    public $guarded = [];

    public function articulosDetalle(){
      return $this->title . " " . $this->precio;
    }
}
