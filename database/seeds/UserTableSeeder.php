<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{

    public function run()
    {
        \Illuminate\Support\Facades\DB::table('users')->delete();
        Model::unguard();

        User::create([
            'email' => 'admin@mail.com',
            'password' => Hash::make('admin1'),
            'login' => 'admin'
        ]);
    }

}