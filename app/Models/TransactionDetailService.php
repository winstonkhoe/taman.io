<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetailService extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function service() {
        return $this->belongsTo(Service::class, 'service_id', 'id');
    }
}
