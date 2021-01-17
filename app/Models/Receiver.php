<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receiver extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'tag',
        'lastSubmissionTo'
    ];

    protected $primaryKey = 'id';

}
