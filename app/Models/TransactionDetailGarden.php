<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetailGarden extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function offer() {
        return $this->belongsTo(GardenOffer::class, 'garden_offer_id', 'id');
    }
}
