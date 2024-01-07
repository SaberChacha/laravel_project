<?php

namespace Database\Seeders;

use App\Models\LoanAmortizationSchedule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LoanAmortizationScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LoanAmortizationSchedule::factory(100)->create();
    }
}