<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModeEvents;
use Illuminate\Database\Seeder;
use App\Models\Blog;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Blog::factory()->count(10)->create();
    }
}
