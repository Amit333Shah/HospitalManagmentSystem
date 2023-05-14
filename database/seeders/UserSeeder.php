<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


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
            ['name' => "GrukulAdmin",
            'email' => "GrukulAdmin@gmail.com",
            'role_id'=>"1",
            'hospital_type_id'=>"1",
            'status'=>"active",
            'password' => Hash::make('12345678')
        ],

            ['name' => "RishikulAdmin",
            'email' => "RishikulAdmin@gmail.com",
            'role_id'=>"1",
            'hospital_type_id'=>"2",
            'status'=>"active",
            'password' => Hash::make('12345678')
        ],
        ['name' => "FOAAdmin",
            'email' => "FOAAdmin@gmail.com",
            'role_id'=>"1",
            'hospital_type_id'=>"3",
            'status'=>"active",
            'password' => Hash::make('12345678')
        ],
        ]);
    }
}
