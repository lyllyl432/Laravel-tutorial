<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    public function jobs()
    {
        return $this->belongsToMany(Job::class, 'job_tags');
    }

    public function posts()
    {
        return $this->belongsToMany(Post::class, table: 'post_tags');
    }
}
