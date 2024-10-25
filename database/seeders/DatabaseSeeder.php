<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Seed permissions first
        $this->call(PermissionSeeder::class);

        // Then seed roles
        $this->call(RoleSeeder::class);

        // Finally, seed users
        $this->call(UserSeeder::class);
    }
}
