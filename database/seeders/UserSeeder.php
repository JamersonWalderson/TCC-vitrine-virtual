<?php

namespace Database\Seeders;

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
            'name'=>'James',
            'login'=>'master',
            'email'=>'jamersonwaldeson@gmail.com',
            'password'=>'admin2020',
            'level'=>'1',
        ]);
    }
}
