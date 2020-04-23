<?php

namespace App\Listeners;

use App\Events\UserSavedEvent;
use App\Models\Acl\AclRoleUser;
use App\Models\AclRole;

class UserSavedAclRolesListener
{
    /**
     * Handle the event.
     *
     * @param  UserSavedEvent  $event
     * @return void
     */
    public function handle(UserSavedEvent $event)
    {
        if (isset($event->data['roles'])) {

            $roles = $event->data['roles'];
            if (is_string($roles)) {
                $roles = [$roles];
            }

            foreach ($roles as $role) {

                $role = AclRole::where('name', $role)->first();
                if ($role) {

                    try {
                        AclRoleUser::where(['user_id' => $event->user->id])->delete();
                    } catch (\Exception $e) {

                    }

                    foreach ($event->data['roles'] as $role) {
                        AclRoleUser::create([
                            'acl_role_id' => $role,
                            'user_id'     => $event->user->id,
                        ]);
                    }
                }
            }
        }
    }
}
