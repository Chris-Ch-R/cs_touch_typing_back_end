<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WPM extends Model
{
    public $table = "wpms";
    use HasFactory;
    public $timestamps = false;
}
