<?php

namespace App\Models\Acl;

use Illuminate\Database\Eloquent\Model;

class AclRoleUser extends Model
{
    protected $table      = 'acl_role_user';
    public    $timestamps = false;
    protected $fillable   = ['user_id', 'acl_role_id'];
}
