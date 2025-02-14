<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //DB::table('users')->insert([
         //   'name'=>'hola',
          //  'lastname'=>'oh',
          //  'username'=>'hola.o',
          //  'email'=> 'hola@.com',
         //   'password'=> Hash::make('password'),
       // ]);

       //User::create([
   //     'name'=>'Zoe',
     //   'lastname'=>'A',
       // 'username'=>'ZoeA',
        //'email'=>'Zooo@gmail.com',
        //'password'=> Hash::make('password'),
       //]);

       User::factory(10)->create();

    }
}
