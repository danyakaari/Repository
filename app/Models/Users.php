<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    public function profiles()
    {
        return $this->hasOne(Profiles::class, 'user_id');
    }
}
