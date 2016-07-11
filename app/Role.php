<?php

namespace Trma;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';
    public function users()
    {
        return $this->hasMany(\Trma\User::class, 'role_id', 'id');
    }
}
