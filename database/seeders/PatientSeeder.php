<?php

namespace Database\Seeders;

use App\Models\Patient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Patient::insert([
            [
                'name' => 'OPD',

            ],
            [
                'name' => 'X-Ray',

            ],
            [
                'name' => 'EEG',

            ],
            [
                'name' => 'ICU',

            ],
            [
                'name' => 'Lab',

            ],
            [
                'name' => 'Ward',

            ],
            [
                'name' => 'Neurology procedure',

            ],
            [
                'name' => 'Consultation',

            ],
            [
                'name' => 'Mri',
            ],
            [
                'name' => 'CT-Scan',

            ]
        ]);
    }
}
