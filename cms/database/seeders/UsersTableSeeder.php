<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email','relic.zoran82@gmail.com')->first();

        if(!$user) {

            User::create([
                'role' => 'admin',
                'name' => 'Zoran Relic',
                'email' => 'relic.zoran82@gmail.com',                
                'password' => Hash::make('password')
            ]);
        }
    }
}
