<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            PermissionTableSeeder::class,
           ]);
        $this->call([
            CreateAdminUserSeeder::class,
           ]);
        $this->call([
            RootSeeder::class,
           ]);
        $this->call([
            CategorySeeder::class,
           ]);
        $this->call([
            BookSeeder::class,
           ]);
        $this->call([
        RoleTableSeeder::class,
        ]);
    }
}
