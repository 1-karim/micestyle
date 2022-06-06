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
        'email',
        'description',
        'address',
        'phone',
        'logo',
        'ban_status',
        'longitude',
        'latitude',
        'likes',
        'rating',
        'venue_category_id',
    ];

    protected $hidden=[
        'id',
    ];




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
