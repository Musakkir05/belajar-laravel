<?php

namespace Database\Seeders;

use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Schema::disableForeignKeyConstraints();
        // Student::truncate();
        // Schema::enableForeignKeyConstraints();

        // $data = [
        //     ['nama' => 'Musakkir', 'stambuk' => '13020180110', 'kelas' => 'A3', 'gender' => 'L', 'class_id' => '2'],
        //     ['nama' => 'ainun', 'stambuk' => '13020180101', 'kelas' => 'A3', 'gender' => 'L', 'class_id' => '1'],
        //     ['nama' => 'Aslam', 'stambuk' => '13020180112', 'kelas' => 'A3', 'gender' => 'L', 'class_id' => '3'],
        //     ['nama' => 'Zul', 'stambuk' => '13020180103', 'kelas' => 'A3', 'gender' => 'L', 'class_id' => '2']
        // ];
        // foreach ($data as $value) {
        //     Student::insert([
        //         'nama' => $value['nama'],
        //         'stambuk' => $value['stambuk'],
        //         'kelas' => $value['kelas'],
        //         'gender' => $value['gender'],
        //         'class_id' => $value['class_id'],
        //         'created_at' => Carbon::now(),
        //         'Updated_at' => Carbon::now()
        //     ]);
        // }
        Student::factory()->count(100)->create();
    }
}
