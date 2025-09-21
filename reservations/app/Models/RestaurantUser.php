<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class RestaurantUser extends Pivot
{
    protected $table = 'restaurant_user';
    protected $fillable = ['restaurant_id','user_id','role','joined_at'];
    public $timestamps = true;
}
