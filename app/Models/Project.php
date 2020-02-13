<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'description',  'start_time',   'finish_time',  'status_id', 'customer_id'
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function members()
    {
        return $this->belongsToMany(Member::class);
    }

    public function project_status()
    {
        return $this->belongsTo(ProjectStatus::class);
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
