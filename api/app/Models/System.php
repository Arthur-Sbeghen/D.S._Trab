<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class System extends Model
{
    protected $fillable = [
        'name',
        'variables',
    ];

    protected $casts = [
    'variables' => 'array',
];

}
