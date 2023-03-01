<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::truncate();
        DB::table('posts')->insert(
            [
                [
                    'title' => 'titre 1',
                    'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                ],
                [
                    'title' => 'titre 2',
                    'content' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                ],
                [
                    'title' => 'titre 3',
                    'content' => 'Iaculis urna id volutpat lacus. Nibh cras pulvinar mattis nunc sed blandit libero volutpat sed. Pretium vulputate sapien nec sagittis aliquam malesuada bibendum.',
                ]
            ]
        );
    }
}
