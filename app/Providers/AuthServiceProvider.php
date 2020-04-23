<?php

namespace App\Providers;

use App\Models\AclPermission;
use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Laravel\Passport\Passport;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Passport::routes();

        try {
            if (\Schema::hasTable('acl_permissions')) {

                $aclPermissions = AclPermission::with('roles')->get();

                foreach ($aclPermissions as $aclPermission) {

                    \Gate::define($aclPermission->name, function (User $user) use ($aclPermission) {

                        if ($user->is_admin) {
                            return true;
                        }

                        return $user->hasPermission($aclPermission);
                    });
                }
            }
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
}
