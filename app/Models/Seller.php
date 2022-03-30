<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;
    protected $table = 'sellers';

    public function user(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }
    public function image(){
        return $this->hasOne(Image::class, 'id', 'image_id');
    }

    public function services(){
        return $this->hasMany(Service::class, 'seller_id', 'id');
    }

    public function garden_offers(){
        return $this->hasMany(GardenOffer::class, 'seller_id', 'id');
    }
}
