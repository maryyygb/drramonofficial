<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Hash;
use App\Models\Teacher;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $obj = new Teacher();
        $obj->name = 'Teacher';
        $obj->email = 'teacher1@gmail.com';
        $obj->password = Hash::make('123456');
        $obj->save();
        //
    }
}
