<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AclPermissionRequest;
use App\Models\AclPermission;

/**
 * Class AclPermissionController
 * @package App\Http\Controllers\Api
 * @group Acl Permissions
 */
class AclPermissionController extends Controller
{
    /**
     * List Acl Permissions
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $all = AclPermission::paginate();

        return response()->json($all);
    }

    /**
     * Create Acl Permissions
     *
     * @param  AclPermissionRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(AclPermissionRequest $request)
    {
        $aclPermission = AclPermission::create($request->all());

        return response()->json($aclPermission);
    }

    /**
     * Show Acl Permissions
     *
     * @urlParam uid required string
     * @param  string  $uid
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model|\Illuminate\Http\JsonResponse|object|null
     */
    public function show(string $uid)
    {
        try {
            return AclPermission::where('uid', $uid)->firstOrFail();
        } catch (\Exception $e) {
            return response()->json(['message' => 'Acl Permission found'], 404);
        }
    }

    /**
     * Update Acl Permissions
     *
     * @urlParam uid required string
     * @param  AclPermissionRequest  $request
     * @param  string  $uid
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(AclPermissionRequest $request, string $uid)
    {
        $data = $request->all();

        try {
            $aclPermission = AclPermission::where('uid', $uid)->firstOrFail();
        } catch (\Exception $e) {
            return response()->json(['message' => 'Acl Permission found'], 404);
        }

        $aclPermission->fill($data);
        $aclPermission->save();

        return response()->json($aclPermission);
    }

    /**
     * Delete Acl Permissions
     *
     * @urlParam uid required string
     * @param  string  $uid
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model|\Illuminate\Http\JsonResponse|object|null
     * @throws \Exception
     */
    public function destroy(string $uid)
    {
        try {
            $aclPermission = AclPermission::where('uid', $uid)->first();
        } catch (\Exception $e) {
            return response()->json(['message' => 'Acl Permission found'], 404);
        }

        $aclPermission->delete();

        return $aclPermission;
    }
}
