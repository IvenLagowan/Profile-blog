<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $news = [
            [
                'category_id' => 1,
                'user_id' => 1,
                'title' => 'Berita Ke 1',
                'slug' => 'berita-ke-1',
                'excerpt' => 'This is a sample excerpt for the news article 1.',
                'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non at ex error, saepe commodi rerum aperiam! Omnis dolore quia placeat aspernatur exercitationem beatae perferendis provident. This is the body of the news article 1.',
                'published_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'category_id' => 2,
                'user_id' => 1,
                'title' => 'Berita Ke 2',
                'slug' => 'berita-ke-2',
                'excerpt' => 'This is a sample excerpt for the news article 2.',
                'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non at ex error, saepe commodi rerum aperiam! Omnis dolore quia placeat aspernatur exercitationem beatae perferendis provident. This is the body of the news article 2.',
                'published_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'category_id' => 3,
                'user_id' => 1,
                'title' => 'Berita Ke 3',
                'slug' => 'berita-ke-3',
                'excerpt' => 'This is a sample excerpt for the news article 3.',
                'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non at ex error, saepe commodi rerum aperiam! Omnis dolore quia placeat aspernatur exercitationem beatae perferendis provident. This is the body of the news article 3.',
                'published_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'category_id' => 4,
                'user_id' => 1,
                'title' => 'Berita Ke 4',
                'slug' => 'berita-ke-4',
                'excerpt' => 'This is a sample excerpt for the news article 4.',
                'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non at ex error, saepe commodi rerum aperiam! Omnis dolore quia placeat aspernatur exercitationem beatae perferendis provident. This is the body of the news article 4.',
                'published_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'category_id' => 5,
                'user_id' => 1,
                'title' => 'Berita Ke 5',
                'slug' => 'berita-ke-5',
                'excerpt' => 'This is a sample excerpt for the news article 5.',
                'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non at ex error, saepe commodi rerum aperiam! Omnis dolore quia placeat aspernatur exercitationem beatae perferendis provident. This is the body of the news article 5.',
                'published_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'category_id' => 6,
                'user_id' => 1,
                'title' => 'Berita Ke 6',
                'slug' => 'berita-ke-6',
                'excerpt' => 'This is a sample excerpt for the news article 6.',
                'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non at ex error, saepe commodi rerum aperiam! Omnis dolore quia placeat aspernatur exercitationem beatae perferendis provident. This is the body of the news article 6.',
                'published_at' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('news')->insert($news);
    }
}
