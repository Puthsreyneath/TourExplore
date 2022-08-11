<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admins = [
            [
                'name' => 'banana',
                'email' => 'banana@gmail.com',
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => 'sreynit',
                'email' => 'sreynit@gmail.com',
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => 'tinong',
                'email' => 'tinong@gmail.com',
                'password' => Hash::make('12345678'),
            ],
        ];
        foreach($admins as $key => $value){
            Admin::create($value);
        }
    }
}
