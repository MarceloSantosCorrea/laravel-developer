<?php

use Illuminate\Database\Seeder;

class AclTableSeeder extends Seeder
{
    /**
     * @throws Exception
     */
    public function run()
    {
        $acl = \Config::get('acl');

        foreach ($acl['roles'] as $role) {
            \App\Models\AclRole::create([
                'name'       => $role['name'],
                'label'      => $role['label'],
                "created_at" => new \DateTime("now"),
                "updated_at" => new \DateTime("now"),
            ]);
        }

        foreach ($acl['permissions'] as $permission) {
            \App\Models\AclPermission::create([
                'name'       => $permission['name'],
                'label'      => $permission['label'],
                "created_at" => new \DateTime("now"),
                "updated_at" => new \DateTime("now"),
            ]);
        }
    }
}
