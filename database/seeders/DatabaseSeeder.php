<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\student;
use App\Models\Grade;
use App\Models\Department;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Student::factory(100)->create();


        Grade::factory()->create(['kelass' => '10 PPLG 1', 'department_id' => 1]);
        Grade::factory()->create(['kelass' => '10 PPLG 2', 'department_id' => 1]);
        Grade::factory()->create(['kelass' => '11 PPLG 1', 'department_id' => 1]);
        Grade::factory()->create(['kelass' => '11 PPLG 2', 'department_id' => 1]);
        Grade::factory()->create(['kelass' => '12 PPLG 1', 'department_id' => 1]);
        Grade::factory()->create(['kelass' => '12 PPLG 2', 'department_id' => 1]);


        Grade::factory()->create(['kelass' => '10 Animasi 3D 1', 'department_id' => 2]);
        Grade::factory()->create(['kelass' => '10 Animasi 3D 2', 'department_id' => 2]);
        Grade::factory()->create(['kelass' => '10 Animasi 3D 3', 'department_id' => 2]);
        Grade::factory()->create(['kelass' => '11 Animasi 3D 1', 'department_id' => 2]);
        Grade::factory()->create(['kelass' => '11 Animasi 3D 2', 'department_id' => 2]);
        Grade::factory()->create(['kelass' => '11 Animasi 3D 3', 'department_id' => 2]);
        Grade::factory()->create(['kelass' => '12 Animasi 3D 1', 'department_id' => 2]);
        Grade::factory()->create(['kelass' => '12 Animasi 3D 2', 'department_id' => 2]);
        Grade::factory()->create(['kelass' => '12 Animasi 3D 3', 'department_id' => 2]);


        Grade::factory()->create(['kelass' => '10 Animasi 2D 4', 'department_id' => 3]);
        Grade::factory()->create(['kelass' => '10 Animasi 2D 5', 'department_id' => 3]);
        Grade::factory()->create(['kelass' => '11 Animasi 2D 4', 'department_id' => 3]);
        Grade::factory()->create(['kelass' => '11 Animasi 2D 5', 'department_id' => 3]);
        Grade::factory()->create(['kelass' => '12 Animasi 2D 4', 'department_id' => 3]);
        Grade::factory()->create(['kelass' => '12 Animasi 2D 5', 'department_id' => 3]);


        Grade::factory()->create(['kelass' => '10 DKV DG 1', 'department_id' => 4]);
        Grade::factory()->create(['kelass' => '10 DKV DG 2', 'department_id' => 4]);
        Grade::factory()->create(['kelass' => '11 DKV DG 1', 'department_id' => 4]);
        Grade::factory()->create(['kelass' => '11 DKV DG 2', 'department_id' => 4]);
        Grade::factory()->create(['kelass' => '12 DKV DG 1', 'department_id' => 4]);
        Grade::factory()->create(['kelass' => '12 DKV DG 2', 'department_id' => 4]);

       
        Grade::factory()->create(['kelass' => '10 DKV TG 3', 'department_id' => 5]);
        Grade::factory()->create(['kelass' => '10 DKV TG 4', 'department_id' => 5]);
        Grade::factory()->create(['kelass' => '10 DKV TG 5', 'department_id' => 5]);
        Grade::factory()->create(['kelass' => '11 DKV TG 3', 'department_id' => 5]);
        Grade::factory()->create(['kelass' => '11 DKV TG 4', 'department_id' => 5]);
        Grade::factory()->create(['kelass' => '11 DKV TG 5', 'department_id' => 5]);
        Grade::factory()->create(['kelass' => '12 DKV TG 3', 'department_id' => 5]);
        Grade::factory()->create(['kelass' => '12 DKV TG 4', 'department_id' => 5]);
        Grade::factory()->create(['kelass' => '12 DKV TG 5', 'department_id' => 5]);

        Department::factory()->create(['name' => 'PPLG', 'desc' => 'Jurusan yang membuat aplikasi, web, game, dekstop, IoT']);
        Department::factory()->create(['name' => 'Animasi 3D', 'desc' => 'Jurusan Animasi yang membuat film 3D']);
        Department::factory()->create(['name' => 'Animasi 2D', 'desc' => 'Jurusan Animasi yang membuat film 2D']);
        Department::factory()->create(['name' => 'DG', 'desc' => 'Jurusan yang membuat desain grafis dan produk']);
        Department::factory()->create(['name' => 'TG', 'desc' => 'Jurusan yang melakukan teknik percetakan']);

    }

}
