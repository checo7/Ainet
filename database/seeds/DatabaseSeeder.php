<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DepartmentsTableSeeder::class);
        $this->call(PrintersTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(RequestsTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
    }
}
