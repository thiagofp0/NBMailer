<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    protected $fillable = [
        'title',
        'path',
        'type',
        'lastSubmission'
    ];

    protected $attributes = [
        'accessLevel' => 'manager',
    ];
    
    protected $primaryKey = 'id';
    protected $dateFormat = 'DD/MM/YY';
    
    public function __construct()
    {
        $this->path = '/storage/templates/'. $this->title . '.' . $this->type;
        $this->lastSubmission = date('d/m/Y H:i');
    }

}
