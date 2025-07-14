<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Car;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Car::create([
            'make' => 'Toyota',
            'model' => 'Corolla',
            'produced_on' => '2020-01-01',
        ]);

        Car::create([
            'make' => 'Honda',
            'model' => 'Civic',
            'produced_on' => '2019-05-15',
        ]);

        Car::create([
            'make' => 'Ford',
            'model' => 'Focus',
            'produced_on' => '2021-03-10',
        ]);
    }
}
