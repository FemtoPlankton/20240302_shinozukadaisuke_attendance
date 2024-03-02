<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttendancesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'Yamada',
            'time' => now()->format('Y-m-d H:i:s')
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'name' => 'Tanaka',
            'time' => now()->format('Y-m-d H:i:s')
        ];
        DB::table('attendances')->insert($param);
        $param = [
            'name' => 'Satou',
            'time' => now()->format('Y-m-d H:i:s')
        ];
        DB::table('attendances')->insert($param);
    }
}
