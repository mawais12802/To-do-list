<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    

    protected $fillable = ['title','description','due_date','completed','priority','user_id'];
    protected $casts = [
        'completed' => 'boolean',
        'due_date' => 'date',
    ];
}


