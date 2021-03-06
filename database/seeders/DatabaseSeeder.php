<?php

namespace Database\Seeders;

use App\Models\MakeUrl;
use App\Models\Post;
use App\Models\Project;
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
        \App\Models\User::factory(10)->create();
        Post::factory(50)->create();
        Project::factory(50)->create();
        MakeUrl::factory(50)->create();
    }
}
