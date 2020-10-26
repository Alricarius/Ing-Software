<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $table = 'producto';
    protected $primaryKey = 'id_prod';
    public $timestamps = false;

    public function uploadImagen()
    {
        return $this->hasMany('App\Models\imagen', 'fk_prod');
    }
}
