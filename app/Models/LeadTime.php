<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeadTime extends Model
{
    use HasFactory;
    protected $table = 'lead_time';
    protected $guarded = [];
    public $timestamps = false;
}
