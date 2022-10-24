<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [ 
           [
            'username' => 'admin',
            'name' => 'admin primago',
            'email' => 'primago@example.com',
            'level' => 'admin',
            'password' => bcrypt('primago123')
           ],

           [
            'username' => 'user',
            'name' => 'Ini adalah user',
            'email' => 'user@example.com',
            'level' => 'user',
            'password' => bcrypt('user123')

           ]
           ];

          foreach($user as $key => $value){
            User::create($value); 
          }
          
     }
}
