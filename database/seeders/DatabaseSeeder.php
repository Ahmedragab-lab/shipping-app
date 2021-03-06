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
        $this->call(PermissionTableSeeder::class);
        $this->call(CreateAdminUserSeeder::class);
        $this->call(ClientSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(SectionSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(FeedbackSeeder::class);
    }
}
