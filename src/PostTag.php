<?php

namespace App;

class PostTag extends \Illuminate\Database\Eloquent\Model
{
    public function tag()
    {
        return $this->belongsTo(__NAMESPACE__ . '\Tag');
    }

    public function post()
    {
        return $this->belongsTo(__NAMESPACE__ . '\Post');
    }
}