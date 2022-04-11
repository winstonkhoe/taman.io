<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GardenOffer extends Model
{
    use HasFactory;
    protected $table = 'garden_offers';

    public function design(){
        return $this->belongsTo(Design::class);
    }
    public function seller(){
        return $this->belongsTo(Seller::class);
    }
}
