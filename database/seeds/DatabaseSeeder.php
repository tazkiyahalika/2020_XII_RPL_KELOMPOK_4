<?php

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
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ExtracurricularsTableSeeder::class);
        $this->call(CoachesTableSeeder::class);
        
        //$this->call(StudentsTableSeeder::class);
    }
}
