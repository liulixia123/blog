<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

// 从UserRole来看 userRole 于user 是一对多
class UserRole extends Model
{
    protected $table = 'tp_user_role';

    public function user()
    {
        return $this->hasMany(\App\Model\User::class, "role_id", "role_id");
    }

    public function userGroup()
    {
        return $this->hasOne(\App\Model\UserGroup::class, "group_id", "group_id_array");
    }
}
