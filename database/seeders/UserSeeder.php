<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            [
                'name' => "admin",
                'email' => "admin@del.ac.id",
                'password' => '$2y$10$UUs6/kp7VuZyvW9OlCHyW.3LTYbaCdCaUIIuhHmM9UAlyl4YJ0RoC'
            ]
        ]);
    }
}
