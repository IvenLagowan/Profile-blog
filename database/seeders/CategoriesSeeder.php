<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Pengembangan Perangkat Lunak AI',
                'slug' => 'pengembangan-perangkat-lunak-ai',
            ],
            [
                'name' => 'Manajemen Proyek Teknologi',
                'slug' => 'manajemen-proyek-teknologi',
            ],
            [
                'name' => 'Penelitian dan Pengembangan:',
                'slug' => 'penelitian-pengembangan:',
            ],
            [
                'name' => 'Infrastruktur Teknologi',
                'slug' => 'infrastruktur-teknologi',
            ],
            [
                'name' => 'Pemasaran dan Komunikasi Teknologi',
                'slug' => 'pemasaran-komunikasi-teknologi',
            ]
        ];


        DB::table('categories')->insert($categories);
    }
}
