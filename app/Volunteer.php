<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Volunteer extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'blood_group',
        'street_address',
        'district',
        'gender',
        'status',
        'created_by',
        'updated_by',
        'image',

    ];
}
