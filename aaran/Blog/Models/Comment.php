<?php

namespace Aaran\Blog\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $guarded = [];

    public function replies()
    {
        return $this->hasMany(Reply::class);
    }
}
