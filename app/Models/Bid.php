<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Bid extends Model
{


    use HasFactory;
    protected $table ="bids";
    protected $primayKey ="id";
    protected $fillable = [
        'horse_name',
        'status',
        'user_id',
        'bid_amount',
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id','user_id');
    }

}

