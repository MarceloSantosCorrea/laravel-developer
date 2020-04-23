<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AclPermissionAclRoleRequest;
use App\Http\Requests\AclPermissionRequest;
use App\Models\AclPermissionAclRole;

class AclPermissionAclRoleController extends Controller
{
    /**
     * List Acl Permissions Acl Roles
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $all = AclPermissionAclRole::paginate();

        return response()->json($all);
    }

    public function store(AclPermissionAclRoleRequest $request)
    {
        try {
            return response()->json(AclPermissionAclRole::addPermissions($request->acl_role,
                $request->acl_permissions));
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 404);
        }
    }

    /**
     * Show Acl Permissions Acl Role
     *
     * @urlParam uid required string
     * @param  string  $uid
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model|\Illuminate\Http\JsonResponse|object|null
     */
    public function show(string $uid)
    {
        try {
            return AclPermissionAclRole::where('uid', $uid)->firstOrFail();
        } catch (\Exception $e) {
            return response()->json(['message' => 'Acl Permission Acl Role not found'], 404);
        }
    }

    /**
     * Update Acl Permissions Acl Role
     *
     * @urlParam uid required string
     * @param  AclPermissionRequest  $request
     * @param  string  $uid
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(AclPermissionAclRoleRequest $request, string $uid)
    {
        dd($request->all());

        try {
            $model = AclPermissionAclRole::where('uid', $uid)->firstOrFail();
        } catch (\Exception $e) {
            return response()->json(['message' => 'Acl Permission found'], 404);
        }

        return response()->json(AclPermissionAclRole::savePermissions($model, $request->permissions));
    }
}
