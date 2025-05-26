<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    use HasFactory;
    protected $table = 'employee';
    protected $fillable = [
        'name',
        'email',
    ];

    public function jobs(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Job::class, 'employee_job_listing', 'employee_id', 'job_id')->withTimestamps();
    }

}
