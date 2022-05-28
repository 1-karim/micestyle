<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserVenue extends Model
{
    use HasFactory;
    protected $table = "user_venue";
    protected $fillable = ["user_id","venue_id"];
}
