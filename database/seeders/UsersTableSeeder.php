<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        //admin
        User::create([
            'name' => 'Dylan',
            'email' => 'Dylan@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123456789'), // password
            'cedula' => '1001856801',
            'address'=>'tajamar carrera 15a',
            'phone'=> '3006829856',
            'role'=> 'admin',
        ]);
        //doctor
        User::create([
            'name' => 'doctor',
            'email' => 'doctor@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123456789'), // password
            'cedula' => '1001856801',
            'address'=>'tajamar carrera 15a',
            'phone'=> '3006829856',
            'role'=> 'doctor',
        ]);
        //paciente
        User::create([
            'name' => 'paciente',
            'email' => 'paciente@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123456789'), // password
            'cedula' => '1001856801',
            'address'=>'tajamar carrera 15a',
            'phone'=> '3006829856',
            'role'=> 'paciente',
        ]);

        User::factory()
            ->count(20)
            ->state(['role' => 'paciente'])
            ->create();
    }
}
