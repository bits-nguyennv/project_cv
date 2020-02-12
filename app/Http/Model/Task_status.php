<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task_status extends Model
{
    protected $fillable = [
        'name'
    ];

    public function task()
    {
        return $this->belongsTo(Task::class);
    }
}
