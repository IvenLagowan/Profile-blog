<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AppliesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $applies = [
            [
                'title' => 'Sample Apply Title 1',
                'name' => 'John Doe',
                'email' => 'john.doe@example.com',
                'phone' => '123-456-7890',
                'education' => 'Bachelor\'s Degree',
                'school' => 'Sample University',
                'major' => 'Computer Science',
                'cv' => 'cv_filename.pdf',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('applies')->insert($applies);
    }
}
