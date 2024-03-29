<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function order_details()
    {
        return $this->hasMany(OrderDetail::class);
    }
    public function shop()
    {
        return $this->belongsTo(Shop::class,'shop_id','id');
    }

}
