<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('patients')->insert([
        [
            'patient_id' => 'PAT001',
            'name' => 'Amit',
            'age' => 24,
            'disease' => 'Fever',
            'admission_date' => now(),
        ],
        [
            'patient_id' => 'PAT002',
            'name' => 'Rahul',
            'age' => 31,
            'disease' => 'Cold',
            'admission_date' => now(),
        ]
    ]);
    }
}
