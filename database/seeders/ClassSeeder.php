<?php

namespace Database\Seeders;

use App\Models\ClassRoom;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;


class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        ClassRoom::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            ['namaMataKuliah' => 'APL', 'namaDosen' => 'Bu Mardiyah'],
            ['namaMataKuliah' => 'Basis data', 'namaDosen' => 'Bu Wisti'],
            ['namaMataKuliah' => 'logika', 'namaDosen' => 'Pak Lukman']
        ];
        foreach ($data as $value) {

            ClassRoom::insert([
                'namaMataKuliah' => $value['namaMataKuliah'],
                'namaDosen' => $value['namaDosen'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ]);
        }
    }
}
