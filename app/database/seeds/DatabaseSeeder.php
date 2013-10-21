<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UserTableSeeder');
		$this->call('RoleTableSeeder');
		$this->call('PermissionTableSeeder');

		$this->command->info('Database seeded!');
	}

}

class UserTableSeeder extends Seeder {

	public function run()
	{
		DB::table('users')->delete();

		$user = new User;

		$user->username = 'Admin';
        $user->email = 'Admin@test.com';
        $user->password = 'testing';

        // The password confirmation will be removed from model before saving. This field will be used in Ardent's
        // auto validation.
        $user->password_confirmation = 'testing';
        $user->save();
	}

}

class RoleTableSeeder extends Seeder {

	public function run()
	{
		DB::table('roles')->delete();
		DB::table('assigned_roles')->delete();

		$owner = new Role;
		$owner->name = 'Owner';
		$owner->save();

		$admin = new Role;
		$admin->name = 'Admin';
		$admin->save();

		$admin = Role::where('name', 'Admin')->first();

		$user = User::where('username','=','Admin')->first();
		$user->roles()->attach($admin->id);
	}

}

class PermissionTableSeeder extends Seeder {

	public function run()
	{
		DB::table('permissions')->delete();
		DB::table('permission_role')->delete();

		$managePosts = new Permission;
		$managePosts->name = 'manage_posts';
		$managePosts->display_name = 'Manage Posts';
		$managePosts->save();

		$manageUsers = new Permission;
		$manageUsers->name = 'manage_users';
		$manageUsers->display_name = 'Manage Users';
		$manageUsers->save();

		$owner = Role::where('name', 'Owner')->first();
		$owner->perms()->sync(array($managePosts->id,$manageUsers->id));

		$admin = Role::where('name', 'Admin')->first();
		$admin->perms()->sync(array($managePosts->id));
	}

}