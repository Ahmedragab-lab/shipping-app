<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name'     =>'ahmed',
            'email'    =>'ahmed@gmail.com',
            'password' =>bcrypt('258258258'),
            'roles_name'=>['client'],
            'status'=>'active',
            ]
        );
    }
}
