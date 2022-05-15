<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        \App\Models\Announcement::factory(12)->create();
        \App\Models\Book::factory(3)->create();
        \App\Models\Member::factory(12)->create();
        \App\Models\News::factory(12)->create();
        \App\Models\Partner::factory(12)->create();
        \App\Models\Training::factory(3)->create();
        // \App\Models\User::factory(10)->create();
    }
}
