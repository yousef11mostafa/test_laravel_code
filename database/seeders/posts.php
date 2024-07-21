<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use illuminate\Support\str;

class posts extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=0;$i<5;$i++){
        DB::table('posts')->insert([
            'user_id'=>1,
            'title'=>str::random(10),
            'details'=>str::random(50),
        ]);
    }
    }
}
