<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'total_amount',
    ];

    // Definisikan relasi antara model Order dan model User jika diperlukan
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Definisikan relasi antara model Order dan model OrderDetail jika diperlukan
    // public function orderDetails()
    // {
    //     return $this->hasMany(OrderDetail::class, 'order_id');
    // }
}
