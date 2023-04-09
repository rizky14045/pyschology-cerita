<?php

namespace App\Models;

use App\Models\Price;
use App\Models\Psychology;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PsychologyOrder extends Model
{
    use HasFactory;

    protected $table ='psychology_orders';

    protected $fillable = [
        'session_id',
        'client_name',
        'client_phone',
        'psychology_id',
        'date',
        'time_start',
        'time_end',
        'source',
        'number_counseling_session',
        'price_id',
        'promo_id',
        'reschedule',
        'extended',
        'extended_counseling_minute',
        'status'
    ];

    public function psychology()
    {
        return $this->hasOne(Psychology::class, 'id', 'psychology_id');
    }

    public function price()
    {
        return $this->hasOne(Price::class, 'id', 'price_id');
    }
}
