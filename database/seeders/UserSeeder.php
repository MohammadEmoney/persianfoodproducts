<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('users')->truncate();
        DB::table('roles')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $user = Role::create(['name' => 'user']);
        $admin = Role::create(['name' => 'admin']);
        User::factory()
            ->count(1)
            ->create([
                'name' => 'Admin',
                'first_name' => 'Admin',
                'email' => 'admin@persianclassicproducts.com',
                'phone' => '+18122506890',
            ]);
        $user = User::find(1);
        $user->assignRole($admin);

    }
}
