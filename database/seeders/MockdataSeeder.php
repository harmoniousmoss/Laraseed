<?php

namespace Database\Seeders;

use App\Models\Mockdata;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MockdataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mockdata::truncate();

        $csvfile = fopen(base_path('database/seeders/MOCK_DATA.csv'), 'r');
        $firstline = true;
        while (($data = fgetcsv($csvfile, 2000, ",")) !== false) {
            if (!$firstline) {
                Mockdata::create([
                    "first_name" => $data['1'],
                    "last_name" => $data['2'],
                    "email" => $data['3'],
                    "gender" => $data['4'],
                ]);
            }
            $firstline = false;
        }

        fclose($csvfile);
    }
}
