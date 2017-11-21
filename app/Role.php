<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    public function users() {
        return $this->hasMany(Role::class, 'user_role');
    }
}
