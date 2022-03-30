<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Design extends Model
{
    use HasFactory;
    protected $table = 'designs';

    public function artist(){
        return $this->belongsTo(Artist::class);
    }
    public function image(){
        return $this->hasOne(Image::class);
    }
}
