<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table = 'services';

    public function seller(){
        return $this->hasOne(Seller::class, 'id', 'seller_id');
    }
    public function image(){
        return $this->hasOne(ServiceImage::class);
    }
}
