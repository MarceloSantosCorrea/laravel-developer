<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AclRoleUser extends Model
{
    protected $table      = 'acl_role_user';
    public    $timestamps = false;
    protected $fillable   = ['user_id', 'acl_role_id'];

    /**
     * Create Custom
     *
     * @param  array  $data
     * @return User|\Illuminate\Database\Eloquent\Model
     * @throws \Exception
     */
    public static function createCustom(array $data)
    {
        $data = [
            'user_id'     => (isset($data['user_id'])) ? $data['user_id'] : User::where('uid',
                $data['user_uid'])->first()->id,
            'acl_role_id' => (isset($data['acl_role_id'])) ? $data['acl_role_id'] : AclRole::where('uid',
                $data['acl_role_uid'])->first()->id,
        ];

        try {
            \DB::beginTransaction();

            if ($model = self::create($data)) {
                \DB::commit();

                return $model;
            }
        } catch (\Exception $e) {
            \DB::rollBack();
            throw $e;
        }
    }

    /**
     * Update Custom
     *
     * @param  array  $data
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @return \Illuminate\Database\Eloquent\Model
     * @throws \Exception
     */
    public static function updateCustom(array $data, \Illuminate\Database\Eloquent\Model $model)
    {
        try {
            \DB::beginTransaction();

            $model->fill($data);

            if ($model->update()) {
                \DB::commit();

                return $model;
            }

        } catch (\Exception $e) {
            \DB::rollBack();
            throw $e;
        }
    }

    /**
     * Delete Custom
     *
     * @param  \Illuminate\Database\Eloquent\Model  $user
     * @return \Illuminate\Database\Eloquent\Model
     * @throws \Exception
     */
    public static function deleteCustom(\Illuminate\Database\Eloquent\Model $user)
    {
        try {
            \DB::beginTransaction();

            if ($user->delete()) {
                \DB::commit();

                return $user;
            }

        } catch (\Exception $e) {
            \DB::rollBack();
            throw $e;
        }
    }
}
