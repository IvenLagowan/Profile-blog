<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class WorksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $works = [
            [
                'user_id' => 1,
                'title' => 'Lowongan Pekerjaan 1',
                'slug' => 'lowongan-pekerjaan-1',
                'image' => '',
                'jobdesk' => 'Lorem ipsum dolor sit amet. This is a sample job desk for work 1.',
                'education' => 'Bachelor\'s Degree',
                'gender' => 'Any',
                'status' => 'Full-time',
                'deadline' => Carbon::now()->addDays(15)->toDateString(),
                'kriteria' => 'Experience in related field',
                'benefit' => 'Competitive salary, health benefits',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 1,
                'title' => 'Lowongan Pekerjaan 2',
                'slug' => 'lowongan-pekerjaan-2',
                'image' => '',
                'jobdesk' => 'Lorem ipsum dolor sit amet. This is a sample job desk for work 2.',
                'education' => 'Master\'s Degree',
                'gender' => 'Male',
                'status' => 'Part-time',
                'deadline' => Carbon::now()->addDays(30)->toDateString(),
                'kriteria' => 'Strong communication skills',
                'benefit' => 'Flexible working hours',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('works')->insert($works);
    }
}
