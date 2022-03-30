<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    public function design(){
        return $this->belongsTo(Design::class, 'id', 'design_id');
    }
}
