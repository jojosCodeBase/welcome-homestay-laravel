<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisitorCount extends Model
{
    use HasFactory;

    protected $table = "visitor_counts";
    protected $fillable = [
        'ip_address',
        'user_agent'
    ];
}
