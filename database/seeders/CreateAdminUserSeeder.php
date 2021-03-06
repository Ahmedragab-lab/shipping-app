<?php
namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class CreateAdminUserSeeder extends Seeder{
    /*** Run the database seeds.** @return void*/
    public function run(){
        $user = User::create([
            'name'     =>'Wolf',
            'email'    =>'ahmedragabyasin2020@gmail.com',
            'password' =>bcrypt('258258258'),
            'roles_name'=>['Owner'],
            'status'=>'active',
        ]
    );

        $role = Role::create([
            'name' => 'admin',
        ]);

        $permissions = Permission::pluck('id','id')->all();
        $role->syncPermissions($permissions);
        $user->assignRole([$role->id]);
        $user = User::create([
            'name'     =>'Dina',
            'email'    =>'dina26@gmail.com',
            'password' =>bcrypt('123456789'),
            'roles_name'=>['Owner'],
            'status'=>'active',
        ]
      );
      $permissions = Permission::pluck('id','id')->all();
      $role->syncPermissions($permissions);
      $user->assignRole([$role->id]);
    }}
    
