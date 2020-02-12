<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project_status extends Model
{
    protected $fillable = [
        'name'
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
