<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{

    protected $fillable = ['name', 'contact_number', 'event_city', 'event_type'];

    use HasFactory;
}
