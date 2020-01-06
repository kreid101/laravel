<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    public function user()
{
    return $this->$this->belongsTo(User::class);
}
}
