<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectStatus extends Model
{
    protected $fillable = [
        'name'
    ];

    public function projects()
    {
        return $this->belongsTo(Project::class);
    }
}
