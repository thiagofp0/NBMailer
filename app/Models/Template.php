<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'filename',
        'type',
        'lastSubmission'
    ];
    
    protected $primaryKey = 'id';
    
    /* public function __construct()
    {
        $this->lastSubmission = date('d-m-Y H:i');
    } */

}
