<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        $roles = ['Admin', 'Editor', 'User'];

        foreach ($roles as $role) {
            DB::table('roles')->updateOrInsert(
                ['name' => $role], // Check if the role name already exists
                ['name' => $role]  // If it doesn't exist, insert it
            );
        }
    }
}
