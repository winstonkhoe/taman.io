<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionHeader extends Model
{
    use HasFactory;
    protected $table = 'transaction_headers';
    public $timestamps = false;

    public function garden(){
        return $this->hasMany(TransactionDetailGarden::class);
    }

    public function service(){
        return $this->hasMany(TransactionDetailService::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
