<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Campaign extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name',
        'details',
        'date',
        'venue',
        'organizer',
        'created_by',
        'updated_by',
        'image',
        'status',
    ];

}
