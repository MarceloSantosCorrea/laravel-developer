<?php

namespace App\Models;

use App\Traits\BootTrait;
use Illuminate\Database\Eloquent\Model;

class AclPermissionAclRole extends Model
{
    use BootTrait;

    protected $table      = 'acl_permission_acl_role';
    public    $timestamps = false;
    protected $fillable   = ['acl_permission_id', 'acl_role_id'];

    public static function addPermissions(string $roleName, array $permissions = [])
    {
        $role = AclRole::where('name', $roleName)->firstOrFail();

        if ($permissions) {
            foreach ($permissions as $permissionName) {

                $permission = AclPermission::where('name', $permissionName)->first();
                if ($permission) {
                    self::create(['acl_permission_id' => $permission->id, 'acl_role_id' => $role->id]);
                }
            }
        }

        return AclRole::where('name', $roleName)->with('aclPermissions')->firstOrFail();
    }
}
