<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VenueCategorie extends Model
{
    use HasFactory;
    protected $table = "venue_categories";
    protected $fillable=[
        'title'
    ];

}
