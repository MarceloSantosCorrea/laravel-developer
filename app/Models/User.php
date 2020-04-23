<?php

namespace App\Models;

use App\Events\UserSavedEvent;
use App\Traits\BootTrait;
use App\Traits\SoftDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, Notifiable, SoftDeletes, BootTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'lastname', 'email', 'password', 'avatar', 'is_admin', 'language', 'is_active', 'email_verified',
        'mobile_verified_at', 'user_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id', 'password', 'remember_token', 'deleted_at',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'created_at'        => 'datetime',
        'updated_at'        => 'datetime',
        'deleted_at'        => 'datetime',
        'is_admin'          => 'boolean',
        'is_active'         => 'boolean',
    ];

    protected $appends = ['name', 'avatar_url'];

    protected $softDeleteColumns = ['email'];

    /**
     * @return string
     */
    public function getNameAttribute()
    {
        return trim(sprintf('%s %s', $this->firstname, $this->lastname));
    }

    public function getAvatarUrlAttribute()
    {
        return url($this->avatar);
    }

    /**
     * @param  Request  $request
     * @return string|null
     */
    public static function uploadAvatar(Request $request)
    {
        if ($request->hasFile('avatar')) {

            $file = $request->file('avatar');
            if ($file->isValid()) {

                $filename = $file->hashName();
                $path     = $request->file('avatar')->storeAs('avatars', $filename, ['disk' => 'public']);

                $make = \Image::make(storage_path("app/public/{$path}"));
                $make->resize(160, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save(storage_path("app/public/{$path}"));

                return "storage/{$path}";
            }
        }

        return null;
    }

    public function roles()
    {
        return $this->belongsToMany(AclRole::class);
    }

    public function hasPermission(AclPermission $aclPermission)
    {
        return $this->hasAnyRoles($aclPermission->roles);
    }

    public function hasAnyRoles($roles)
    {
        if (is_array($roles) || is_object($roles)) {
            foreach ($roles as $role) {
                if ($this->roles->contains('name', $role->name)) {
                    return true;
                }
            }

            return false;
        }

        return $this->roles->contains('name', $roles);
    }

    /**
     * Create Custom
     *
     * @param  array  $data
     * @return User|\Illuminate\Database\Eloquent\Model
     * @throws \Throwable
     */
    public static function createCustom(array $data)
    {
        try {
            \DB::beginTransaction();

            if ($model = self::create($data)) {
                event(new UserSavedEvent($model, $data));
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
     * @throws \Throwable
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
     * @throws \Throwable
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
