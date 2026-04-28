<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use App\Models\User;
class RolesandPermission extends Seeder
{
   /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //this creates the seeder for different rolesfor login in the system

        $studentRole = Role::firstOrCreate(['name'  => 'student']);
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $teacherRole  = Role::firstOrCreate(['name' => 'teacher']);

                //create the admin usera
        $student = User::create([
            'name' => 'pupil',
            'email' => 'student@exampe.com',
              'role' => 'student',
            'password' => Hash::make('12345678'),
        ]);
        $student -> AssignRole($studentRole);


        //create the seeder  for  the teacher role
        $teacher = User::create([
            'name'  => 'tutor',
            'email' => 'teacher@exmple.com',
            'role' => 'teacher',
            'password'  => Hash::make('12345678')
        ]);
        $teacher -> AssignRole($teacherRole);


        //create the student role seeder
        $admin = User::create([
            'name'  =>  'SuperUser',
            'email'  => 'admin@example.com',
            'role'   => 'admin',
            'password' => Hash::make('12345678'),
        ]);
        $admin -> AssignRole($adminRole);

        

    }   
}
