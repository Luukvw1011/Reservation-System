<?php

namespace App\Models;

use Database\Factories\RestaurantFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
        'status',
        'owner_user_id',
        'city',
        'contact_email',
        'contact_phone',
        'website',
        'notes',
        'rating',
        'votes',
        'image',
    ];

    protected $casts = [
        'rating' => 'float',
        'votes' => 'integer',
    ];

    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class, 'owner_user_id');
    }
}
