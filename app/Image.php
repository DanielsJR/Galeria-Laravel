<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $filliable = [
        'title',
        'description',
        'thumbnail',
        'imageLink',
        'user_id'
    ];
}
