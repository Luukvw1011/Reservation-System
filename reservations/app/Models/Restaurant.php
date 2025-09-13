<?php

namespace App\Models;

use Database\Factories\RestaurantFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    /** @use HasFactory<RestaurantFactory> */
    use HasFactory;

    use HasUuids;

    protected $table = 'restaurants';

    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'title',
        'type',
        'rating',
        'votes',
        'image'
    ];

    protected $casts = [
        'rating' => 'float',
        'votes' => 'integer'
    ];
}
