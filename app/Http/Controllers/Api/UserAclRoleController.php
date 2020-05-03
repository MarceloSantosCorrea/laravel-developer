<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserAclRoleRequest;
use App\Models\AclRoleUser;

class UserAclRoleController extends Controller
{
    /**
     * List Acl Roles Users
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $all = AclRoleUser::paginate();

        return response()->json($all);
    }

    public function store(UserAclRoleRequest $request)
    {
        try {
            $model = AclRoleUser::createCustom($request->all());

            return response()->json($model);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 404);
        }
    }
}
