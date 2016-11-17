<?php

use App\Permission;
use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminUser = factory(User::class)->create([
            'username' => 'silvano',
            'email' => 'salvesvence@gmail.com',
            'password' => bcrypt('ZI5da7NE1021'),
            'remember_token' => str_random(10),
            'firstname' => 'Silvano',
            'lastname' => 'Alves Vence',
        ]);

        $adminRole = Role::create([
            'name' => 'admin',
            'display_name' => 'Administrator'
        ]);

        $adminRole->permissions()->sync(
            $this->createPermissions()
        );

        $adminUser->roles()->save($adminRole);
    }

    /**
     * Create post permissions
     *
     * @return array
     */
    private function createPermissions()
    {
        $permissions = collect();

        $permissions->push(
            Permission::create([
                'name' => 'create-post',
                'display_name' => 'Create Post'
            ])
        );

        $permissions->push(
            Permission::create([
                'name' => 'update-post',
                'display_name' => 'Update Post'
            ])
        );

        $permissions->push(
            Permission::create([
                'name' => 'delete-post',
                'display_name' => 'Delete Post'
            ])
        );

        $permissions->push(
            Permission::create([
                'name' => 'show-post',
                'display_name' => 'Show Post'
            ])
        );

        return $permissions->pluck('id')->toArray();
    }
}
