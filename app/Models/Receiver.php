<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Receiver extends Model
{
    protected $fillable = [
        'name',
        'email',
        'tag',
        'lastSubmissionTo'
    ];

    protected $primaryKey = 'id';
    protected $dateFormat = 'DD/MM/YY';
}
