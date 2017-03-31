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
        // $this->call(UsersTableSeeder::class);
        factory(\App\Models\User::class, 10)->create();
        factory(\App\Models\Category::class, 5)->create();
        factory(\App\Models\Post::class, 100)->create();
        factory(\App\Models\Comment::class, 200)->create();

        //categories
    }
}
