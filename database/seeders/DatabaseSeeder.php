<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Hoàng Phương Ly',
                'email' => 'hoangphuongly37@gmail.com', 
                'password' => bcrypt('123456'),
                'created_at' => new DateTime,
            ],
            [
                'name' => 'Hoàng Trung Kiên',
                'email' => 'hoangkien@gmail.com', 
                'password' => bcrypt('123456'),
                'created_at' => new DateTime,
            ],
            [
                'name' => 'Nguyễn Bảo Khánh',
                'email' => 'khanhnguyen@gmail.com', 
                'password' => bcrypt('123456'),
                'created_at' => new DateTime,
            ],
            [
                'name' => 'Trần Văn Tiến',
                'email' => 'Tien2810@gmail.com', 
                'password' => bcrypt('123456'),
                'created_at' => new DateTime,
            ],
        ]);
    }
}