<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Team members
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(([
            'name' => 'Yuttakhan',
            'surname' => 'Baingen',
            'email' => '60010842@kmitl.ac.th',
            'password' => Hash::make('bierbierbier'),
        ]));

        DB::table('users')->insert(([
            'name' => 'Karin',
            'surname' => 'Onwong',
            'email' => '60010018@kmitl.ac.th',
            'password' => Hash::make('oatoatoat'),
        ]));

        DB::table('users')->insert(([
            'name' => 'Wichitchai',
            'surname' => 'Buathong',
            'email' => '60010933@kmitl.ac.th',
            'password' => Hash::make('cilcilcil'),
        ]));

        DB::table('users')->insert(([
            'name' => 'Terapat',
            'surname' => 'Chattrakul',
            'email' => '60010477@kmitl.ac.th',
            'password' => Hash::make('teoyteoyteoy'),
        ]));

        DB::table('users')->insert(([
            'name' => 'Tunpitcha',
            'surname' => 'Raiprasert',
            'email' => '60010456@kmitl.ac.th',
            'password' => Hash::make('nahnahnah'),
        ]));
    }
}
