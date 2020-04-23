<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AclRoleRequest;
use App\Models\AclRole;

/**
 * Class AclRoleController
 * @package App\Http\Controllers\Api
 * @group Acl Roles
 */
class AclRoleController extends Controller
{
    /**
     * List Acl Roles
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $all = AclRole::paginate();

        return response()->json($all);
    }

    /**
     * Create Acl Roles
     *
     * @param  AclRoleRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(AclRoleRequest $request)
    {
        $aclRole = AclRole::create($request->all());

        return response()->json($aclRole);
    }

    /**
     * Show Acl Role
     *
     * @urlParam uid required string
     * @param  string  $uid
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model|\Illuminate\Http\JsonResponse|object|null
     */
    public function show(string $uid)
    {
        try {
            return AclRole::where('uid', $uid)->with('aclPermissions')->firstOrFail();
        } catch (\Exception $e) {

            dd($e->getMessage());
            return response()->json(['message' => 'Acl Role not found'], 404);
        }
    }

    /**
     * Update Acl Role
     *
     * @urlParam uid required string
     * @param  AclRoleRequest  $request
     * @param  string  $uid
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(AclRoleRequest $request, string $uid)
    {
        $data = $request->all();

        try {
            $aclRole = AclRole::where('uid', $uid)->firstOrFail();
        } catch (\Exception $e) {
            return response()->json(['message' => 'Acl Role found'], 404);
        }

        $aclRole->fill($data);
        $aclRole->save();

        return response()->json($aclRole);
    }

    /**
     * Delete Acl Role
     *
     * @urlParam uid required string
     * @param  string  $uid
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model|\Illuminate\Http\JsonResponse|object|null
     * @throws \Exception
     */
    public function destroy(string $uid)
    {
        try {
            $aclRole = AclRole::where('uid', $uid)->first();
        } catch (\Exception $e) {
            return response()->json(['message' => 'Acl Role found'], 404);
        }

        $aclRole->delete();

        return $aclRole;
    }
}
