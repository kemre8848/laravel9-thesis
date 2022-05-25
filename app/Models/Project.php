<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    # many to one

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function review(){
        return $this->hasMany(Comment::class);
    }
}
