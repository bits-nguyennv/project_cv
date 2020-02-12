<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'name',
        'description',
        'start_time	',
        'finish_time',
        'project_id',
        'member_id',
        'status_id'
    ];
    
    public function member()
    {
        return $this->belongsTo(Member::class);
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function task_status()
    {
        return $this->hasOne(Task_status::class);
    }
}
