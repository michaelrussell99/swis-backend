<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class PostView extends Model
{
    protected $fillable = [
        'post_id','user_id','count'
    ];

}