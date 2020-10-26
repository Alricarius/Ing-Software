<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class imagen extends Model
{
    use HasFactory;

    protected $table = 'imagen';
    protected $primaryKey = 'id_img';
    public $timestamps = false;

    public function producto()
    {
        return $this->belongsTo('App\Models\Producto');
    }
}
