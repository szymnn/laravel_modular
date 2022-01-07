<?php

namespace Database\Seeders;

use App\Models\Stats;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class CreatePermissions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create posts permissions
        Permission::create(['name' => 'post show']);
        Permission::create(['name' => 'post create']);
        Permission::create(['name' => 'post edit']);
        Permission::create(['name' => 'post self edit']);
        Permission::create(['name' => 'post delete']);

        // create categories permissions
        Permission::create(['name' => 'categories create']);
        Permission::create(['name' => 'categories edit']);
        Permission::create(['name' => 'categories delete']);

        // create users permissions
        Permission::create(['name' => 'user create']);
        Permission::create(['name' => 'user edit']);
        Permission::create(['name' => 'user delete']);
        Permission::create(['name' => 'user setPermission']);
        Permission::create(['name' => 'user show']);


        // create roles and assign existing permissions
        $user = Role::create(['name' => 'User']);
        $user->givePermissionTo('post show');



        $moderator = Role::create(['name' => 'Moderator']);
        $moderator->givePermissionTo('post show');
        $moderator->givePermissionTo('post create');
        $moderator->givePermissionTo('post self edit');
        $moderator->givePermissionTo('categories create');


        $admin = Role::create(['name' => 'Admin']);

        //TEST USER
        $TEST_USER = \App\Models\User::factory()->create([
            'name' => 'user',
            'email' => 'user@user.com',
            'password' => bcrypt('user')
        ]);
        $data = [
            "user_id"   => $TEST_USER->id,
            "posts"     => 0,
            "coments"   => 0,
            "exp"       =>0
        ];
        Stats::create($data);
        $TEST_USER->assignRole($user);

        //TEST MODERATOR
        $TEST_MOD = \App\Models\User::factory()->create([
            'name' => 'mod',
            'email' => 'mod@mod.com',
            'password' => bcrypt('mod')
        ]);
        $data = [
            "user_id"   => $TEST_MOD->id,
            "posts"     => 0,
            "coments"   => 0,
            "exp"       =>0
        ];
        Stats::create($data);
        $TEST_MOD->assignRole($moderator);

        //TEST ADMIN
        $TEST_ADM = \App\Models\User::factory()->create([
            'name' => 'adm',
            'email' => 'adm@adm.com',
            'password' => bcrypt('adm')
        ]);
        $data = [
            "user_id"   => $TEST_ADM->id,
            "posts"     => 0,
            "coments"   => 0,
            "exp"       =>0
        ];
        Stats::create($data);
        $TEST_ADM->assignRole($admin);

    }

}
