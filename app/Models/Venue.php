<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Vinkla\Hashids\Facades\Hashids;

class Venue extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'address',
        'venue_category_id',
        'longitude',
        'latitude',
        'likes',
        'logo',
        'ban_status'
    ];

    protected $hidden=[
        'id',
    ];

    protected $appends = ['hashid'];

    public function getHashidAttribute()
    {
        return Hashids::encodeHex($this->attributes['id']);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_venue');
    }

    // public function users(){
    //     return $this->belongsToMany(
    //         '\User\Models\User',
    //         'user_partners',
    //         'partner_id',
    //         'user_id'
    //     )->withTimestamps();
    // }
}
