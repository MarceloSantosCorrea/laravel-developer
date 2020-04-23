<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;

/**
 * Class UserController
 * @package App\Http\Controllers\Api
 * @group Users
 */
class UserController extends Controller
{
    /**
     * List Users
     *
     * @authenticated
     * @response{"current_page": 1,
     * "data": [{
     *      "uid": "5e8e3576aa682",
     *      "firstname": "First Name User 01",
     *      "lastname": "Last Name User 01",
     *      "email": "emailuser01@email.com",
     *      "email_verified_at": "2020-04-08T20:35:02.000000Z",
     *      "avatar": null,
     *      "is_admin": true,
     *      "created_at": "2020-04-08T20:35:02.000000Z",
     *      "updated_at": "2020-04-08T20:35:02.000000Z",
     *      "name": "First Name User 01 Last Name User 01"
     *      },
     *      {
     *      "uid": "5e8e3576c37b1",
     *      "firstname": "First Name User 02",
     *      "lastname": "Last Name User 02",
     *      "email": "emailuser02@email.com",
     *      "email_verified_at": "2020-04-08T20:35:02.000000Z",
     *      "avatar": null,
     *      "is_admin": false,
     *      "created_at": "2020-04-08T20:35:02.000000Z",
     *      "updated_at": "2020-04-08T20:35:02.000000Z",
     *      "name": "First Name User 02 Last Name User 02"
     * }],
     * "first_page_url": "http:\/\/localhost:8000\/api\/users?page=1",
     * "from": 1,
     * "last_page": 1,
     * "last_page_url": "http:\/\/localhost:8000\/api\/users?page=1",
     * "next_page_url": null,
     * "path": "http:\/\/localhost:8000\/api\/users",
     * "per_page": 15,
     * "prev_page_url": null,
     * "to": 2,
     * "total": 2
     * }
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $all = User::paginate();

        return response()->json($all);
    }

    /**
     * Create User
     *
     * @authenticated
     * @bodyParam firstname string required The first name of the user. Example: John
     * @bodyParam lastname string The last name of the user. Example: Well
     * @bodyParam email string required The email of the user to access. Example: johnWell@email.com
     * @bodyParam password string required The password of the user to access. Example: 12345678
     * @bodyParam avatar image
     *
     * @response {
     *  "uid": "5e8e369a46940",
     *  "firstname": "John",
     *  "lastname": "Well",
     *  "name": "Júlia Corrêa",
     *  "email": "johnWell@email.com",
     *  "avatar": "storage\/avatars\/ygrUPz830GFj2L1qsZ69dNWuAxvvtPhZjs7JrbbR.jpeg",
     *  "updated_at": "2020-04-08T20:39:54.000000Z",
     *  "created_at": "2020-04-08T20:39:54.000000Z"
     * }
     * @response 422{"message": "The given data was invalid.","errors": {"firstname": ["The firstname field is required."]}}
     *
     * @param  UserRequest  $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Throwable
     */
    public function store(UserRequest $request)
    {
        $data = $request->all();

        $data['avatar'] = User::uploadAvatar($request);

        try {
            $user = User::createCustom($data);

            return response()->json($user);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 404);
        }
    }

    /**
     * Show User
     *
     * @authenticated
     * @urlParam uid required string
     * @response 404{"message": "User not found"}
     *
     * @param  string  $uid
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model|\Illuminate\Http\JsonResponse|object|null
     */
    public function show(string $uid)
    {
        try {
            return User::where('uid', $uid)->firstOrFail();
        } catch (\Exception $e) {
            return response()->json(['message' => 'User not found'], 404);
        }
    }

    /**
     * Update User
     *
     * @authenticated
     * @urlParam uid required string
     * @param  UserRequest  $request
     * @param  string  $uid
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UserRequest $request, string $uid)
    {
        $data = $request->all();

        $data['avatar'] = User::uploadAvatar($request);

        try {
            $user = User::where('uid', $uid)->firstOrFail();
        } catch (\Exception $e) {
            return response()->json(['message' => 'User not found'], 404);
        }

        $user->fill($data);
        $user->save();

        return response()->json($user);
    }

    /**
     * Delete User
     *
     * @authenticated
     * @urlParam uid required string
     * @param  string  $uid
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model|\Illuminate\Http\JsonResponse|object|null
     * @throws \Exception
     */
    public function destroy(string $uid)
    {
        try {
            $user = User::where('uid', $uid)->first();
        } catch (\Exception $e) {
            return response()->json(['message' => 'User not found'], 404);
        }

        $user->delete();

        return $user;
    }
}
