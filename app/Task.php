<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $casts =[
        'checked' => 'boolean'
    ];

    protected $fillable = ['title', 'checked',  'description'];

    protected $hidden = ['completed_at', 'updated_at', 'created_at', 'sort_order', 'user_id'];
}
