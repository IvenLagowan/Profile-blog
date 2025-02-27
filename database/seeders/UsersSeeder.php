<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Admin 1',
                'username' => 'admin1',
                'email' => 'admin1@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('password'),
            ],
        ];

        DB::table('users')->insert($users);
    }
}
