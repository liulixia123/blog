<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

// 从User来看 user与userRole 是
// 一对一,一对多
// 多对多
class User extends Model
{
    protected $table = 'admin_user';

    public function userRole()
    {
        // return $this->hasOne("关联模型", "关联模型 的 id ", "当前模型的id");
        return $this->hasOne(\App\Model\UserRole::class, "role_id", "role_id");
    }

    public function instance()
    {
        // return $this->hasOne("关联模型", "关联模型 的 id ", "当前模型的id");
        return $this->hasOne(\App\Model\Instance::class, "instance_id", "instance_id");
    }
}
